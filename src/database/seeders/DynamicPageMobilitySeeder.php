<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageMobilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dynamic_pages')->insert(
            [
                'dynamic_page_name' => 'Klub Mobility',
                'dynamic_page_slug' => 'mobility-page-head-section',
                'dynamic_page_content1' => '<p>Daftar Klub Mobility Yang Resmi Terdaftar di IMI Jawa Barat.</p>',
            ]
        );
    }
}
