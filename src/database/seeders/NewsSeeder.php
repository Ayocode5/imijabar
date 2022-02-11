<?php

namespace Database\Seeders;

use App\Models\Admin\Category as NewsCategory;
use App\Models\Admin\Blog as News;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create News Category
        $categories = [
            'Health',
            'Economy',
            'Sport',
            'Computer'
        ];

        $categoriesPayload = [];

        foreach($categories as $category) {
            array_push($categoriesPayload, [
                'category_name' => $category,
                'category_slug' => Str::slug($category),
                'seo_title' => $category,
                'seo_meta_description' => Str::slug($category)
            ]);
        }

        NewsCategory::insert($categoriesPayload); 


        // Create News
        $newsCategoriesId = NewsCategory::select('id')->get()->pluck('id');

        $newsPayload = [];

        foreach(range(1,100) as $num) {
            array_push($newsPayload, [
                'category_id' => $newsCategoriesId[rand(0, count($newsCategoriesId) - 1)],
                'blog_title' => "Berita $num",
                'blog_slug' => "berita-$num",
                'blog_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
                'blog_content_short' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                'blog_photo' => 'blog-news.jpeg',
                'seo_title' => "Berita $num",
                'seo_meta_description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        } 

        DB::table('blogs')->insert($newsPayload);
    }
}