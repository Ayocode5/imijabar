<?php

namespace App\Repository\RegistrationRepository;

interface Registration {

    public function storeData(mixed $data);
    public static function setTargetDirectory(string $directory): void;
    public static function getTargetDirectory(): string;
    public static function setStoredFilesLocation(string $location): void;
    public static function getStoredFilesLocation(): string;

}