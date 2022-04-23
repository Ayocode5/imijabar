<?php

namespace App\Http\Controllers\Front\Registrations;

use App\Http\Controllers\Controller;
use App\Repository\RegistrationRepository\EventOrganizerRegistrationRepository;
use Illuminate\Http\Request;

class EOController extends Controller
{

    private $registraionRepository;

    public function __construct(EventOrganizerRegistrationRepository $repository)
    {
        $this->registraionRepository = $repository;
    }

    public function getForm()
    {
        return view("pages.registrations.eo.registration_form");
    }

    public function store(Request $request)
    {
        // dd($request);

        $this->validate($request, [
            "q301_email" => "required|email",
            "q30_namaEvent" => "required|string",
            "q112_tempatPenyelenggaraan" => "required|string",
            "q113_tanggalPenyelenggaraan" => "required|string",
            "q117_name117" => "required|array",
            "q118_klasifikasiPerlombaan" => "required|string",
            "q119_keteranganSingkat" => "required|string",
            "q124_typeA" => "required|string",
            "q150_tandaTangan" => "required|string",
            "q125_ketuaPenyelenggara" => "required|string",
            "q151_tandaTangan151" => "required|string",
            "q126_petugasScrutineering" => "required|string",
            "q152_signature152" => "required|string",
            "q138_sponsorTunggal" => "required|string",
            "q139_sponsorUtama139" => "required|string",
            "q137_sponsordonaturLainnya" => "required|string",
            "q142_kelasYang142" => "required|string",
            "q143_penghargaan" => "required|string",
        ]);

        if($this->registraionRepository->storeData($request)) {
            return "Berhasil Menyimpan EO";
        }
    
    }
}
