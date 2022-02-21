<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role_page extends Model
{
    protected $fillable = [
        'page_route',
        'page_title'
    ];

}
