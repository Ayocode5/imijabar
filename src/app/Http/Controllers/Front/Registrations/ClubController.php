<?php

namespace App\Http\Controllers\Front\Registrations;

use App\Http\Controllers\Controller;
use App\Repository\Registration\ClubRegistrationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{

    private static $registrationRepository;

    public function __construct(ClubRegistrationRepository $repository)
    {
        self::$registrationRepository = $repository;
    }

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

        // Head Content
        $section1 = DB::table('dynamic_pages')
            ->select(
                'dynamic_page_name as name',
                'dynamic_page_content1 as content1',
                'dynamic_page_content2 as content2',
                'dynamic_page_link1 as link',
                'dynamic_page_banner as banner',
                'seo_title',
                'seo_meta_description'
            )
            ->where('dynamic_page_slug', 'registration-club-head-page')
            ->first();

        // dd($section1);

        if(!$section1) {
            return abort(404);
        }


        $section2 = DB::table('dynamic_pages')
            ->select(
                'dynamic_page_name as name',
                'dynamic_page_content1 as content1',
                'seo_title',
                'seo_meta_description'
            )->where('dynamic_page_slug', 'registration-club-requirement-page')
            ->first();

        // dd($section2);

        $section3 = DB::table('dynamic_pages')
            ->select(
                'dynamic_page_name as name',
                'dynamic_page_content1 as content1',
                'seo_title',
                'seo_meta_description'
            )->where('dynamic_page_slug', 'registration-club-howto-page')
            ->first();

        return view("pages.registrations.club.index", compact('settings', 'section1', 'section2', 'section3'));
    }

    public function getForm() {
        return view("pages.registrations.club.registration_form");
    }

    public function store(Request $request) {

        $this->validate($request, [
            "q30_namaKlub" => "required",
            "q301_email" => "required|email",
            "q37_alamat" => "required|array",
            "*.addr_line1" => "string",
            "*.addr_line2" => "string",
            "*.city" => "string",
            "*.state" => "string",
            "*.postal" => "string",
            "q110_pengurusInti" => "required|string",
            "q106_typeA106" => "required|string",
            "q112_tandaTangan" => "required|string"
        ]);

        if(self::$registrationRepository->storeData($request)) {
            return view("pages.registrations.club.success");
        };

    }
}
