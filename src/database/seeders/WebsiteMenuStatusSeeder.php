<?php

namespace Database\Seeders;

use App\Models\Admin\Menu;
use Illuminate\Database\Seeder;

class WebsiteMenuStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payloads = [];

        foreach(['Tentang IMI', 'Berita', 'Acara', 'Galeri', 'Pendaftaran', 'KIS', 'KTA', 'Club'] as $menu) {
            array_push($payloads, [
                'name' => $menu,
                'status' => 1
            ]);
        }

        Menu::insert($payloads);
    }
}
