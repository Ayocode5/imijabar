@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Video</h1>

    <form action="{{ route('admin.video.store') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Video</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.video.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Video (YouTube Id) *</label>
                            <input required type="text" name="video_youtube" class="form-control"
                                value="{{ old('video_youtube') }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Caption</label>
                            <input type="text" name="video_caption" class="form-control"
                                value="{{ old('video_caption') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Order</label>
                            <input type="text" name="video_order" class="form-control"
                                value="{{ old('video_order', '0') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            <select required type="text" name="category_id" class="form-control"
                                value="{{ old('category_id') }}">
                                @if (count($categories) != 0) 
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @else
                                    <option>Category Not Found!</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection
