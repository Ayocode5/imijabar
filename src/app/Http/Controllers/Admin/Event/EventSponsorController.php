<?php

namespace App\Http\Controllers\Admin\Event;

use App\Http\Controllers\Controller;
use App\Models\Admin\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Ramsey\Uuid\Uuid;

class EventSponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::all();
        return view('admin.event_sponsor.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event_sponsor.create');
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
            'name' => 'required|unique:sponsors',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg,gif|max:2048'
        ]);

        $fileName = 'sponsor-' . Uuid::uuid4() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path('uploads/'), $fileName);

        Sponsor::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $fileName,
            'seo_title' => $request->seo_title ?? null,
            'seo_meta_description' => $request->seo_meta_description ?? null
        ]);

        return redirect()->route('admin.event_sponsor.index')->with('success', 'Sponsor created successfully');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return view('admin.event_sponsor.edit', compact('sponsor'));
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
            'name' => [Rule::unique('sponsors', 'name')->ignore($id)],
            'image' => 'image|mimes:png,jpg,jpeg,svg,gif|max:2048'
        ]);

        $sponsor = Sponsor::findOrFail($id);

        $fileName = '';

        // dd($request);
        if ($request->hasFile('image')) {
            if (file_exists(public_path('uploads/') . $sponsor->image) && !empty($sponsor->image)) {

                //Remove old image
                unlink(public_path('uploads/' . $sponsor->image));

                // Rebuild the name of photo and 
                // Separates photo name and extension
                preg_match('/(sponsor-)(.*).(jpg|png|jpeg|gif|svg)/', $sponsor->image, $sponsor_photo_split);

                $fileName = $sponsor_photo_split[1] . $sponsor_photo_split[2] . '.' . $request->file('image')->getClientOriginalExtension();

                //Store new Photo
                $request->file('image')->move(public_path('uploads/'), $fileName);

            } else {

                //Create new Photo
                $fileName = 'sponsor-' . Uuid::uuid4() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(public_path('uploads/'), $fileName);
            }
        }

        $sponsor->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => !empty($fileName) ? $fileName : $sponsor->image,
            'seo_title' => $request->seo_title ?? null,
            'seo_meta_description' => $request->seo_meta_description ?? null
        ]);

        return redirect()->route('admin.event_sponsor.index')->with('success', 'Sponsor updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sponsor = Sponsor::find($id);

        if($sponsor) {
            unlink(public_path('uploads/' . $sponsor->image));
        }

        $sponsor->delete();

        return redirect()->route('admin.event_sponsor.index')->with('success', 'Sponsor deleted successfully');

    }
}
