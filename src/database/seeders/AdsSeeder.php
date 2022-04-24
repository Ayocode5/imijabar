<?php

namespace Database\Seeders;

use App\Models\Admin\Advertisement;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ads = Advertisement::factory()->count(10)->create();
    }
}
