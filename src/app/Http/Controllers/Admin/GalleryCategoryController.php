<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\GalleryCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GalleryCategoryController extends Controller
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
       $categories = GalleryCategory::all();
       return view('admin.gallery_category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery_category.create');
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
            'name' => 'required|unique:gallery_categories',
        ]);

        $newCategory = new GalleryCategory([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'seo_title' => $request->input('seo_title') ?? '',
            'seo_meta_description' => $request->input('seo_meta_description') ?? ''
        ]);

        $newCategory->save();

        return redirect()->route('admin.gallery_category.index')->with('success', 'Gallery Category Successfuly added!');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = GalleryCategory::findOrFail($id);
        // dd($category);
        return view('admin.gallery_category.edit', compact('category'));
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
            'name' => 'required',
            'seo_title' => 'max:255',
        ]);

        $category = GalleryCategory::find($id);
        $category->name = $request->input('name');
        $category->slug = Str::slug($request->input('name'));
        $category->seo_title = $request->input('seo_title') ?? '';
        $category->seo_meta_description = $request->input('seo_meta_description') ?? '';
        $category->save();

        return redirect()->route('admin.gallery_category.index')->with('success', 'Gallery Category updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GalleryCategory::find($id)->delete();

        return redirect()->route('admin.gallery_category.index')->with('success', 'Gallery Category deleted successfuly');

    }
}
