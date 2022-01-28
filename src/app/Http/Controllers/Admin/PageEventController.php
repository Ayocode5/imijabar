<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PageEventItem;

class PageEventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function edit()
    {
        $page_event = PageEventItem::where('id',1)->first();
        return view('admin.page_setting.page_event', compact('page_event'));
    }

     public function update(Request $request)
     {
         $data['name'] = $request->input('name');
         $data['detail'] = $request->input('detail');
         $data['status'] = $request->input('status');
         $data['seo_title'] = $request->input('seo_title');
         $data['seo_meta_description'] = $request->input('seo_meta_description');

         PageEventItem::where('id',1)->update($data);

         return redirect()->back()->with('success', 'Event Page Content is updated successfully!');

     }
}
