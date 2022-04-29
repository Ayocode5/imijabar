<?php

namespace App\Repository\Registration;
use App\Repository\Registration\Traits\RegistrationFiles;
use App\Models\Admin\Registration\KISRegistration;

class KISRegistrationRepository implements RegistrationContract {

    private static $BASE_PATH;
    private static $REGISTRATION_DIRECTORY;
    private static $FULL_PATH;
    private static $PER_REGISTRAR_DIRECTORY;
    private static $REGISTRAR_PATH;

    use RegistrationFiles;

    public function __construct()
    {
        /*REGISTRATION FOLDER WHERE DATA WILL BE STORED*/
        self::setRegistrationDirectory("registrations/kis/");

        /*RELATIVE PATH FOR REGISTRATION FOLDER*/
        self::setBasePath(public_path("uploads/"));

        /*REGISTRATION PATH & RELATIVE PATH COMBINED*/
        self::setFullPath(self::getBasePath() . self::getRegistrationDirectory());
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

        /* SET PATH */
        self::setPerRegistrarDirectory( $data["nama"] . "-" . $data["nomor_kartu_identitas"]);
        self::setRegistrarPath(self::getFullPath() . self::getPerRegistrarDirectory());

        /* STORE SIGNATURE */
        $data["signature_pemohon"] = $this->storeSignature(
            $data["signature_pemohon"],
            self::getRegistrarPath(),
            self::getRegistrationDirectory().self::getPerRegistrarDirectory(),
            "tanda_tangan_pemohon.png"
        );

        /* STORE PAS-PHOTO */
        $data["pas_photo"] = $this->saveUploadedFile(
            $request->file('q73_uploadPas'),
            "pas_photo",
             self::getRegistrationDirectory().self::getPerRegistrarDirectory()
        );

        /* STORE PHOTO KARTU IDENTITAS */
        $data["photo_kartu_identitas"] = $this->saveUploadedFile(
            $request->file('q77_uploadKartu'),
            "photo_kartu_identitas",
            self::getRegistrationDirectory().self::getPerRegistrarDirectory()
        );

        /* STORE SK ORANG TUA - OPTIONAL */
        if ($request->hasFile("q78_uploadSurat")) {
            $data["photo_sk_orangtua"] = $this->saveUploadedFile(
                $request->file('q78_uploadSurat'),
                "photo_sk_orangtua",
                self::getRegistrationDirectory().self::getPerRegistrarDirectory()
            );
        }

        if(KISRegistration::create($data)) return true; return false;
    }

    public static function getBasePath(): string
    {
        return self::$BASE_PATH;
    }

    public static function setBasePath($BASE_PATH): void
    {
        self::$BASE_PATH = $BASE_PATH;
    }

    public static function getRegistrationDirectory(): string
    {
        return self::$REGISTRATION_DIRECTORY;
    }

    public static function setRegistrationDirectory($REGISTRATION_DIRECTORY): void
    {
        self::$REGISTRATION_DIRECTORY = $REGISTRATION_DIRECTORY;
    }

    public static function getFullPath(): string
    {
        return self::$FULL_PATH;
    }

    public static function setFullPath($FULL_PATH): void
    {
        self::$FULL_PATH = $FULL_PATH;
    }

    public static function getPerRegistrarDirectory(): string
    {
        return self::$PER_REGISTRAR_DIRECTORY;
    }

    public static function setPerRegistrarDirectory($PER_REGISTRAR_DIRECTORY): void
    {
        self::$PER_REGISTRAR_DIRECTORY = $PER_REGISTRAR_DIRECTORY;
    }

    public static function getRegistrarPath(): string
    {
        return self::$REGISTRAR_PATH;
    }

    public static function setRegistrarPath($REGISTRAR_PATH): void
    {
        self::$REGISTRAR_PATH = $REGISTRAR_PATH;
    }
}
