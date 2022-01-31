<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'blog_title',
        'blog_slug',
        'blog_content',
        'blog_content_short',
        'blog_photo',
        'seo_title',
        'seo_meta_description'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category');
    }

    public function scopeLatest($query) {
        return $query->orderBy('created_at', 'DESC');
    }

    public function scopeActive($query) {
        return $query->where('deleted_at', null);
    }

    public function getCreatedAtAttribute()
    {
        return date_format(date_create($this->create_at), 'd M Y');
    }
    

}
