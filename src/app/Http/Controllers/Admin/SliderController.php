<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index', compact('slider'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slider_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $fileName = 'slider-'.Uuid::uuid4().'.'.$request->file('slider_photo')->getClientOriginalExtension();
        $request->file('slider_photo')->move(public_path('uploads'), $fileName);

        $slider = new Slider();
        $data = $request->only($slider->getFillable());

        unset($data['slider_photo']);
        $data['slider_photo'] = $fileName;

        $slider->fill($data)->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider is added successfully!');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $data = $request->only($slider->getFillable());

        if ($request->hasFile('slider_photo')) {

            $request->validate([
                'slider_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            unlink(public_path('uploads/'.$slider->slider_photo));

            // Uploading the file
            preg_match('/(slider-)(.*).(jpg|png|jpeg|gif)/', $slider->slider_photo, $slider_photo_format_split);
            $final_name = $slider_photo_format_split[1].$slider_photo_format_split[2].'.'.$request->file('slider_photo')->getClientOriginalExtension();
            $request->file('slider_photo')->move(public_path('uploads/'), $final_name);

            unset($data['slider_photo']);
            $data['slider_photo'] = $final_name;
        }

        $slider->fill($data)->save();
        return redirect()->route('admin.slider.index')->with('success', 'Slider is updated successfully!');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        unlink(public_path('uploads/'.$slider->slider_photo));
        $slider->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Slider is deleted successfully!');
    }

}
