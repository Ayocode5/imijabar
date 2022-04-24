<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Community;
use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
	public function index()
	{
		$settings = DB::table('general_settings')->select(
			'logo',
			'top_bar_organization_name',
			'top_bar_email',
			'top_bar_phone',
			'footer_address',
			'footer_email',
			'footer_phone',
			'footer_copyright',
			'footer_column1_heading',
			'footer_column2_heading',
			'footer_column3_heading',
		)->first();

		$home_settings = DB::table('page_home_items')->select(
			'committee_title',
			'committee_detail'
		)->first();
		
		$committee = DB::table('team_members')->limit(5)->get();

		$art_section_page = DB::table('dynamic_pages')
			->select(
				'dynamic_page_name as name',
				'dynamic_page_content1 as content1'
			)
			->where('dynamic_page_slug', 'about-art-page')->first();

		$ad_section_page = DB::table('dynamic_pages')
			->select(
				'dynamic_page_name as name',
				'dynamic_page_content1 as content1'
			)
			->where('dynamic_page_slug', 'about-ad-page')->first();

		$about_settings = DB::table('page_about_items')->where('id', 1)->first();

		return view('pages.about.index', compact(['settings', 'home_settings', 'about_settings', 'art_section_page', 'ad_section_page', 'committee']));
	}

	public function club_list($category) {
		
		$settings = DB::table('general_settings')->select(
			'logo',
			'top_bar_organization_name',
			'top_bar_email',
			'top_bar_phone',
			'footer_address',
			'footer_email',
			'footer_phone',
			'footer_copyright',
			'footer_column1_heading',
			'footer_column2_heading',
			'footer_column3_heading',
		)->first();

		switch ($category) {
			case 'motor':
				return view("pages.about.motor", compact("settings"));
				break;
			case 'mobil';
				return view("pages.about.mobil", compact("settings"));
				break;
			case 'mobility';
				return view("pages.about.mobility", compact("settings")); 
				break;
			default:
				return abort(404, "PAGE NOT FOUND");
				break;
		}
	}

	public function club_data($category, Request $request) {

		$communities = Community::select([
			"club_name",
			"leader",
			"image",
			"establishment_date",
			"social_media",
			"category"
		])->where("category", $category)->paginate($request->perPage ? $request->perPage : 10);

		return response()->json($communities, 200);
	}
}