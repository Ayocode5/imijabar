<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog as News;
use App\Models\Admin\Category as NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    function __invoke($slug)
    {
        $settings = DB::table('general_settings')->select(
            'logo',
            'top_bar_organization_name',
            'top_bar_email',
            'top_bar_phone',
            'footer_address',
            'footer_email',
            'footer_phone',
            'footer_copyright',
            'footer_column1_heading',
            'footer_column2_heading',
            'footer_column3_heading',
        )->first();

        $news = News::with(['category' => function ($query) {
            $query->select('id', 'category_name as name', 'category_slug as slug');
        }])->select(
            'category_id',
            'blog_title as title',
            'blog_slug as slug',
            'blog_photo as photo',
            'blog_content as content',
            'created_at'
        )->where('blog_slug', $slug)->first();

        // dd($news);

        $similar_like_news = [];
        
        if ($news) {
            $similar_like_news = NewsCategory::select('id', 'category_name as name')->with(['news' => function ($query) use ($slug) {
                $query->select(
                    'category_id',
                    'blog_title as title',
                    'blog_content_short as summary',
                    'blog_slug as slug',
                    'created_at'
                )->where('blog_slug', '!=', $slug)
                    ->inRandomOrder()
                    ->limit(2);
            }])->find($news->category_id)->news;
        }

        return view('pages.news_detail', compact(['news', 'similar_like_news', 'settings']));
    }
}
