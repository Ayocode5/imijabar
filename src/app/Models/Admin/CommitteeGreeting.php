<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitteeGreeting extends Model
{
    use HasFactory;

    protected $fillable = ["image", "order", "show"];
}
