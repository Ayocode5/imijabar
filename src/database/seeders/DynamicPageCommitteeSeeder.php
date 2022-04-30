<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageCommitteeSeeder extends Seeder
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
                'dynamic_page_name' => 'Pengurus IMI Jawa Barat',
                'dynamic_page_slug' => 'committee-page-head-section',
                'dynamic_page_content1' => '<p>Susunan Pengurus Ikatan Motor Indonesia (IMI) Provinsi Jawa Barat, Periode 2021 - 2025.</p>',
                'dynamic_page_content2' => '<p>Struktur Organisasi IMI Jawa Barat periode 2021 - 2025, Silahkan unduh disini:</p>',
            ]
        );
    }
}
