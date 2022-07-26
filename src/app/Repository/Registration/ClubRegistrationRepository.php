<?php

namespace App\Repository\Registration;

use App\Models\Admin\Registration\ClubRegistration;
use App\Repository\Registration\Abstracts\RegistrationBase;

class ClubRegistrationRepository extends RegistrationBase
{
    public function storeData(mixed $request): bool
    {
        $data = [
            "nama_klub" => $request->q30_namaKlub,
            "email" => $request->q301_email,
            "alamat_jalan" => $request->q37_alamat["addr_line1"],
            "alamat_kel_kec" => $request->q37_alamat["addr_line2"],
            "alamat_kota" => $request->q37_alamat["city"],
            "alamat_provinsi" => $request->q37_alamat["state"],
            "alamat_kodepos" => $request->q37_alamat["postal"],
            "anggota_inti" => $request->q110_pengurusInti,
            "anggota" => $request->q106_typeA106,
            "signature_ketua_anggota" => $request->q112_tandaTangan
        ];

        // Set user registration data folder name, 
        // otherwise the data will be saved in folder with random name
        $this->setPerRegistrarDirectory($data["nama_klub"]);

        $data["signature_ketua_anggota"] = $this->storeSignature(
            $data["signature_ketua_anggota"], 
            "tanda_tangan_ketua.png"
        );

        if (ClubRegistration::create($data)) return true; return false;
    }

    public function deleteData(int $id): bool
    {
        $data = ClubRegistration::select('id', 'signature_ketua_anggota')->where('id', $id)->first();

        if(!$res1 = $this->deleteFile($data->signature_ketua_anggota)) return $res1;
        if(!$res2 = $this->deleteDirectory($data->signature_ketua_anggota)) return $res2;
        if(!$res3 = $data->delete()) return $res3;

        return true;
    }
}
