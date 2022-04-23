<?php

namespace App\Repository\RegistrationRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\Registration\KISRegistration;
use Ramsey\Uuid\Uuid;

class KISRegistrationRepository implements Registration {

    private static $STORED_FILES_LOCATION;
    private static $TARGET_DIRECTORY;

    public function __construct()
    {
        self::setTargetDirectory("registrations/kis/");
        self::setStoredFilesLocation(public_path("uploads/".self::getTargetDirectory()));
    }

    public static function setStoredFilesLocation(string $location): void
    {
        self::$STORED_FILES_LOCATION = $location;
    }

    public static function getStoredFilesLocation(): string
    {
        return self::$STORED_FILES_LOCATION;
    }

    public static function setTargetDirectory(string $directory): void
    {
        self::$TARGET_DIRECTORY = $directory;
    }

    public static function getTargetDirectory(): string
    {
        return self::$TARGET_DIRECTORY;
    }

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

        // Extract E-Signature Image from encoded base64 image
        $decoded_e_signature = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data["signature_pemohon"]));

        // Create new folder by club name
        $user_data_dirname = self::getStoredFilesLocation() . $data["nama"] . "-" . $data["nomor_kartu_identitas"];
        File::isDirectory($user_data_dirname) or File::makeDirectory($user_data_dirname, 0777, true, true);

        // Store E-Signature
        $signature_name = self::getTargetDirectory().$data["nama"]."-".$data["nomor_kartu_identitas"]."/tanda_tangan_pemohon.png";
        Storage::disk('public')->put($signature_name, $decoded_e_signature);
        $data["signature_pemohon"] = $signature_name;


        if ($request->hasFile("q73_uploadPas") && $request->has("q77_uploadKartu")) {

            // 
            $ext = $request->file('q73_uploadPas')->getClientOriginalExtension();
            $fileName = 'pas_photo-' . Uuid::uuid4() . '.' . $ext;

            $request->file('q73_uploadPas')->move($user_data_dirname, $fileName);
            $data["pas_photo"] = self::getTargetDirectory().$data["nama"]."-".$data["nomor_kartu_identitas"]."/".$fileName;

            // 
            $ext = $request->file('q77_uploadKartu')->getClientOriginalExtension();
            $fileName = 'photo_kartu_identitas-' . Uuid::uuid4() . '.' . $ext;

            $request->file('q77_uploadKartu')->move($user_data_dirname, $fileName);
            $data["photo_kartu_identitas"] = self::getTargetDirectory().$data["nama"]."-".$data["nomor_kartu_identitas"]."/".$fileName;

        }

        if ($request->hasFile("q78_uploadSurat")) {

            // 
            $ext = $request->file("q78_uploadSurat")->getClientOriginalExtension();
            $fileName = 'photo_sk_orangtua-' . Uuid::uuid4() . '.' . $ext;

            // 
            $request->file('q78_uploadSurat')->move($user_data_dirname, $fileName);
            $data["photo_sk_orangtua"] = self::getTargetDirectory().$data["nama"]."-".$data["nomor_kartu_identitas"]."/".$fileName;
        }

        if(KISRegistration::create($data)) return true;
    }
}