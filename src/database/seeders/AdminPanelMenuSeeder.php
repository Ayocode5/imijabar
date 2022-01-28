<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminPanelMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $menus = array(
            ['menu_name' => 'Home', 'menu_status' => 'Show'],
            ['menu_name' => 'About', 'menu_status' => 'Show'],
            ['menu_name' => 'Serives', 'menu_status' => 'Show'],
            ['menu_name' => 'Shop', 'menu_status' => 'Show'],
            ['menu_name' => 'Blog', 'menu_status' => 'Show'],
            ['menu_name' => 'Project', 'menu_status' => 'Show'],
            ['menu_name' => 'Faq', 'menu_status' => 'Show'],
            ['menu_name' => 'Team Members', 'menu_status' => 'Show'],
            ['menu_name' => 'Contact', 'menu_status' => 'Show'],
            ['menu_name' => 'Career', 'menu_status' => 'Show'],
            ['menu_name' => 'Photo Gallery', 'menu_status' => 'Show'],
            ['menu_name' => 'Video Gallery', 'menu_status' => 'Show'],
            ['menu_name' => 'Terms and Conditions', 'menu_status' => 'Show'],
            ['menu_name' => 'Privacy Policy', 'menu_status' => 'Show'],
        );

        DB::table('menus')->insert($menus);
    }
}
