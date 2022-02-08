<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageGalleryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_gallery_items')->insert([
            'name' => 'Galeri',
            'detail' => 'Jadwal Acara & Kompetisi Otomotif Roda Dua dan Roda Empat Terbaru.',
            'status' => 1,
            'seo_title' => 'Galeri',
            'seo_meta_description' => 'Jadwal Acara & Kompetisi Otomotif Roda Dua dan Roda Empat Terbaru.'
        ]);
    }
}
