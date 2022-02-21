<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'seo_title',
        'seo_meta_description'
    ];

    public function sports() {
        return $this->hasMany(Sport::class, 'category_id', 'id');
    }

    // public function events() {
    //     return $this->hasManyThrough(Event::class, EventSport::class, 'category_id', 'sport_id', 'id', 'id');
    // }
}
