<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageEventItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_event_items')->insert([
            'name' => 'Acara IMI Jabar',
            'detail' => 'Jadwal Acara & Kompetisi Otomotif Roda Dua dan Roda Empat Terbaru',
            'status' => 1,
            'seo_title' => 'Acara IMI Jabar',
            'seo_meta_description' => 'Jadwal Acara & Kompetisi Otomotif Roda Dua dan Roda Empat Terbaru',
        ]);
    }
}
