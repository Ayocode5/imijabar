<?php

namespace App\Models\Admin\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClubRegistration extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id", "created_at"];

    protected $table = "club_registration_forms";
}
