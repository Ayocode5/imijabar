<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'event_photo',
        'event_photo_caption'
    ];

    public function event() {
        return $this->belongsTo(Event::class);
    }


}
