<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageBlogItem;
use Illuminate\Http\Request;

class PageBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function edit()
    {
        $page_blog = PageBlogItem::where('id',1)->first();
        return view('admin.page_setting.page_blog', compact('page_blog'));
    }

     public function update(Request $request)
     {
         $data['name'] = $request->input('name');
         $data['detail'] = $request->input('detail');
         $data['status'] = $request->input('status');
         $data['seo_title'] = $request->input('seo_title');
         $data['seo_meta_description'] = $request->input('seo_meta_description');

         PageBlogItem::where('id',1)->update($data);

         return redirect()->back()->with('success', 'News Page Content is updated successfully!');

     }

}
