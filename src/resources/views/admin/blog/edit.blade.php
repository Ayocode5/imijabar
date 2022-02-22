@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit News</h1>

    <form action="{{ url('admin/news/update/'.$blog->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="current_photo" value="{{ $blog->blog_photo }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">News</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.news.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input required type="text" name="blog_title" class="form-control" value="{{ $blog->blog_title }}" autofocus>
                </div>
                {{-- <div class="form-group">
                    <label for="">News Slug</label>
                    <input type="text" name="blog_slug" class="form-control" value="{{ $blog->blog_slug }}">
                </div> --}}
                <div class="form-group">
                    <label for="">Content *</label>
                    {{-- {{ dd($blog->blog_content) }} --}}
                    <textarea required name="blog_content" class="form-control editor" cols="30" rows="10">{{ $blog->blog_content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Summary *</label>
                    <textarea required name="blog_content_short" class="form-control h_100" cols="30" rows="10">{{ $blog->blog_content_short }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Existing Image</label>
                    <div>
                        <img id="preview_news_image" src="{{ asset('public/uploads/'.$blog->blog_photo) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Image</label>
                    <div>
                        <input type="file" id="blog_photo" name="blog_photo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Select Category *</label>
                            <select required name="category_id" class="form-control">
                                @foreach($category as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $blog->category_id) selected @endif>{{ $row->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $blog->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $blog->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

    <script>
        
        blog_photo.onchange = evt => {
            console.log(blog_photo.files);
            const [file] = blog_photo.files
            if (file) {
                preview_news_image.src = URL.createObjectURL(file)
            }
            preview_news_image.onload = () => {
                URL.revokeObjectURL(preview_news_image.src)
            }
        }
    </script>

@endsection
