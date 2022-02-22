<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Admin\PageFaqItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageFaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function edit()
    {
        $page_faq = PageFaqItem::where('id',1)->first();
        return view('admin.page_setting.page_faq', compact('page_faq'));
    }

     public function update(Request $request)
     {
         $data['name'] = $request->input('name');
         $data['detail'] = $request->input('detail');
         $data['status'] = $request->input('status');
         $data['seo_title'] = $request->input('seo_title');
         $data['seo_meta_description'] = $request->input('seo_meta_description');

         PageFaqItem::where('id',1)->update($data);

         return redirect()->back()->with('success', 'FAQ Page Content is updated successfully!');

     }

}
