<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'seo_title',
        'seo_meta_description'
    ];

    public function videos() {
        return $this->hasMany(Video::class, 'category_id', 'id');
    }

    public function photos() {
        return $this->hasMany(Photo::class, 'category_id', 'id');
    }
}
