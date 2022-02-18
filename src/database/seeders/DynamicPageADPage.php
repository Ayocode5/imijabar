<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageADPage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dynamic_pages')->insert([
            'dynamic_page_name' => 'Anggaran Dasar IMI Jawa Barat',
            'dynamic_page_slug' => 'about-ad-page',
            'dynamic_page_content1' => '<p>Anggaran Dasar IMI Jawa Barat periode 2021 - 2025, silahkan unduh disini :</p><p><a href="http://google.com" target="_blank">Download File</a></p>',
            'dynamic_page_banner' => 'http://pictures/1.png',
        ]);
    }
}
