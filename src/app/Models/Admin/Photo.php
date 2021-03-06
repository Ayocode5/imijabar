<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo_name',
        'photo_caption',
        'photo_order',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(GalleryCategory::class, 'category_id', 'id');
    }

}
