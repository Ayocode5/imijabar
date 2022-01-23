<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PageShopItem extends Model
{
    protected $fillable = [
        'name',
        'content',
        'status',
        'seo_title',
        'seo_meta_description'
    ];

}
