<?php

namespace App\Repository\Registration\Traits;

use Exception;

trait RegistrationPathMethod {

    public function getBasePath(): string
    {
        if(empty($this->BASE_PATH)) throw new Exception("Base Path Is Empty!");
        return $this->BASE_PATH;
    }

    public function setBasePath($BASE_PATH): void
    {
        empty($BASE_PATH) ? 
            throw new Exception("Base Path Cannot Be Set to Empty!") : 
            $this->BASE_PATH = $BASE_PATH;
    }

    public function getRegistrationDirectory(): string
    {
        if(empty($this->REGISTRATION_DIRECTORY)) throw new Exception("Registration Directory Is Empty!") ;
        return $this->REGISTRATION_DIRECTORY;
    }

    public function setRegistrationDirectory($REGISTRATION_DIRECTORY): void
    {
        empty($REGISTRATION_DIRECTORY) ? 
            throw new Exception("Registration Directory Cannot Be Set To Empty!") : 
        $this->REGISTRATION_DIRECTORY = $REGISTRATION_DIRECTORY;
    }

    public function getFullPath(): string
    {
        return $this->getBasePath() . $this->getRegistrationDirectory();
    }

    public function getPerRegistrarDirectory(): string
    {
        if(empty($this->PER_REGISTRAR_DIRECTORY))
            throw new Exception("Per Registrar Directory Cannot Be Set To Empty!");
        return $this->PER_REGISTRAR_DIRECTORY;
    }

    /**
     * Set user registration data folder name
     *
     * @return void
     */
    public function setPerRegistrarDirectory($PER_REGISTRAR_DIRECTORY): void
    {
        empty($PER_REGISTRAR_DIRECTORY) ? 
            throw new Exception("Per Registrar Directory Cannot Be Set To Empty!") : 
        $this->PER_REGISTRAR_DIRECTORY = $PER_REGISTRAR_DIRECTORY;
    }

    public function getRegistrarPath(): string
    {
        return $this->getFullPath() . $this->getPerRegistrarDirectory();
    }
    
}