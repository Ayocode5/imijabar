@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Sport</h1>

    <form action="{{ url('admin/event/sport/update/' . $sport->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Sport</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event_sport.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Category Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ $sport->name }}" autofocus>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Category *</label>
                    <select name="category_id" id="category_id">
                        @if (count($categories) < 0)
                            <option value="">No Event Category available</option>
                        @else
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $sport->category->id)
                                    selected
                                @endif>{{ $category->name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $sport->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30"
                        rows="10">{{ $sport->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection
