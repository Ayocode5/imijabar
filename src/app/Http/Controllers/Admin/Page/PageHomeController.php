<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageHomeItem;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function edit()
    {
        $page_home = PageHomeItem::where('id', 1)->first();
        // dd($page_home);
        return view('admin.page_setting.page_home', compact('page_home'));
    }

    // Update HomePage Metadata
    public function metadata(Request $request)
    {
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        PageHomeItem::where('id', 1)->update($data);
        return redirect()->back()->with('success', 'Home Page Meta Information is updated successfully!');
    }

    // Update HomePage Jumbotron Section
    public function jumbotron(Request $request)
    {
        if ($request->hasFile('jumbotron_bg')) {
            $request->validate([
                'jumbotron_bg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            // Unlink old photo
            if(file_exists(public_path('uploads/' . $request->input('current_photo'))) && !empty($request->input('current_photo'))) {
                unlink(public_path('uploads/' . $request->input('current_photo')));
            }

            // Uploading new photo
            $ext = $request->file('jumbotron_bg')->extension();
            $final_name = 'jumbotron_bg' . '.' . $ext;
            $request->file('jumbotron_bg')->move(public_path('uploads/'), $final_name);

            $data['jumbotron_bg'] = $final_name;
        }

        $data['jumbotron_title'] = $request->input('jumbotron_title');
        $data['jumbotron_detail'] = $request->input('jumbotron_detail');
        $data['jumbotron_status'] = intval($request->input('jumbotron_status'));

        PageHomeItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'Newsletter Section is updated successfully!');
    }

    // Update HomePage News Section
    public function news(Request $request)
    {
        $data['news_title'] = $request->input('news_title');
        $data['news_total'] = $request->input('news_total');
        $data['news_status'] = intval($request->input('news_status'));

        PageHomeItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'Home Page News Information is updated successfully!');
    }

    // Update HomePage Events Section
    public function events(Request $request) {

        $data['events_title'] = $request->input('events_title');
        $data['events_total'] = $request->input('events_total');
        $data['events_status'] = intval($request->input('events_status'));

        PageHomeItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'Home Page Events Information is updated successfully!');
    }

    // Update HomePage About Section
    public function about(Request $request) {

        $data['about_title'] = $request->input('about_title');
        $data['about_detail'] = $request->input('about_detail');
        $data['about_status'] = intval($request->input('about_status'));

        PageHomeItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'Home Page About Information is updated successfully!');
    }
    
    // Update HomePage Gallery Section
    public function gallery(Request $request) {

        $data['gallery_title'] = $request->input('gallery_title');
        $data['gallery_detail'] = $request->input('gallery_detail');
        $data['gallery_status'] = intval($request->input('gallery_status'));

        PageHomeItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'Home Page Gallery Information is updated successfully!');
    }

    // Update HomePage Committee Section
    public function committee(Request $request) {

        $data['committee_title'] = $request->input('committee_title');
        $data['committee_detail'] = $request->input('committee_detail');
        $data['committee_status'] = intval($request->input('committee_status'));

        PageHomeItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'Home Page Committee Information is updated successfully!');
    }

    // Update HomePage Newsletter Section
    public function newsletter(Request $request)
    {
        if ($request->hasFile('newsletter_bg')) {
            $request->validate([
                'newsletter_bg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            // Unlink old photo
            unlink(public_path('uploads/' . $request->input('current_photo')));

            // Uploading new photo
            $ext = $request->file('newsletter_bg')->extension();
            $final_name = 'newsletter_bg' . '.' . $ext;
            $request->file('newsletter_bg')->move(public_path('uploads/'), $final_name);

            $data['newsletter_bg'] = $final_name;
        }

        $data['newsletter_title'] = $request->input('newsletter_title');
        $data['newsletter_detail'] = $request->input('newsletter_detail');
        $data['newsletter_status'] = intval($request->input('newsletter_status'));

        PageHomeItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'Home Page Newsletter Information is updated successfully!');
    }
}
