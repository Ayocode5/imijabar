<?php

namespace App\FileManager\ACL;

use Alexusmai\LaravelFileManager\Services\ACLService\ACLRepository;
use Illuminate\Support\Facades\Auth;

class UsersACLRepository implements ACLRepository
{
    /**
     * Get user ID
     *
     * @return mixed
     */
    public function getUserID()
    {
        return Auth::id();
    }

    /**
     * Get ACL rules list for user
     *
     * @return array
     */
    public function getRules(): array
    {
        if (Auth::user()->id === 1) {
            return [
                ['disk' => 'public', 'path' => '*.php', 'access' => 0],                                  // main folder - read
                ['disk' => 'public', 'path' => '*', 'access' => 2],
            ];
        }
        
        return [
            ['disk' => 'public', 'path' => '*.php', 'access' => 0],                                  // main folder - read
            ['disk' => 'public', 'path' => 'dokumen/*', 'access' => 2],                              // only read
            ['disk' => 'public', 'path' => '*', 'access' => 1],                                  // main folder - read
            // ['disk' => 'public', 'path' => '/'. Auth::user()->name, 'access' => 1],        // only read
            // ['disk' => 'public', 'path' => '/'. Auth::user()->name .'/*', 'access' => 2],  // read and write
        ];
    }
}