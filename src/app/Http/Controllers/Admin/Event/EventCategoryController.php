<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', EventCategory::class);

        $categories = EventCategory::all();
        return view('admin.event.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', EventCategory::class);

        return view('admin.event.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', EventCategory::class);

        $request->validate([
            'name' => 'required|unique:event_categories',
        ]);

        $newCategory = new EventCategory([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'seo_title' => $request->input('seo_title') ?? '',
            'seo_meta_description' => $request->input('seo_meta_description') ?? ''
        ]);

        $newCategory->save();

        return redirect()->route('admin.event.category.index')->with('success', 'Event Category Successfuly added!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', EventCategory::class);

        $category = EventCategory::findOrFail($id);
        // dd($category);
        return view('admin.event.category.edit', compact('category'));
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
        $this->authorize('update', EventCategory::class);

        $request->validate([
            'name' => 'required',
            'seo_title' => 'max:255',
        ]);

        $category = EventCategory::find($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->seo_title = $request->input('seo_title') ?? '';
        $category->seo_meta_description = $request->input('seo_meta_description') ?? '';
        $category->save();

        return redirect()->route('admin.event.category.index')->with('success', 'Event Category updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', EventCategory::class);

        $sports = DB::table('sports')->where('category_id', $id)->count();

        if ($sports > 0) {
            return redirect()->route('admin.event.category.index')->withErrors("Category can't be deleted, some event are under this category");
        }

        EventCategory::find($id)->delete();
        return redirect()->route('admin.event.category.index')->with('success', 'Event Category deleted successfuly');
    }
}
