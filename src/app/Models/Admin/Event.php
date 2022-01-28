<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'category_id',
        'event_name',
        'event_slug',
        'event_content',
        'event_content_short',
        'event_start_date',
        'event_end_date',
        'event_location',
        'event_map',
        'event_video',
        'event_featured_photo',
        'seo_title',
        'seo_meta_description'
    ];

    public function photos() {
        return $this->hasMany(EventPhoto::class);
    }

    public function category() {
        return $this->belongsTo(EventCategory::class, 'category_id', 'id');
    }
}
