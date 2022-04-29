<?php

namespace App\Repository\Registration;

use App\Models\Admin\Registration\EORegistration;
use App\Repository\Registration\Traits\RegistrationFiles;
use Illuminate\Support\Carbon;

class EventOrganizerRegistrationRepository implements RegistrationContract
{
    private static $BASE_PATH;
    private static $REGISTRATION_DIRECTORY;
    private static $FULL_PATH;
    private static $PER_REGISTRAR_DIRECTORY;
    private static $REGISTRAR_PATH;

    use RegistrationFiles;

    public function __construct()
    {
        /*REGISTRATION FOLDER WHERE DATA WILL BE STORED*/
        self::setRegistrationDirectory("registrations/eo/");

        /*RELATIVE PATH FOR REGISTRATION FOLDER*/
        self::setBasePath(public_path("uploads/"));

        /*REGISTRATION PATH & RELATIVE PATH COMBINED*/
        self::setFullPath(self::getBasePath() . self::getRegistrationDirectory());

    }

    public static function getFullPath(): string
    {
        return self::$FULL_PATH;
    }

    public static function setFullPath($full_path): void
    {
        self::$FULL_PATH = $full_path;
    }

    public static function getRegistrarPath(): string
    {
        return self::$REGISTRAR_PATH;
    }

    public static function setRegistrarPath($user_path): void
    {
        self::$REGISTRAR_PATH = $user_path;
    }

    public static function setBasePath(string $location): void
    {
        self::$BASE_PATH = $location;
    }

    public static function getBasePath(): string
    {
        return self::$BASE_PATH;
    }

    public static function setRegistrationDirectory(string $directory): void
    {
        self::$REGISTRATION_DIRECTORY = $directory;
    }

    public static function getRegistrationDirectory(): string
    {
        return self::$REGISTRATION_DIRECTORY;
    }

    public static function setPerRegistrarDirectory(string $dirname): void
    {
        self::$PER_REGISTRAR_DIRECTORY = $dirname;
    }

    public static function getPerRegistrarDirectory(): string
    {
        return self::$PER_REGISTRAR_DIRECTORY;
    }

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

        self::setPerRegistrarDirectory($data["nama_event"] . "-" . $data["tanggal_penyelenggaraan"]);
        self::setRegistrarPath(self::getFullPath().self::getPerRegistrarDirectory());

        $data["oc_signature"] = $this->storeSignature(
            $data["oc_signature"],
            self::getRegistrarPath(),
            self::getRegistrationDirectory().self::getPerRegistrarDirectory(),
            "tanda_tangan_oc.png"
        );

        $data["rc_signature"] = $this->storeSignature(
            $data["rc_signature"],
            self::getRegistrarPath(),
            self::getRegistrationDirectory().self::getPerRegistrarDirectory(),
            "tanda_tangan_rc.png"
        );

        $data["sc_signature"] = $this->storeSignature(
            $data["sc_signature"],
            self::getRegistrarPath(),
            self::getRegistrationDirectory().self::getPerRegistrarDirectory(),
            "tanda_tangan_sc.png"
        );

        if(EORegistration::create($data)) return true; return false;
    }

}
