<?php

namespace App\Http\Controllers\Front\Registrations;

use App\Http\Controllers\Controller;
use App\Repository\Registration\KISRegistrationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KISController extends Controller
{

    private $registrationRepository;

    public function __construct(KISRegistrationRepository $repository)
    {
        $this->registrationRepository = $repository;
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
            ->where('dynamic_page_slug', 'registration-kis-head-page')
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
            )->where('dynamic_page_slug', 'registration-kis-requirement-page')
            ->first();

        // dd($section2);

        $section3 = DB::table('dynamic_pages')
            ->select(
                'dynamic_page_name as name',
                'dynamic_page_content1 as content1',
                'seo_title',
                'seo_meta_description'
            )->where('dynamic_page_slug', 'registration-kis-howto-page')
            ->first();

        // dd($section3);

        return view('pages.registrations.kis.index', compact('settings', 'section1', 'section2', 'section3'));
    }

    public function getForm()
    {
        return view("pages.registrations.kis.registration_form");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "q301_email" => "required|email",
            "q30_nomorKartu" => "required|string",
            "q44_dikeluarkanDi" => "required|string",
            "q34_nomorPasport" => "string",
            "q19_namaLengkap" => "required|string|max:50",
            "q23_tempatTanggal" => "required|string",
            "q22_jenisKelamin" => "required|in:L,P",
            "q24_golonganDarah" => "required|in:A+,B+,C+,AB+,A-,B-,C-,AB-",
            "q29_pendidikan" => "required|string",
            "q37_alamat" => "required|array",
            "q37_alamat.addr_line1" => "required|string",
            "q37_alamat.addr_line2" => "required|string",
            "q37_alamat.city" => "required|string",
            "q37_alamat.state" => "required|string",
            "q37_alamat.postal" => "required|string",
            "q39_nomorHandphone" => "required|string",
            "q42_jenisSim" => "in:A,B,C",
            "q43_nomorSim" => "string",
            "q45_polda" => "string",
            "q48_iuranAnggota" => "required|in:1,2,3",
            "q60_nomorKartu60" => "required|string",
            "q81_tandaTangan" => "required|string",
            "q73_uploadPas" => "required|mimes:png,jpg,jpeg|max:1024",
            "q77_uploadKartu" => "required|mimes:png,jpg,jpeg,pdf|max:1024",
            "q78_uploadSurat" => "mimes:png,jpg,jpeg,pdf|max:1024",
        ]);

        if($validator->fails()) return redirect()->back()->withErrors($validator);

        if($this->registrationRepository->storeData($request)) {
            return view("pages.registrations.kis.success");
        }

        return "kesalahan";
    }
}
