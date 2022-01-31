<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sport::with(['category' => fn($q) => $q->select('id','name'), ])->get();
        return view('admin.event_sports.index', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|numeric',
        ]);

        Sport::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
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
        $categories = DB::table('event_categories')->get()->toArray();
        $sport = Sport::with(['category' => fn($q) => $q->select('id','name'), ])->find($id);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|numeric',
        ]);

        $sport = Sport::findOrFail($id);

        if($sport->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
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
        $sport = Sport::withCount('events')->findOrFail($id);
        // dd($sport);
        if($sport->events_count > 0) {
            return redirect()->route('admin.event_sport.index')->withErrors("Selected sport can't be deleted, there are some events under this sport");
        } else {
            $sport->delete();
            return redirect()->route('admin.event_sport.index')->with('success', 'Sport deleted successfully');

        }
    }
}
