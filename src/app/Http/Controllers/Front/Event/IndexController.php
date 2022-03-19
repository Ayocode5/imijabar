<?php

namespace App\Http\Controllers\Front\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Sport;

class IndexController extends Controller
{
    public function __invoke(Request $request)
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

        $page_event_settings = DB::table('page_event_items')->first();

        $events_sport_filter = $request->has('sport') ? $request->sport : null;

        $categories = DB::table('event_categories')->select('name', 'slug')->get();
        // $sports = DB::table('sports')->select('name', 'slug')->get();
        $sports = Sport::with(['category' => function ($q) {
            $q->select('id', 'slug');
        }])->select('id', 'category_id', 'name', 'slug')->get();

        $events = Event::with([
            'sports' => function ($query) {
                $query->select('id', 'category_id', 'name', 'slug')
                    ->with(['category' => function ($q) {
                        $q->select('id', 'name', 'slug');
                    }])->distinct();
            },
            'sponsors' => function ($query) {
                $query->select('id', 'name', 'slug');
            }

        ])->select([
            'id',
            'event_name as name',
            'event_slug as slug',
            'event_content_short as summary',
            'event_start_date as start_date',
            'event_end_date as end_date',
            'event_status as status',
            'event_organizer as organizer',
            'event_location as location',
            'event_featured_photo as photo',
            'created_at',
            'deleted_at'
        ])->where('deleted_at', null)
            ->whereHas('sports', function ($s_query) use ($events_sport_filter) {
                if ($events_sport_filter) {
                    $s_query->where('slug', $events_sport_filter);
                }
            })
            ->orderBy('event_start_date', 'ASC')
            ->paginate(6);


        $events->map(function ($event) {
            $event->categories = $event->sports->map(function ($sport) {
                return $sport->category;
            });
            $event->categories = $event->categories->unique();
        });

        if ($events) {
            if ($events->lastPage() > 1 && $events->currentPage() > 1) {
                return response()->json($events, 200);
            }
        }

        $event_banner_default = DB::table('general_settings')->select('banner_event as banner')->first();

        return view('pages.event', compact('events', 'categories', 'sports', 'event_banner_default', 'settings', 'page_event_settings'));
    }
}
