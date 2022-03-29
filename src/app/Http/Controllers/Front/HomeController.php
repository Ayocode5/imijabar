<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function index()
	{
		$date_today = date('Y-m-d');

		$home_settings = DB::table('page_home_items')->first();

		$committee = DB::table('team_members')->limit(7)->get();

		// dd($committee);

		// Get Active Events With Categories
		$events = DB::table('events as e')
			->join('event_sport as es', 'es.event_id', '=', 'e.id')
			->join('sports as sp', 'sp.id', '=', 'es.sport_id')
			->join('event_categories as ec', 'ec.id', '=', 'sp.category_id')
			->selectRaw("
			e.id as id,
			e.event_name as name,
			e.event_slug as slug,
			e.event_start_date,
			e.event_end_date,
			e.event_link as link,
			e.event_location as location,
			e.event_location_city,
			e.event_location_province,
			e.event_featured_photo as featured_photo,
			GROUP_CONCAT(DISTINCT sp.name SEPARATOR ', ') as sports,
			GROUP_CONCAT(DISTINCT ec.name SEPARATOR ', ') as categories,
			GROUP_CONCAT(DISTINCT ec.slug SEPARATOR ',') as categories_slug,
			GROUP_CONCAT(DISTINCT sp.id SEPARATOR ', ') as sports_id,
			GROUP_CONCAT(DISTINCT ec.id SEPARATOR ', ') as categories_id
		")->where('deleted_at', null)
			->orderBy('e.event_start_date', 'DESC')
			->groupBy('id')
			->limit($home_settings->events_total)
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
				return $event->status = "Invalid Date";
			}
		});

		// dd($events);

		$event_categories = DB::table('event_categories')->select(['name', 'slug', 'id'])->get();

		$news = Blog::limit($home_settings->news_total)->orderBy('created_at', 'DESC')->get();

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

		$home_event_registration_section = DB::table('dynamic_pages')->select('dynamic_page_name as name', 'dynamic_page_content1 as content1')->where('dynamic_page_slug', 'home-event-registration')->first();

		// dd($events);
		// dd($news);
		// dd($home_settings);
		// dd($home_event_registration_section);
		$home_banner_default = DB::table('general_settings')->select('banner_home as banner')->first();

		return view('pages.index', compact('news', 'events', 'event_categories', 'settings', 'home_banner_default', 'home_settings', 'home_event_registration_section', 'committee'));
	}
}
