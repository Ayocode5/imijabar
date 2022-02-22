<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageNewsItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_blog_items')->insert([
            'name' => 'Berita',
            'detail' => 'Berita IMI JABAR',
            'status' => 1,
            'seo_title' => 'Berita IMI Jabar',
            'seo_meta_description' => 'Berita Acara & Kompetisi Otomotif Roda Dua dan Roda Empat Terbaru',
        ]);
    }
}
