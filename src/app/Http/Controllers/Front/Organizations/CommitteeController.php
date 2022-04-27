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

        return view("pages.organizations.committee", compact("settings"));
    }

    public function committee_data(Request $request) {

        $committee = TeamMember::paginate($request->perPage ? $request->perPage : 10);

        return response()->json($committee, 200);

    }
}
