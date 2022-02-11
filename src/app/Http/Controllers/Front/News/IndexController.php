<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
	public function __invoke()
	{
		$settings = DB::table('general_settings')->select(
			'logo',
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

		$page_news_settings = DB::table('page_blog_items')->first();

		// dd($page_news_settings);

		$news = Blog::select([
			'category_id',
			'blog_title as title',
			'blog_content_short as summary',
			'blog_slug as slug',
			'blog_photo as photo',
			'created_at'
		])->with(['category' => function ($query) {
			$query->select('id', 'category_name as name', 'category_slug as slug');
		}])->orderBy('created_at', 'DESC')->paginate(6);

		// dd($news);

		return view('pages.news', compact('settings', 'news', 'page_news_settings'));
	}
}
