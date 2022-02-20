<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Photo;
use App\Models\Admin\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function __invoke(Request $request)
    {

        $settings = DB::table('general_settings')->select(
            'logo',
            'top_bar_email',
            'top_bar_phone',
            'footer_address',
            'footer_email',
            'footer_phone',
            'footer_copyright',
            'footer_column1_heading',
            'footer_column2_heading',
            'footer_column3_heading',
        )->first();

        $catgoryFilter = $request->category ? $request->category : null;

        $photos = Photo::with(['category' => function ($query) {
            $query->select('id', 'name', 'slug');
        },])->whereHas('category', function ($query) use ($catgoryFilter) {
            $query->where('slug', $catgoryFilter);
        })->get();

        $videos = Video::with(['category' => function ($query) {
            $query->select('id', 'name', 'slug');
        },])->whereHas('category', function ($query) use ($catgoryFilter) {
            $query->where('slug', $catgoryFilter);
        })->get();

        $galleries = collect();

        $galleries = $galleries->merge($videos)->merge($photos);

        $galleries->map(function ($gallery) {
            if ($this->get_class_name(get_class($gallery)) == 'Video') {
                return $gallery->type = 'video';
            } else {
                return $gallery->type = 'photo';
            }
        });

        $categories = DB::table('gallery_categories')->select('slug', 'name')->get();

        // dd($galleries);

        return view('pages.gallery', compact('settings', 'galleries', 'categories'));
    }

    private function get_class_name($classname)
    {
        if ($pos = strrpos($classname, '\\')) return substr($classname, $pos + 1);
        return $pos;
    }
}