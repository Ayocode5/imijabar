<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Gallery Categories
        $categories = [
            [
                'name' => 'Category 1',
                'slug' => 'category-1'
            ],
            [
                'name' => 'Category 2',
                'slug' => 'category-2'
            ],
            [
                'name' => 'Category 3',
                'slug' => 'category-3'
            ],
            
        ];

        DB::table('gallery_categories')->insert($categories);

        $categories_id = DB::table('gallery_categories')->select('id')->get()->pluck('id')->toArray();

        $photos = [];
        $videos = [];

        foreach (range(1, 100) as $num) {
            array_push($photos, [
                'category_id' => $categories_id[rand(array_key_first($categories_id), array_key_last($categories_id))],
                'photo_name' => "photo-gallery.jpg",
                'photo_caption' => "Ini Photo ke $num"
            ]);

            array_push($videos, [
                'category_id' => $categories_id[rand(array_key_first($categories_id), array_key_last($categories_id))],
                'video_youtube' => 'wCVCtoY2M6k',
                'video_caption' => 'Ini Video ke ' . $num,
            ]);
        }

        DB::table('videos')->insert($videos);
        DB::table('photos')->insert($photos);
    }
}