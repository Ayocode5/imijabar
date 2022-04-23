<?php

namespace App\Repository\RegistrationRepository;

use App\Models\Admin\Registration\EORegistration;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EventOrganizerRegistrationRepository implements Registration
{

    private static $STORED_FILES_LOCATION;
    private static $TARGET_DIRECTORY;
    private static $perUserDirectoryName;

    public function __construct()
    {
        self::setTargetDirectory("registrations/eo/");
        self::setStoredFilesLocation(public_path("uploads/" . self::getTargetDirectory()));
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

    public static function setPerUserDirectoryName(string $dirname): void
    {
        self::$perUserDirectoryName = $dirname;
    }

    public static function getPerUserDirectoryName(): string
    {
        return self::$perUserDirectoryName;
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

        self::setPerUserDirectoryName($data["nama_event"] . "-" . $data["tanggal_penyelenggaraan"]);
 
        $data["oc_signature"] = $this->storeSignature(
            $data["oc_signature"],
            self::getStoredFilesLocation().self::getPerUserDirectoryName(),
            self::getTargetDirectory().self::getPerUserDirectoryName(),
            "tanda_tangan_oc.png"
        );

        $data["rc_signature"] = $this->storeSignature(
            $data["rc_signature"],
            self::getStoredFilesLocation().self::getPerUserDirectoryName(),
            self::getTargetDirectory().self::getPerUserDirectoryName(),
            "tanda_tangan_rc.png"
        );

        $data["sc_signature"] = $this->storeSignature(
            $data["sc_signature"],
            self::getStoredFilesLocation().self::getPerUserDirectoryName(),
            self::getTargetDirectory().self::getPerUserDirectoryName(),
            "tanda_tangan_sc.png"
        );

        // dd($data);

        if(EORegistration::create($data)) {
            return true;
        }
    }

    public function storeSignature(string $base64image, string $file_path, string $targetDirectory, string $fileName): string
    {

        // Extract E-Signature Image from encoded base64 image
        $decoded_e_signature = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64image));

        // Create Directory for saving the file
        $this->createTargetDirectory($file_path);

        // Store E-Signature
        Storage::disk('public')->put($targetDirectory . "/$fileName", $decoded_e_signature);

        // Return File Name
        return $targetDirectory . "/$fileName";
    }

    public function createTargetDirectory(string $path, int $mode = 0777, bool $recursive = true, bool $force = true): void
    {
        try {
            File::isDirectory($path) or File::makeDirectory($path, $mode, $recursive, $force);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
