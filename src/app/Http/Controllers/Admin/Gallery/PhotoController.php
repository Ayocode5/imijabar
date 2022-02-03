<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $this->authorize('viewAny', Photo::class);

        $photos = Photo::with([
            'category' => function ($q) {
                $q->select('id','name');
            }

        ])->orderBy('photo_order')->get();

        return view('admin.photo.index', compact('photos'));
    }

    public function create()
    {
        $this->authorize('create', Photo::class);

        $categories = DB::table('gallery_categories')->select(['name', 'id'])->get();
        return view('admin.photo.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Photo::class);

        $request->validate([
            'photo_name' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_order' => 'numeric|min:0|max:32767',
            'category_id' => 'required'
        ]);

        $fileName = 'photo-' . Uuid::uuid4() . '.' . $request->file('photo_name')->getClientOriginalExtension();
        $request->file('photo_name')->move(public_path('uploads/'), $fileName);

        Photo::create([
            'photo_name' => $fileName,
            'photo_order' => $request->photo_order,
            'category_id' => $request->category_id,
            'photo_caption' => $request->photo_caption ?? null,
        ]);

        return redirect()->route('admin.photo.index')->with('success', 'Photo is added successfully!');
    }

    public function edit($id)
    {
        $this->authorize('update', Photo::class);

        $photo = Photo::findOrFail($id);
        $categories = DB::table('gallery_categories')->select(['name', 'id'])->get();

        return view('admin.photo.edit', compact('photo', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', Photo::class);

        $fileName = '';
        $photo = Photo::findOrFail($id);

        $request->validate([
            'photo_name' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_order' => 'required|numeric|min:0|max:32767',
            'category_id' => 'numeric',
        ]);


        if ($request->hasFile('photo_name')) {

            if ($photo->photo_name) {
                unlink(public_path('uploads/' . $photo->photo_name));
                preg_match('/(photo-)(.*).(jpg|png|jpeg|gif)/', $photo->photo_name, $photo_name_format_split);
                $fileName = $photo_name_format_split[1] . $photo_name_format_split[2] . '.' . $request->file('photo_name')->getClientOriginalExtension();
                $request->file('photo_name')->move(public_path('uploads/'), $fileName);
            } else {
                $fileName = 'photo-' . Uuid::uuid4() . '.' . $request->file('photo_name')->getClientOriginalExtension();
                $request->file('photo_name')->move(public_path('uploads/'), $fileName);
            }
        }

        $photo->update([
            'photo_name' => $fileName == '' ? $photo->photo_name : $fileName,
            'photo_order' => $request->photo_order,
            'photo_caption' => $request->photo_caption,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('admin.photo.index')->with('success', 'Photo is updated successfully!');
    }

    public function destroy($id)
    {
        $this->authorize('delete', Photo::class);

        $photo = Photo::findOrFail($id);
        $photo->photo_name != '' ?
            unlink(public_path('uploads/' . $photo->photo_name)) :
            null;
        $photo->delete();
        return Redirect()->back()->with('success', 'Photo is deleted successfully!');
    }
}
