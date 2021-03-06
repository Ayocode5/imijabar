<?php

namespace App\Http\Controllers\Front\News;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog as News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function __invoke(Request $request)
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

		$page_news_settings = DB::table('page_blog_items')->first();

		$news_categories = DB::table('categories')->select(
			'category_name as name',
			'category_slug as slug'
		)->get();

		$news_category_filter = $request->has('category') ? $request->category : '';

        $news = collect([]);

        if($request->has('q') && $request->q != null) {
            $news = News::select([
                'category_id',
                'blog_title as title',
                'blog_content_short as summary',
                'blog_slug as slug',
                'blog_photo as photo',
                'created_at'
            ])->with(['category' => function ($query) {
                $query->select('id', 'category_name as name', 'category_slug as slug');
            }])->where('blog_title', 'like', '%' . $request->q . '%')
            ->whereHas('category', function ($query) use ($news_category_filter) {
                if(!empty($news_category_filter)) {
                    $query->where('category_slug', $news_category_filter);
                }
            })->orderBy('created_at', 'DESC')->paginate(6);
			
			if($news) {
				if($news->lastPage() > 1 && $news->currentPage() > 1) {
					return response()->json($news, 200);
				}
			}
        }


		return view('pages.news_search', compact('settings', 'news', 'news_categories', 'page_news_settings'));
	}
}
