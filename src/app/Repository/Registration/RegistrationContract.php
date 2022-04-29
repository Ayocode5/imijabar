<?php

namespace App\Repository\Registration;

interface RegistrationContract {

    public static function getFullPath(): string;

    public static function setFullPath(string $full_path): void;

    public static function getRegistrarPath(): string;

    public static function setRegistrarPath(string $user_path): void;

    public static function setBasePath(string $location);

    public static function getBasePath();

    public static function setRegistrationDirectory(string $directory): void;

    public static function getRegistrationDirectory(): string;

    public static function setPerRegistrarDirectory(string $dirname): void;

    public static function getPerRegistrarDirectory(): string;

    public function storeData(mixed $request): bool;

    public function storeSignature(string $base64image, string $path, string $registrationFolderName, string $fileName): string;

    public function createDirectory(string $path, int $mode = 0777, bool $recursive = true, bool $force = true): void;

}
