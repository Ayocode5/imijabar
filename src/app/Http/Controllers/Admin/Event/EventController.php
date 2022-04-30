<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use App\Models\Admin\EventPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {

        $this->authorize('viewAny', Event::class);

        $date_today = date('Y-m-d');
        $events = DB::table('events as e')
            ->join('event_sport as es', 'es.event_id', '=', 'e.id')
            ->join('sports as sp', 'sp.id', '=', 'es.sport_id')
            ->join('event_categories as ec', 'ec.id', '=', 'sp.category_id')
            ->selectRaw("
                e.id as id,
                e.event_name as name,
                e.event_start_date,
                e.event_end_date,
                e.event_featured_photo as featured_photo,
                GROUP_CONCAT(DISTINCT sp.name SEPARATOR ', ') as sports,
                GROUP_CONCAT(DISTINCT ec.name SEPARATOR ', ') as categories,
                GROUP_CONCAT(DISTINCT sp.id SEPARATOR ', ') as sports_id,
                GROUP_CONCAT(DISTINCT ec.id SEPARATOR ', ') as categories_id
            ")
            ->where('e.deleted_at', null)
            ->orderBy('e.event_end_date', 'DESC')
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
                return $event->status = "Invalid Date";
            }
        });

        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        $this->authorize('create', Event::class);

        $sports = DB::table('sports')->select(['name', 'id'])->get();
        $sponsors = DB::table('sponsors')->select(['name', 'id'])->get();
        return view('admin.event.create', compact(['sports', 'sponsors']));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Event::class);

        $event = new Event();
        $data = $request->only($event->getFillable());

        $request->validate([
            'sports_id' => 'required',
            'event_organizer' => 'required',
            'event_content' => 'required',
            'event_content_short' => 'required',
            'event_location' => 'required',
            'event_location_city' => 'required',
            'event_location_province' => 'required',
            'event_start_date' => 'required',
            'event_end_date' => 'required',
            'event_name' => 'required|unique:events',
            'event_featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $ext = $request->file('event_featured_photo')->getClientOriginalExtension();
        $fileName = 'event-featured-photo-' . Uuid::uuid4() . '.' . $ext;

        $request->file('event_featured_photo')->move(public_path('uploads/'), $fileName);
        $data['event_featured_photo'] = $fileName;
        $data['event_slug'] = Str::slug($request->event_name);

        $event->fill($data)->save();
        $event->sports()->sync($request->sports_id);
        $event->sponsors()->sync($request->sponsor_id);

        return redirect()->route('admin.event.index')->with('success', 'Event is added successfully!');
    }

    public function edit($id)
    {
        $this->authorize('update', Event::class);

        $event = Event::with([

            'sports' => fn ($q) => $q->select('id'),
            'sponsors' => fn ($q) => $q->select('id')

            ])->findOrFail($id);

        $sports = DB::table('sports')->select(['name', 'id'])->get();
        $sponsors = DB::table('sponsors')->select(['name', 'id'])->get();
        return view('admin.event.edit', compact(['event', 'sports', 'sponsors']));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', Event::class);

        $event = Event::findOrFail($id);

        $data = $request->only($event->getFillable());

        $request->validate([
            'event_name' =>  ['required', Rule::unique('events')->ignore($id),],
            'event_featured_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'sports_id' => 'required',
            'event_organizer' => 'required',
            'event_content' => 'required',
            'event_content_short' => 'required',
            'event_location' => 'required',
            'event_location_city' => 'required',
            'event_location_province' => 'required',
            'event_start_date' => 'required',
            'event_end_date' => 'required',
        ]);

        $data['event_slug'] = Str::slug($request->event_name);

        if ($request->hasFile('event_featured_photo')) {

            if (file_exists(public_path('uploads/' . $event->event_featured_photo)) && !empty($event->event_featured_photo)) {

                unlink(public_path('uploads/' . $event->event_featured_photo));

                // preg_match('/(event-featured-photo-)(.*).(jpg|png|jpeg|gif)/', $event->event_featured_photo, $event_photo_format_split);
                // $fileName = $event_photo_format_split[1] . $event_photo_format_split[2] . '.' . $request->file('event_featured_photo')->getClientOriginalExtension();
                // $request->file('event_featured_photo')->move(public_path('uploads/'), $fileName);
                // $data['event_featured_photo'] = $fileName;

                $fileName = 'event-featured-photo-' . Uuid::uuid4() . '.' . $request->file('event_featured_photo')->getClientOriginalExtension();
                $request->file('event_featured_photo')->move(public_path('uploads/'), $fileName);
                $data['event_featured_photo'] = $fileName;

            } else {

                $fileName = 'event-featured-photo-' . Uuid::uuid4() . '.' . $request->file('event_featured_photo')->getClientOriginalExtension();
                $request->file('event_featured_photo')->move(public_path('uploads/'), $fileName);
                $data['event_featured_photo'] = $fileName;
            }
        } else {
            $data['event_featured_photo'] = $event->event_featured_photo;
        }

        $event->update($data);
        $event->sports()->sync($request->sports_id);
        $event->sponsors()->sync($request->sponsors_id);

        return redirect()->route('admin.event.index')->with('success', 'Event is updated successfully!');
    }

    public function destroy($id)
    {
        $this->authorize('delete', Event::class);

        $event = Event::findOrFail($id);
        unlink(public_path('uploads/' . $event->event_featured_photo));
        $event->delete();

        $event_photo = EventPhoto::where('event_id', $id)->get();
        foreach ($event_photo as $row) {
            unlink(public_path('uploads/' . $row->event_photo));
            DB::table('event_photos')->where('event_id', $row->event_id)->delete();
        }

        return Redirect()->back()->with('success', 'Event is deleted successfully!');
    }

    public function gallerysection($id)
    {
        $event_photo = EventPhoto::where('event_id', $id)->get();
        $event_id = $id;
        return view('admin.event.gallery', compact('event_photo', 'event_id'));
    }

    public function gallerystore(Request $request)
    {
        $event_photo = new EventPhoto();
        $data = $request->only($event_photo->getFillable());

        $request->validate([
            'event_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $fileName = 'event-photo-' . Uuid::uuid4() . '.' . $request->file('event_photo')->getClientOriginalExtension();
        $request->file('event_photo')->move(public_path('uploads/'), $fileName);

        $data['event_photo'] = $fileName;
        $data['event_id'] = $request->event_id;

        $event_photo->fill($data)->save();
        return redirect()->back()->with('success', 'Event Photo is added successfully!');
    }

    public function gallerydelete($id)
    {
        $event_photo = EventPhoto::findOrFail($id);
        unlink(public_path('uploads/' . $event_photo->event_photo));
        $event_photo->delete();
        return Redirect()->back()->with('success', 'Event Photo is deleted successfully!');
    }
}
