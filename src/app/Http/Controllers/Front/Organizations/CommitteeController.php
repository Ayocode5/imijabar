<?php

namespace App\Http\Controllers\Front\Organizations;

use App\Http\Controllers\Controller;
use App\Models\Admin\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommitteeController extends Controller
{
    public function index() {

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

		$committee_page_head_section = DB::table("dynamic_pages")
		->select(["dynamic_page_name as name", "dynamic_page_content1 as content1", "dynamic_page_content2 as content2"])
		->where("dynamic_page_slug", "committee-page-head-section")->first();

        return view("pages.organizations.committee", compact("settings", "committee_page_head_section"));
    }

    public function committee_data(Request $request) {

        $committee = TeamMember::paginate($request->perPage ? $request->perPage : 10);

        return response()->json($committee, 200);

    }
}
