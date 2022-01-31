@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Event</h1>

    <form action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Event</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input type="text" name="event_name" class="form-control" value="{{ old('event_name') }}" autofocus>
                </div>
                {{-- <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" name="event_slug" class="form-control" value="{{ old('event_slug') }}" autofocus>
                </div> --}}
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="event_content" class="form-control editor" cols="30"
                        rows="10">{{ old('event_content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Content (Short)</label>
                    <textarea name="event_content_short" class="form-control h_100" cols="30"
                        rows="10">{{ old('event_content_short') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Event Start Date</label>
                    <input type="date" name="event_start_date" class="form-control"
                        value="{{ old('event_start_date') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Event End Date</label>
                    <input type="date" name="event_end_date" class="form-control" value="{{ old('event_end_date') }}"
                        autofocus>
                </div>
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" name="event_location" class="form-control" value="{{ old('event_location') }}"
                        autofocus>
                </div>
                <div class="form-group">
                    <label for="">Location Map</label>
                    <input type="text" name="event_map" class="form-control"
                        value="{{ old('event_map') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Video (YouTube ID)</label>
                    <input type="text" name="event_video" class="form-control" value="{{ old('event_video') }}"
                        autofocus>
                </div>

                <div class="form-group">
                    <label for="">Sports</label>
                    @if (count($sports) <= 0)
                        <select class="form-control" disabled>
                            <option value="">There is no Sports available, Create first</option>
                        </select>
                    @else
                    <select name="sports_id[]" id="sports_id" class="form-control selectpicker" multiple="multiple" autofocus>
                        @foreach ($sports as $sport)
                            <option value={{ $sport->id }}>{{ $sport->name }}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
                
                  
                <div class="form-group">
                    <label for="">Featured Photo</label>
                    <div>
                        <input type="file" name="event_featured_photo" id="event_featured_photo">
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
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30"
                        rows="10">{{ old('seo_meta_description') }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
@endsection
