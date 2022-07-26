<?php

namespace App\Repository\Registration\Interfaces;

interface RegistrationContract {

    public function getFullPath(): string;

    public function getRegistrarPath(): string;

    public function setBasePath(string $location);

    public function getBasePath();

    public function setRegistrationDirectory(string $directory): void;

    public function getRegistrationDirectory(): string;

    public function setPerRegistrarDirectory(string $dirname): void;

    public function getPerRegistrarDirectory(): string;

    public function storeData(mixed $request): bool;

    public function deleteData(int $id): bool;

    public function storeSignature(string $base64image,  string $fileName): string;

    public function createDirectory(string $path, int $mode = 0777, bool $recursive = true, bool $force = true): void;

}
