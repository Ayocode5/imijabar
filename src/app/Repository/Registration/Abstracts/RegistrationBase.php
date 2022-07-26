<?php

namespace App\Repository\Registration\Abstracts;

use App\Repository\Registration\Interfaces\RegistrationContract;
use App\Repository\Registration\Traits\RegistrationFiles;
use App\Repository\Registration\Traits\RegistrationPathMethod;
use Illuminate\Support\Str;

abstract class RegistrationBase implements RegistrationContract {

    protected $BASE_PATH;
    protected $REGISTRATION_DIRECTORY;
    protected $PER_REGISTRAR_DIRECTORY;
    protected $REGISTRAR_PATH;

    use RegistrationPathMethod;
    use RegistrationFiles;

    public function __construct($base_path, $registration_directory)
    {
       $this->setBasePath($base_path);

       $this->setRegistrationDirectory($registration_directory);

       $this->setPerRegistrarDirectory(Str::random(10));
    }

    abstract public function storeData(mixed $request): bool;

    abstract public function deleteData(int $id): bool;
}