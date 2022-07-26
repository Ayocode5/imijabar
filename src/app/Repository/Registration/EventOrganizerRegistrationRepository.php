<?php

namespace App\Repository\Registration;

use App\Models\Admin\Registration\EORegistration;
use App\Repository\Registration\Abstracts\RegistrationBase;
use Illuminate\Support\Carbon;

class EventOrganizerRegistrationRepository extends RegistrationBase
{
    public function storeData(mixed $request): bool
    {
        $data = [
            "nama_event" => $request->q30_namaEvent,
            "email" => $request->q301_email,
            "tempat_penyelenggaraan" => $request->q112_tempatPenyelenggaraan,
            "tanggal_penyelenggaraan" => Carbon::createFromFormat('Y/m/d', str_replace("-", "/", $request->q113_tanggalPenyelenggaraan)),
            "jenis_kendaraan" => json_encode($request->q117_name117),
            "klasifikasi_lomba" => $request->q118_klasifikasiPerlombaan,
            "deskripsi_lomba" => $request->q119_keteranganSingkat,
            "oc" => $request->q124_typeA,
            "oc_signature" => $request->q150_tandaTangan,
            "rc" => $request->q125_ketuaPenyelenggara,
            "rc_signature" => $request->q151_tandaTangan151,
            "sc" => $request->q126_petugasScrutineering,
            "sc_signature" => $request->q152_signature152,
            "sponsor_tunggal" => $request->q138_sponsorTunggal,
            "sponsor_utama" => $request->q139_sponsorUtama139,
            "sponsor_dontaur_lain" => json_encode($request->q137_sponsordonaturLainnya),
            "kelas_lomba" => json_encode($request->q142_kelasYang142),
            "penghargaan" => json_encode($request->q143_penghargaan)
        ];

        // Set user registration data folder name, 
        // otherwise the data will be saved in folder with random name
        $this->setPerRegistrarDirectory($data["nama_event"] . "-" . $data["tanggal_penyelenggaraan"]);

        $data["oc_signature"] = $this->storeSignature(
            $data["oc_signature"],
            "tanda_tangan_oc.png"
        );

        $data["rc_signature"] = $this->storeSignature(
            $data["rc_signature"],
            "tanda_tangan_rc.png"
        );

        $data["sc_signature"] = $this->storeSignature(
            $data["sc_signature"],
            "tanda_tangan_sc.png"
        );

        if(EORegistration::create($data)) return true; return false;
    }

    public function deleteData(int $id): bool
    {
        $data = EORegistration::select('id', 'oc_signature', 'rc_signature', 'sc_signature')
            ->where('id', $id)->first();

        if(!$res = $this->deleteFile($data->oc_signature)) return $res;
        if(!$res = $this->deleteFile($data->rc_signature)) return $res;
        if(!$res = $this->deleteFile($data->sc_signature)) return $res;
        if(!$res = $this->deleteDirectory($data->sc_signature)) return $res;
        if(!$res = $data->delete()) return $res;

        return true;
    }

}
