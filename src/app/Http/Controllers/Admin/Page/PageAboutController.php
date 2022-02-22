<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageAboutItem;
use Illuminate\Http\Request;

class PageAboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function edit()
    {
        $page_about = PageAboutItem::where('id',1)->first();
        return view('admin.page_setting.page_about', compact('page_about'));
    }

    public function update(Request $request)
    {
        $data['title'] = $request->input('title');
        $data['subtitle'] = $request->input('subtitle');
        $data['detail'] = $request->input('detail');

        foreach(range(1,11) as $num) {
            $data["heading$num"] = $request->input("heading$num");
            $data["body$num"] = $request->input("body$num");
        }

        $data['status'] = intval($request->input('status'));
        $data['seo_title'] = $request->input('seo_title');
        $data['seo_meta_description'] = $request->input('seo_meta_description');

        // dd($data);

        PageAboutItem::where('id',1)->update($data);

        return redirect()->back()->with('success', 'About Page Content is updated successfully!');

    }

}
