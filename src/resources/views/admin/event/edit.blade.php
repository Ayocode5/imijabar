@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Event</h1>

    <form action="{{ url('admin/event/update/'.$event->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Event</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="event_name" class="form-control" value="{{ $event->event_name }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Event Organizer</label>
                    <input type="text" name="event_organizer" class="form-control" value="{{ $event->event_organizer }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="event_content" class="form-control editor" cols="30" rows="10">{{ $event->event_content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Summary</label>
                    <textarea name="event_content_short" class="form-control h_100" cols="30" rows="10">{{ $event->event_content_short }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Start Date</label>
                    <input type="date" name="event_start_date" class="form-control" value="{{ $event->event_start_date }}">
                </div>
                <div class="form-group">
                    <label for="">End Date</label>
                    <input type="date" name="event_end_date" class="form-control" value="{{ $event->event_end_date }}">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" name="event_location" class="form-control" value="{{ $event->event_location }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" name="event_location_city" class="form-control" value="{{ $event->event_location_city }}"
                        autofocus>
                </div>
                <div class="form-group">
                    <label for="">Province</label>
                    <input type="text" name="event_location_province" class="form-control" value="{{ $event->event_location_province }}"
                        autofocus>
                </div>
                <div class="form-group">
                    <label for="">Maps (Optional)</label>
                    <input type="text" name="event_location_map" class="form-control" value="{{ $event->event_map }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Video (YouTube ID) - (Optional)</label>
                    <input type="text" name="event_video" class="form-control" value="{{ $event->event_video }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Registration Link (Optional) </label>
                    <input type="text" name="event_url" class="form-control"
                        value="{{ $event->event_url }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Current Image</label>
                    <div>
                        <img id="event_preview_image" src="{{ asset('public/uploads/'.$event->event_featured_photo) }}" alt="" class="w_300">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Image (Max: 2MB)</label>
                    <div>
                        <input type="file" id="event_featured_photo" name="event_featured_photo">
                    </div>
                </div>
                <div class="form-group">
                    {{-- {{ dd($event->sports->pluck('id')) }} --}}
                    <label for="">Current Sports</label>
                    @if (count($sports) <= 0)
                        <select class="form-control" disabled>
                            <option value="">There is no Sports available, Create first</option>
                        </select>
                    @else
                    <select name="sports_id[]" id="sports_id" class="form-control selectpicker" multiple="multiple" autofocus>
                        @foreach ($sports as $sport)
                            <option value={{ $sport->id }} @if (in_array($sport->id, $event->sports->pluck('id')->toArray()))
                                selected
                            @endif>{{ $sport->name }}</option>
                        @endforeach
                    </select>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Current Sponsors (Optional)</label>
                    @if (count($sponsors) <= 0)
                        <select class="form-control" disabled>
                            <option value="">There is no Sponsors available, Create first</option>
                        </select>
                    @else
                    <select name="sponsors_id[]" id="sponsors_id" class="form-control selectpicker" multiple="multiple" autofocus>
                        @foreach ($sponsors as $sponsor)
                            <option value={{ $sponsor->id }} @if (in_array($sponsor->id, $event->sponsors->pluck('id')->toArray()))
                                selected
                            @endif>{{ $sponsor->name }}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $event->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $event->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

    <script>

        event_featured_photo.onchange = (event) => {
            const [file] = event_featured_photo.files
            if (file) {
                event_preview_image.src = URL.createObjectURL(file)
            }
            event_preview_image.onload = () => {
                URL.revokeObjectURL(event_preview_image.src)
            }
        }
    </script>
@endsection