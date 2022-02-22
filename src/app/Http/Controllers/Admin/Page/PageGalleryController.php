<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PageGalleryItem;

class PageGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function edit()
    {
        $page_gallery = PageGalleryItem::where('id',1)->first();
        return view('admin.page_setting.page_gallery', compact('page_gallery'));
    }

     public function update(Request $request)
     {
         $data['name'] = $request->input('name');
         $data['detail'] = $request->input('detail');
         $data['status'] = intval($request->input('status'));
         $data['seo_title'] = $request->input('seo_title');
         $data['seo_meta_description'] = $request->input('seo_meta_description');

         PageGalleryItem::where('id',1)->update($data);

         return redirect()->back()->with('success', 'News Page Content is updated successfully!');

     }
}
