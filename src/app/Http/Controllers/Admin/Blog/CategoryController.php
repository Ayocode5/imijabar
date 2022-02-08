<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $this->authorize('viewAny', Category::class);

        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        $this->authorize('create', Category::class);

        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->authorize('create', Category::class);

        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_slug' => 'unique:categories'
        ]);
        $category = new Category();
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.category.index')->with('success', 'Category is added successfully!');
    }

    public function edit($id)
    {
        $this->authorize('update', Category::class);

        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {

        $this->authorize('update', Category::class);

        $request->validate([
            'category_name'   =>  [
                'required',
                Rule::unique('categories')->ignore($id),
            ],
            'category_slug'   =>  [
                Rule::unique('categories')->ignore($id),
            ]
        ]);

        $category = Category::findOrFail($id);
        $data = $request->only($category->getFillable());
        if(empty($data['category_slug']))
        {
            unset($data['category_slug']);
            $data['category_slug'] = Str::slug($request->category_name);
        }
        $category->fill($data)->save();
        return redirect()->route('admin.category.index')->with('success', 'Category is updated successfully!');
    }

    public function destroy($id)
    {       

        $this->authorize('delete', Category::class);

        // Deleting data from "blogs" table
        $all_blog = DB::table('blogs')->where('category_id', $id)->count();

        if($all_blog > 0) {
            return Redirect()->back()->withErrors("Category can't be deleted, some posts under this category!");
        }
       
        $category = Category::findOrFail($id);
        $category->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Category is deleted successfully!');
    }

}
