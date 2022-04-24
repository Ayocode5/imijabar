<?php

namespace App\Models\Admin\Organizations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = "organization_agendas";

    protected $guarded = ["id", "created_at"];
}
