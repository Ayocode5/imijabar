@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add News</h1>

    <form action="{{ route('admin.news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">News</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.news.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title *</label>
                    <input required type="text" name="blog_title" class="form-control" value="{{ old('blog_title') }}"
                        autofocus>
                </div>
                <div class="form-group">
                    <label for="">Content *</label>
                    <textarea required name="blog_content" class="form-control editor" cols="30"
                        rows="10">{{ old('blog_content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Summary *</label>
                    <textarea required name="blog_content_short" class="form-control" cols="30"
                        rows="10">{{ old('blog_content_short') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Add Banner *</label>
                    <div>
                        <img id="preview_news_image" src="" alt="" class="w_300"><br><br>
                        <input required accept="image/*" type="file" id="blog_photo" name="blog_photo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Select Category *</label>
                            <select required name="category_id" class="form-control">
                                @foreach ($category as $row)
                                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Want to send email to subscribers? *</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="send_email_to_subscribers" id="rr1"
                                value="Yes" checked>
                            <label class="form-check-label font-weight-normal" for="rr1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="send_email_to_subscribers" id="rr2"
                                value="No">
                            <label class="form-check-label font-weight-normal" for="rr2">No</label>
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
                    <input type="text" name="seo_title" class="form-control" value="{{ old('seo_title') }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control" cols="30"
                        rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

    <script>
        blog_photo.onchange = (event) => {
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
