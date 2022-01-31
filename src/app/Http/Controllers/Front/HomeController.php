<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function index()
	{
		$date_today = date('Y-m-d');
		// Get Active Events With Categories
		$events = DB::table('events as e')
			->join('event_sport as es', 'es.event_id', '=', 'e.id')
			->join('sports as sp', 'sp.id', '=', 'es.sport_id')
			->join('event_categories as ec', 'ec.id', '=', 'sp.category_id')
			->selectRaw("
			e.id as id,
			e.event_name as name,
			e.event_start_date,
			e.event_end_date,
			e.event_location,
			e.event_featured_photo as featured_photo,
			GROUP_CONCAT(DISTINCT sp.name SEPARATOR ', ') as sports,
			GROUP_CONCAT(DISTINCT ec.name SEPARATOR ', ') as categories,
			GROUP_CONCAT(DISTINCT sp.id SEPARATOR ', ') as sports_id,
			GROUP_CONCAT(DISTINCT ec.id SEPARATOR ', ') as categories_id
		")->where('event_end_date', '>=', $date_today)
			->groupBy('id')
			->get();


		$events->map(function ($event) use ($date_today) {

			$event->sports_id = explode(',', $event->sports_id);
			$event->categories_id = explode(',', $event->categories_id);

			// Determine Event Active Status
			if ($date_today < $event->event_start_date) {
				return $event->status = 'Upcoming';
			} elseif ($event->event_start_date <= $date_today && $date_today <= $event->event_end_date) {
				return $event->status = 'Current';
			} elseif ($event->event_end_date < $date_today) {
				return $event->status = 'Past';
			} else {
				return $event->status = "Invalid Logic";
			}
		});
		// dd($events);

		$event_categories = DB::table('event_categories')->select(['name', 'id'])->get();
		// dd($event_categories);

		// $sliders = DB::table('sliders')->get();
		// $page_home = DB::table('page_home_items')->where('id',1)->first();
		// $why_choose_items = DB::table('why_choose_items')->get();
		// $services = DB::table('services')->get();
		// $testimonials = DB::table('testimonials')->get();
		// $projects = DB::table('projects')->get();
		// $team_members = DB::table('team_members')->get();
		// $blogs = DB::table('blogs')->get();

		$news = Blog::limit(4)->orderBy('created_at', 'DESC')->get();
		// dd($news[0]->created_at);
		//return view('pages.index', compact('news','sliders','page_home','why_choose_items','services', 'testimonials','projects','team_members','blogs'));
		return view('pages.index', compact('news', 'events', 'event_categories'));
	}
}
