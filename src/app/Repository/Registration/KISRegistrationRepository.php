<?php

namespace App\Repository\Registration;

use App\Models\Admin\Registration\KISRegistration;
use App\Repository\Registration\Abstracts\RegistrationBase;

class KISRegistrationRepository extends RegistrationBase {

    public function storeData(mixed $request): bool
    {
        $data = [
            "email" => $request->q301_email,
            "nomor_kartu_identitas" => $request->q30_nomorKartu,
            "kota_kartu_identitas" => $request->q44_dikeluarkanDi,
            "nomor_passport" => $request->q34_nomorPasport,
            "nama" => $request->q19_namaLengkap,
            "tempat_tgl_lahir" => $request->q23_tempatTanggal,
            "gender" => $request->q22_jenisKelamin,
            "golongan_darah" => $request->q24_golonganDarah,
            "pendidikan" => $request->q29_pendidikan,
            "alamat_jalan1" => $request->q37_alamat["addr_line1"],
            "alamat_jalan2" => $request->q37_alamat["addr_line2"],
            "alamat_kota" => $request->q37_alamat["city"],
            "alamat_provinsi" => $request->q37_alamat["state"],
            "alamat_kodepos" => $request->q37_alamat["postal"],
            "telp" => $request->q39_nomorHandphone,
            "jenis_sim" => $request->q42_jenisSim,
            "nomor_sim" => $request->q43_nomorSim,
            "tempat_dikeluarkan_sim" => $request->q45_polda,
            "iuran_anggota" => $request->q48_iuranAnggota,
            "nomor_kta" => $request->q60_nomorKartu60,
            "signature_pemohon" => $request->q81_tandaTangan,
            // "pas_photo" => $request->q73_uploadPas,
            // "photo_kartu_identitas" => $request->q77_uploadKartu,
            // "photo_sk_orangtua" => $request->q78_uploadSurat
        ];

        // Set user registration data folder name, 
        // otherwise the data will be saved in folder with random name
        $this->setPerRegistrarDirectory($data["nama"] . "-" . $data["nomor_kartu_identitas"]);

        /* STORE SIGNATURE */
        $data["signature_pemohon"] = $this->storeSignature(
            $data["signature_pemohon"],
            "tanda_tangan_pemohon.png"
        );

        /* STORE PAS-PHOTO */
        $data["pas_photo"] = $this->saveUploadedFile(
            $request->file('q73_uploadPas'),
            "pas_photo"        
        );

        /* STORE PHOTO KARTU IDENTITAS */
        $data["photo_kartu_identitas"] = $this->saveUploadedFile(
            $request->file('q77_uploadKartu'),
            "photo_kartu_identitas"
        );

        /* STORE SK ORANG TUA - OPTIONAL */
        if ($request->hasFile("q78_uploadSurat")) {
            $data["photo_sk_orangtua"] = $this->saveUploadedFile(
                $request->file('q78_uploadSurat'),
                "photo_sk_orangtua"
            );
        }

        if(KISRegistration::create($data)) return true; return false;
    }

    public function deleteData(int $id): bool
    {
        $data = KISRegistration::select('id', 'pas_photo', 'photo_kartu_identitas', 'photo_sk_orangtua', 'signature_pemohon')
        ->where('id', $id)->first();

        if(!$res = $this->deleteFile($data->pas_photo)) return $res;
        if(!$res = $this->deleteFile($data->photo_kartu_identitas)) return $res;

        if(!empty($data->photo_sk_orangtua)) {
            if(!$res = $this->deleteFile($data->photo_sk_orangtua)) return $res;
        }

        if(!$res = $this->deleteFile($data->signature_pemohon)) return $res;
        if(!$res = $this->deleteDirectory($data->signature_pemohon)) return $res;
        if(!$res = $data->delete()) return $res;

        return true;
    }
}