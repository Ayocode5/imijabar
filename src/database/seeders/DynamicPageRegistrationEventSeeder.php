<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageRegistrationEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dynamic_pages')->insert([
            'dynamic_page_name' => 'Registrasi Event',
            'dynamic_page_slug' => 'home-event-registration',
            'dynamic_page_content1' => '<p>Budi Setiawan: 0813123456789 atau</p><p><a href="www.google.com" target="_blank">bit.ly/registrasi-event</a></p>',
            'dynamic_page_banner' => 'http://pictures/1.png',
        ]);
    }
}
