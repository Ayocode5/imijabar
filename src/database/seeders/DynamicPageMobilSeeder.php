<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageMobilSeeder extends Seeder
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
                'dynamic_page_name' => 'Klub Mobil',
                'dynamic_page_slug' => 'mobil-page-head-section',
                'dynamic_page_content1' => '<p>Daftar Klub Mobil Yang Resmi Terdaftar di IMI Jawa Barat.</p>',
            ]
        );
    }
}
