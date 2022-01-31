@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Sports</h1>

    <form action="{{ route('admin.event_sport.store') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Sports</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event_sport.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Sport Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" autofocus>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Category *</label>
                    <select name="category_id" id="category_id">
                        @if (count($categories) < 0)
                            <option value="">No Event Category available</option>
                        @endif
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30"
                        rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection
