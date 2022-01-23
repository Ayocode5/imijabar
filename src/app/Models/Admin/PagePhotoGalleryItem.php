<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PagePhotoGalleryItem extends Model
{
    protected $fillable = [
        'name',
        'detail',
        'status',
        'seo_title',
        'seo_meta_description'
    ];

}
