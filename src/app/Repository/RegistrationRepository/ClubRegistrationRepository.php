<?php

namespace App\Repository\RegistrationRepository;

use App\Models\Admin\Registration\ClubRegistration;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Repository\RegistrationRepository\Registration;

class ClubRegistrationRepository implements Registration {

    private static $STORED_FILES_LOCATION;
    private static $TARGET_DIRECTORY;

    public function __construct()
    {
        self::setTargetDirectory("registrations/club/");
        self::setStoredFilesLocation(public_path("uploads/".self::getTargetDirectory()));
    }

    public static function setTargetDirectory(string $directory): void {
        self::$TARGET_DIRECTORY = $directory;
    }

    public static function getTargetDirectory(): string {
        return self::$TARGET_DIRECTORY;
    }

    public static function setStoredFilesLocation(string $location): void
    {
        self::$STORED_FILES_LOCATION = $location;
    }

    public static function getStoredFilesLocation(): string
    {
        return self::$STORED_FILES_LOCATION;
    }

    public function storeData(mixed $data): bool
    {

        // dd(self::getTargetDirectory(), self::getStoredFilesLocation());

        // Extract E-Signature Image from encoded base64 image
        $decoded_e_signature = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data["signature_ketua_anggota"]));

        // Create new folder by club name
        File::isDirectory(self::$STORED_FILES_LOCATION.$data["nama_klub"]) or File::makeDirectory(self::$STORED_FILES_LOCATION.$data["nama_klub"], 0777, true, true);

        // Store E-Signature
        $file_name = "registrations/club/".$data["nama_klub"]."/tanda_tangan_ketua.png";
        Storage::disk('public')->put($file_name, $decoded_e_signature);

        $data["signature_ketua_anggota"] = $data["nama_klub"]."/tanda_tangan_ketua.png";

        // dd($data);
        if(ClubRegistration::create($data)) return true;
    }
}