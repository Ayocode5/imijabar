<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Event;
use App\Models\Admin\EventPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $event = Event::all();
        return view('admin.event.index', compact('event'));
    }

    public function create()
    {
        $categories = DB::table('event_categories')->select(['name', 'id'])->get();
        // dd(count($categories));
        return view('admin.event.create', compact('categories'));
    }

    public function store(Request $request)
    {
 
        $event = new Event();
        $data = $request->only($event->getFillable());

        // dd($request);

        $request->validate([
            'category_id' => 'required',
            'event_map' => 'required',
            'event_content' => 'required',
            'event_location' => 'required',
            'event_name' => 'required|unique:events',
            'event_featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'events'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('event_featured_photo')->extension();
        $final_name = 'event-featured-photo-'.$ai_id.'.'.$ext;

        //TAKE IMAGE and MOVE TO PUBLIC FOLDER 
        $request->file('event_featured_photo')->move(public_path('uploads/'), $final_name);

        $data['category_id'] = $request->category_id;
        $data['event_featured_photo'] = $final_name;
        $data['event_slug'] = Str::slug($request->event_name);

        // dd($data);

        $event->create($data);
        
        return redirect()->route('admin.event.index')->with('success', 'Event is added successfully!');
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        // dd($event);
        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $data = $request->only($event->getFillable());

        if($request->hasFile('event_featured_photo')) {
            $request->validate([
                'event_name'   =>  [
                    'required',
                    Rule::unique('events')->ignore($id),
                ],
                'event_slug'   =>  [
                    Rule::unique('events')->ignore($id),
                ],
                'event_featured_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            unlink(public_path('uploads/'.$event->event_featured_photo));
            $ext = $request->file('event_featured_photo')->extension();
            $final_name = 'event-featured-photo-'.$id.'.'.$ext;
            $request->file('event_featured_photo')->move(public_path('uploads/'), $final_name);
            $data['event_featured_photo'] = $final_name;
        } else {
            $request->validate([
                'event_name'   =>  [
                    'required',
                    Rule::unique('events')->ignore($id),
                ],
                'event_slug'   =>  [
                    Rule::unique('events')->ignore($id),
                ]
            ]);
            $data['event_featured_photo'] = $event->event_featured_photo;
        }

        $event->fill($data)->save();
        return redirect()->route('admin.event.index')->with('success', 'Event is updated successfully!');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        unlink(public_path('uploads/'.$event->event_featured_photo));
        $event->delete();

        $event_photo = EventPhoto::where('event_id', $id)->get();
        foreach($event_photo as $row)
        {
            unlink(public_path('uploads/'.$row->event_photo));
            DB::table('event_photos')->where('event_id',$row->event_id)->delete();
        }

        return Redirect()->back()->with('success', 'Event is deleted successfully!');
    }

    public function gallerysection($id)
    {
        $event_photo = EventPhoto::where('event_id',$id)->get();
        $event_id = $id;
        return view('admin.event.gallery', compact('event_photo','event_id'));
    }

    public function gallerystore(Request $request)
    {
        $event_photo = new EventPhoto();
        $data = $request->only($event_photo->getFillable());

        $request->validate([
            'event_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $statement = DB::select("SHOW TABLE STATUS LIKE 'event_photos'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('event_photo')->extension();
        $final_name = 'event-photo-'.$ai_id.'.'.$ext;
        $request->file('event_photo')->move(public_path('uploads/'), $final_name);
        $data['event_photo'] = $final_name;
        $data['event_id'] = $request->event_id;
        $event_photo->fill($data)->save();
        return redirect()->back()->with('success', 'Event Photo is added successfully!');
    }

    public function gallerydelete($id)
    {
        $event_photo = EventPhoto::findOrFail($id);
        unlink(public_path('uploads/'.$event_photo->event_photo));
        $event_photo->delete();
        return Redirect()->back()->with('success', 'Event Photo is deleted successfully!');
    }
}
