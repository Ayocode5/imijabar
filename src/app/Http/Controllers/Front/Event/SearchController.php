<?php

namespace App\Http\Controllers\Front\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use App\Models\Admin\Sport;
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

        $page_event_settings = DB::table('page_event_items')->first();

        $events_sport_filter = $request->has('sport') ? $request->sport : null;

        $categories = DB::table('event_categories')->select('name', 'slug')->get();
        $sports = Sport::with(['category' => function ($q) {
            $q->select('id', 'slug');
        }])->select('id', 'category_id', 'name', 'slug')->get();

        $events = collect([]);

        if ($request->has('q') && !empty($request->q)) {

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
                ->where('event_name', 'like', "%$request->q%")
                ->whereHas('sports', function ($s_query) use ($events_sport_filter) {
                    if ($events_sport_filter) {
                        $s_query->where('slug', $events_sport_filter);
                    }
                })
                ->orderBy('created_at')
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
                } else if ($events->lastPage() == 1 && $request->page == 2) {
                    return response()->json($events, 404);
                }
            }
        }

        // dd($events);
        return view('pages.event_search', compact('events', 'categories', 'sports', 'settings', 'page_event_settings'));
    }
}
