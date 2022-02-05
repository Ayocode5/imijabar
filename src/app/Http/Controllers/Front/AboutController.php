<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{
    public function __invoke()
    {
		$home_settings = DB::table('page_home_items')->select(
			'committee_title',
			'committee_detail'
		)->first();

        $settings = DB::table('general_settings')->select(
			'logo',
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
        
        $about_settings = DB::table('page_about_items')->where('id', 1)->first();

        return view('pages.about', compact(['settings', 'home_settings', 'about_settings']));
    }
}
