<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function events() {
        return $this->belongsToMany(Event::class, 'event_sponsor', 'sponsor_id', 'event_id');
    }
}
