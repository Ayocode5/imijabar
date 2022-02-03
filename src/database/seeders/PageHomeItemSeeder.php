<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageHomeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_home_items')->insert([
            'seo_title' => 'IMI JABAR SEO TITLE',
            'seo_meta_description' => 'IMI JABAR META DESCRIPTIONS',
            'jumbotron_title' => 'Welcome',
            'jumbotron_detail' => 'Welcome to the our official website',
            'jumbotron_bg' => 'jumbotron.png',
            'jumbotron_status' => 1,
            'news_title' => 'News',
            'news_total' => 10,
            'news_status' => 1,
            'events_title' => "Events",
            'events_total' => 20,
            'events_status' => 1,
            'about_title' => 'About',
            'about_detail' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'about_status' => 1,
            'gallery_title' => 'Galleries',
            'gallery_detail' => 'Epic Galleries',
            'gallery_status' => 1,
            'committee_title' => 'Committee',
            'committee_detail' => 'Committee Members',
            'committee_status' => 1,
            'newsletter_title' => 'Newsletter',
            'newsletter_detail' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'newsletter_bg' => 'newsletter.png',
            'newsletter_status' => 1
        ]);
    }
}
