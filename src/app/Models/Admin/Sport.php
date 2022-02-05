<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',
        'seo_title',
        'seo_meta_description'    
    ];

    public function category() {
        return $this->belongsTo(EventCategory::class, 'category_id', 'id');
    }

    public function events() {
        return $this->belongsToMany(Event::class, 'event_sport' , 'sport_id', 'event_id');
    }
}
