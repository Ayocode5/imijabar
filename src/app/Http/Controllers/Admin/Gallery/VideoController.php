<?php

namespace App\Http\Controllers\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Admin\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $this->authorize('viewAny', Video::class);

        $videos = Video::with(['category' => fn ($q) => $q->select(['id', 'name'])])->orderBy('video_order')->get();
        return view('admin.video.index', compact('videos'));
    }

    public function create()
    {
        $this->authorize('create', Video::class);

        $categories = DB::table('gallery_categories')->get();
        return view('admin.video.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Video::class);

        $request->validate([
            'video_youtube' => 'required',
            'video_order' => 'numeric|min:0|max:32767',
            'category_id' => 'required|numeric'
        ]);

        Video::create([
            'video_youtube' => $request->video_youtube,
            'video_order' => $request->video_order,
            'category_id' => $request->category_id,
            'video_caption' => $request->video_caption
        ]);

        return redirect()->route('admin.video.index')->with('success', 'Video is added successfully!');
    }

    public function edit($id)
    {
        $this->authorize('update', Video::class);

        $video = Video::findOrFail($id);
        $categories = DB::table('gallery_categories')->get();
        return view('admin.video.edit', compact(['video', 'categories']));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', Video::class);

        $video = Video::findOrFail($id);

        $request->validate([
            'video_youtube' => 'required',
            'video_order' => 'numeric|min:0|max:32767',
            'category_id' => 'required'
        ]);

        $video->update($request->only($video->getFillable()));
        return redirect()->route('admin.video.index')->with('success', 'Video is updated successfully!');
    }

    public function destroy($id)
    {
        $this->authorize('delete', Video::class);

        $video = Video::findOrFail($id);
        $video->delete();
        return Redirect()->back()->with('success', 'Video is deleted successfully!');
    }
}
