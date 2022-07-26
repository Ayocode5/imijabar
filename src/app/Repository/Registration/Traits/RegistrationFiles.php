<?php

namespace App\Repository\Registration\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

trait RegistrationFiles
{
    public function storeSignature(string $base64image, string $fileName): string
    {
        $path = $this->getRegistrarPath();
        $registrationFolderName = $this->getRegistrationDirectory() . $this->getPerRegistrarDirectory();

        // Extract E-Signature Image from encoded base64 image
        $decoded_e_signature = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64image));

        // Create Directory for saving the file
        $this->createDirectory($path);

        // Store E-Signature
        Storage::disk('public')->put($registrationFolderName . "/$fileName", $decoded_e_signature);

        // Return File Name
        return $registrationFolderName . "/$fileName";
    }

    public function createDirectory(string $path, int $mode = 0777, bool $recursive = true, bool $force = true): void
    {
        try {
            File::isDirectory($path) or File::makeDirectory($path, $mode, $recursive, $force);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function saveUploadedFile(UploadedFile $file, string $fileName): string
    {
        $folderName = $this->getRegistrationDirectory() . $this->getPerRegistrarDirectory();

        $fileName =  $fileName . '.' . $file->getClientOriginalExtension();

        $file->move($this->getBasePath() . $folderName, $fileName);

        return $folderName . "/" . $fileName;
    }

    public function deleteFile(string $file_path) {
        
        try {
            return Storage::disk("public")->delete($file_path);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function deleteDirectory($directory) {

        preg_match("/\b[^\/].+\//", $directory, $directory);

        try {
            return File::deleteDirectory($this->getBasePath().$directory[0]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
