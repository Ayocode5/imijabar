<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = ["order","image","redirect_url", "show"];

    public function getImageUrlAttribute(): string {
        return "advertisements/" . $this->image;
    }

}
