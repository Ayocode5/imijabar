<?php

namespace App\Http\Controllers\Front\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function __invoke($slug)
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


        $event_categories = DB::table('event_categories')->select('name', 'slug')->get();

        $event = Event::with([
            'sports' => function ($query) {
                $query->select('id', 'category_id', 'name', 'slug', 'image')
                    ->with(['category' => function ($q) {
                        $q->select('id', 'name', 'slug');
                    }])->distinct();
            },
            'sponsors' => function ($query) {
                $query->select('id', 'name', 'slug', 'image');
            }

        ])->select([
            'id',
            'event_name as name',
            'event_slug as slug',
            'event_content as content',
            'event_start_date as start_date',
            'event_end_date as date',
            'event_status as status',
            'event_organizer as organizer',
            'event_link as link',
            'event_document_link as document_link',
            'event_location as location',
            'event_featured_photo as photo',
            'created_at',
            'deleted_at'
        ])->where('deleted_at', null)
            ->where('event_slug', $slug)
            ->orderBy('created_at')
            ->first();


        if ($event) {

            $event->categories = $event->sports->map(function ($sport) {
                return $sport->category;
            });

            $event->categories = $event->categories->unique();

            return view('pages.event_detail', compact('settings', 'event', 'event_categories'));
        } else {
            $event = false;
            return view('pages.event_detail', compact('settings', 'event', 'event_categories'));
        }
    }
}
