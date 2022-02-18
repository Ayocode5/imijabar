@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Blog Page Information</h1>

    <form action="{{ url('admin/page/blog/update') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $page_blog->name }}">
                </div>
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control editor" cols="30" rows="10">{{ $page_blog->detail }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" @if ($page_blog?->status == 1)
                            selected
                            @endif>Show</option>
                        <option value="0" @if ($page_blog?->status == 0)
                            selected
                            @endif>Hide</option>
                    </select>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $page_blog->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_blog->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
