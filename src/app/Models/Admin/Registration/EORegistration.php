<?php

namespace App\Models\Admin\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EORegistration extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id", "created_at"];

    protected $table = "eo_registration_forms";
}
