<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SocialMediaItem;
use Illuminate\Http\Request;

class SocialMediaItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $this->authorize('viewAny', SocialMediaItem::class);

        $social_media = SocialMediaItem::orderBy('social_order')->get();
        return view('admin.social_media.index', compact('social_media'));
    }

    public function create()
    {
        $this->authorize('create', SocialMediaItem::class);

        return view('admin.social_media.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', SocialMediaItem::class);

        $social_media = new SocialMediaItem();
        $data = $request->only($social_media->getFillable());

        $request->validate([
            'social_url' => 'required',
            'social_icon' => 'required',
            'social_order' => 'numeric|min:0|max:32767'
        ]);

        $social_media->fill($data)->save();
        return redirect()->route('admin.social_media.index')->with('success', 'Social Media Item is added successfully!');
    }

    public function edit($id)
    {
        $this->authorize('update', SocialMediaItem::class);

        $social_media = SocialMediaItem::findOrFail($id);
        return view('admin.social_media.edit', compact('social_media'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', SocialMediaItem::class);

        $social_media = SocialMediaItem::findOrFail($id);
        $data = $request->only($social_media->getFillable());

        $request->validate([
            'social_url' => 'required',
            'social_icon' => 'required',
            'social_order' => 'numeric|min:0|max:32767'
        ]);

        $social_media->fill($data)->save();
        return redirect()->route('admin.social_media.index')->with('success', 'Social Media Item is updated successfully!');
    }

    public function destroy($id)
    {
        $this->authorize('delete', SocialMediaItem::class);

        $social_media = SocialMediaItem::findOrFail($id);
        $social_media->delete();
        return Redirect()->back()->with('success', 'Social Media Item is deleted successfully!');
    }
}
