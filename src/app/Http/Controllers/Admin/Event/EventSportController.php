<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class EventSportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Sport::class);
        $sports = Sport::with(['category' => fn ($q) => $q->select('id', 'name'),])->get();
        return view('admin.event_sports.index', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Sport::class);
        $categories = DB::table('event_categories')->get();
        return view('admin.event_sports.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', Sport::class);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|numeric',
        ]);

        $fileName = 'sport-' . Uuid::uuid4() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path('uploads/'), $fileName);

        Sport::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $fileName,
            'category_id' => $request->category_id,
            'seo_title' => $request->seo_title ?? '',
            'seo_meta_description' => $request->seo_meta_description ?? ''
        ]);

        return redirect()->route('admin.event_sport.index')->with('success', 'Sport created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', Sport::class);

        $categories = DB::table('event_categories')->get()->toArray();
        $sport = Sport::with(['category' => fn ($q) => $q->select('id', 'name'),])->find($id);
        // dd($sport);
        return view('admin.event_sports.edit', compact(['sport', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('update', Sport::class);

        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|numeric',
        ]);

        $sport = Sport::findOrFail($id);

        $fileName = '';

        if ($request->hasFile('image')) {
            if (file_exists(public_path('uploads/') . $sport->image) && !empty($sport->image)) {
                //remove old photo
                unlink(public_path('uploads/') . $sport->image);


                preg_match('/(sport-)(.*).(jpg|png|jpeg|gif|svg)/', $sport->image, $sport_photo_split);

                // Rebuild the name of photo 
                $fileName = $sport_photo_split[1] . $sport_photo_split[2] . '.' . $request->file('image')->getClientOriginalExtension();
                //Separates photo name and extension

                $request->file('image')->move(public_path('uploads/'), $fileName);
            } else {

                $fileName = 'sport-' . Uuid::uuid4() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('uploads/'), $fileName);
            }
        }

        if ($sport->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => !empty($fileName) ? $fileName : $sport->image,
            'category_id' => $request->category_id,
            'seo_title' => $request->seo_title ?? '',
            'seo_meta_description' => $request->seo_meta_description ?? ''
        ])) {
            return redirect()->route('admin.event_sport.index')->with('success', 'Sport updated successfully');
        }

        return redirect()->route('admin.event_sport.index')->withErrors('Sport failed to update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Sport::class);

        $sport = Sport::withCount('events')->findOrFail($id);
        // dd($sport);
        if ($sport->events_count > 0) {
            return redirect()->route('admin.event_sport.index')->withErrors("Selected sport can't be deleted, there are some events under this sport");
        } else {
            if (file_exists(public_path('uploads/') . $sport->image) && !empty($sport->image)) {
                # code...
                unlink(public_path('uploads/') . $sport->image);
            }

            $sport->delete();

            return redirect()->route('admin.event_sport.index')->with('success', 'Sport deleted successfully');
        }
    }
}
