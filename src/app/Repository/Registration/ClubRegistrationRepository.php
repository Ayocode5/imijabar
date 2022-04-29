<?php

namespace App\Repository\Registration;

use App\Models\Admin\Registration\ClubRegistration;
use App\Repository\Registration\Traits\RegistrationFiles;

class ClubRegistrationRepository implements RegistrationContract {

    private static $BASE_PATH;
    private static $REGISTRATION_DIRECTORY;
    private static $FULL_PATH;
    private static $PER_REGISTRAR_DIRECTORY;
    private static $REGISTRAR_PATH;

    use RegistrationFiles;

    public function __construct()
    {
        self::setBasePath(public_path("uploads/"));

        self::setRegistrationDirectory("registrations/club/");

        self::setFullPath(self::getBasePath().self::getRegistrationDirectory());
    }

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

        self::setPerRegistrarDirectory($data["nama_klub"]);
        self::setRegistrarPath(self::getFullPath() . self::getPerRegistrarDirectory());

        $data["signature_ketua_anggota"] = $this->storeSignature(
            $data["signature_ketua_anggota"],
            self::getRegistrarPath(),
            self::getRegistrationDirectory() . self::getPerRegistrarDirectory(),
            "tanda_tangan_ketua.png"
        );

        if(ClubRegistration::create($data)) return true; return false;
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
