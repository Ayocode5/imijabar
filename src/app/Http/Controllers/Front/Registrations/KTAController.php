<?php

namespace App\Http\Controllers\Front\Registrations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KTAController extends Controller
{
    public function __invoke()
    {

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

        // Head Content
        $section1 = DB::table('dynamic_pages')
            ->select(
                'dynamic_page_name as name',
                'dynamic_page_content1 as content1',
                'dynamic_page_banner as banner',
                'seo_title',
                'seo_meta_description'
            )
            ->where('dynamic_page_slug', 'registration-kta-head-page')
            ->first();

        if (!$section1) {
            return abort(404);
        }

        $section2 = DB::table('dynamic_pages')
            ->select(
                'dynamic_page_name as name',
                'dynamic_page_content1 as content1',
                'seo_title',
                'seo_meta_description'
            )
            ->where('dynamic_page_slug', 'registration-kta-requirement-page')
            ->first();

        $section3 = DB::table('dynamic_pages')
            ->select(
                'dynamic_page_name as name',
                'dynamic_page_content1 as content1',
                'seo_title',
                'seo_meta_description'
            )
            ->where('dynamic_page_slug', 'registration-kta-howto-page')
            ->first();

        return view('pages.register_member.kta', compact('settings', 'section1', 'section2', 'section3'));
    }
}
