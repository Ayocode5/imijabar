<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Jobs\sendEmailNewPostCreated;
use App\Models\Admin\Blog;
use App\Models\Admin\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $this->authorize('viewAny', Blog::class);

        $blog = Blog::orderBy('created_at', 'DESC')->get();
        return view('admin.blog.index', compact('blog'));
    }

    public function create()
    {
        $this->authorize('create', Blog::class);

        $category = DB::table('categories')->get();
        return view('admin.blog.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', Blog::class);

        $request->validate([
            'blog_title' => 'required|unique:blogs',
            'blog_slug' => 'unique:blogs',
            'blog_content' => 'required',
            'blog_content_short' => 'required',
            'blog_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $ext = $request->file('blog_photo')->getClientOriginalExtension();
        $final_name = 'blog-' . Uuid::uuid4()->toString() . '.' . $ext;

        $request->file('blog_photo')->move(public_path('uploads'), $final_name);

        $blog = new Blog();
        $data = $request->only($blog->getFillable());
        if (empty($data['blog_slug'])) {
            unset($data['blog_slug']);
            $data['blog_slug'] = Str::slug($request->blog_title);
        }

        unset($data['blog_photo']);
        $data['blog_photo'] = $final_name;

        $blog->fill($data)->save();

        // Send Email to Subscribers
        if (request('send_email_to_subscribers') == 'Yes') {
            $email_template_data = DB::table('email_templates')->where('id', 4)->first();
            $subject = $email_template_data->et_subject;
            $message = $email_template_data->et_content;

            $post_link = url('news/' . $data['blog_slug']);
            $message = str_replace('[[post_link]]', $post_link, $message);

            $subscribers = Subscriber::where('subs_active', 1)->get();

            foreach ($subscribers as $subscriber) {

                sendEmailNewPostCreated::dispatch([
                    'recipent' => $subscriber->subs_email,
                    'subject' => $subject,
                    'message' => $message
                ]);
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'News is added successfully!');
    }

    public function edit($id)
    {
        $this->authorize('update', Blog::class);

        $blog = Blog::findOrFail($id);
        $category = DB::table('categories')->get();
        return view('admin.blog.edit', compact('blog', 'category'));
    }

    public function update(Request $request, $id)
    {
        $this->authorize('update', Blog::class);

        $blog = Blog::findOrFail($id);
        $data = $request->only($blog->getFillable());

        // dd($blog);
        $request->validate([
            'blog_title'   =>  ['required', Rule::unique('blogs')->ignore($id),],
            'blog_slug'   =>  [Rule::unique('blogs')->ignore($id),],
            'blog_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('blog_photo')) {

            //remove old photo
            !empty($blog->blog_photo) && file_exists(public_path('uploads/' . $blog->blog_photo)) ? unlink(public_path('uploads/' . $blog->blog_photo)) : null;

            // preg_match('/(blog-)(.*).(jpg|png|jpeg|gif)/', $blog->blog_photo, $blog_photo_split);

            // // Rebuild the name of photo 
            // $filename = $blog_photo_split[1] . $blog_photo_split[2] . '.' . $request->file('blog_photo')->getClientOriginalExtension();
            // //Separates photo name and extension

            // // Save The Photo
            // $request->file('blog_photo')->move(public_path('uploads/'), $filename);

            $ext = $request->file('blog_photo')->getClientOriginalExtension();
            $filename = 'blog-' . Uuid::uuid4()->toString() . '.' . $ext;

            $request->file('blog_photo')->move(public_path('uploads'), $filename);

            //set new file photo
            unset($data['blog_photo']);
            $data['blog_photo'] = $filename;
        }


        if (empty($data['blog_slug'])) {
            unset($data['blog_slug']);
            $data['blog_slug'] = Str::slug($request->blog_title);
        }

        $blog->fill($data)->save();

        return redirect()->route('admin.news.index')->with('success', 'News is updated successfully!');
    }

    public function destroy($id)
    {
        $this->authorize('delete', Blog::class);

        $blog = Blog::findOrFail($id);
        unlink(public_path('uploads/' . $blog->blog_photo));
        $blog->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'News is deleted successfully!');
    }
}
