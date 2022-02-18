<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'event_name',
        'event_slug',
        'event_organizer',
        'event_content',
        'event_content_short',
        'event_start_date',
        'event_end_date',
        'event_location',
        'event_location_city',
        'event_location_province',
        'event_link',
        'event_document_link',
        'event_map',
        'event_video',
        'event_featured_photo',
        'seo_title',
        'seo_meta_description'
    ];

    public function photos() {
        return $this->hasMany(EventPhoto::class);
    }

    public function sports() {
        return $this->belongsToMany(Sport::class, 'event_sport', 'event_id', 'sport_id');
    }

    public function sponsors() {
        return $this->belongsToMany(Sponsor::class, 'event_sponsor', 'event_id', 'sponsor_id');
    }

    public function getStatusAttribute() {
        
        $event_start_date = intval(date_format(date_create($this->event_start_date), 'Ymd'));
        $event_end_date = intval(date_format(date_create($this->event_end_date), 'Ymd'));
        $date_today = intval(date('Ymd'));

        // Set Event Status
        if($date_today < $event_start_date) {
            return 'Upcoming';
        } elseif ($event_start_date <= $date_today && $date_today <= $event_end_date) {
            return 'Current';
        } elseif ($event_end_date < $date_today) {
            return 'Past';
        } else {
            return "Invalid Logic";
        }
    }

    public function scopeEventActive($query) {
        return $query->where('event_end_date', '>=', date('Y-m-d'));
    }
}
