@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Event</h1>

    <form action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Event</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input required type="text" name="event_name" class="form-control" value="{{ old('event_name') }}"
                        autofocus>
                </div>

                <div class="form-group">
                    <label for="organizer-create-event">Event Organizer *</label>
                    <input id="organizer-create-event" required type="text" name="event_organizer" class="form-control"
                        value="{{ old('event_organizer') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Content *</label>
                    <textarea required name="event_content" class="form-control editor" cols="30"
                        rows="10">{{ old('event_content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Summary *</label>
                    <textarea required name="event_content_short" class="form-control" cols="30"
                        rows="10">{{ old('event_content_short') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Start Date *</label>
                    <input required type="date" name="event_start_date" class="form-control"
                        value="{{ old('event_start_date') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">End Date *</label>
                    <input required type="date" placeholder="dd-mm-yyyy" name="event_end_date" class="form-control"
                        value="{{ old('event_end_date') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Address *</label>
                    <input required type="text" name="event_location" class="form-control"
                        value="{{ old('event_location') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">City *</label>
                    <input required type="text" name="event_location_city" class="form-control"
                        value="{{ old('event_location_city') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Province *</label>
                    <input required type="text" name="event_location_province" class="form-control"
                        value="{{ old('event_location_province') }}" autofocus>
                </div>
                {{-- <div class="form-group">
                    <label for="">Maps (Optional)</label>
                    <input type="text" name="event_map" class="form-control" value="{{ old('event_map') }}" autofocus>
                </div> --}}
                {{-- <div class="form-group">
                    <label for="">Video (YouTube ID) - (Optional)</label>
                    <input type="text" name="event_video" class="form-control" value="{{ old('event_video') }}"
                        autofocus>
                </div> --}}
                <div class="form-group">
                    <label for="">Registration Link (Optional)</label>
                    <input type="text" name="event_link" class="form-control" value="{{ old('event_link') }}"
                        autofocus>
                </div>
                <div class="form-group">
                    <label for="">Document Link 1 - Surat Rekomendasi (Optional)</label>
                    <input type="text" name="event_document_link" class="form-control"
                        value="{{ old("event_document_link") }}" placeholder="example: https://www.document/docuement1.pdf" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Document Link 2 - Hasil Lomba (Optional)</label>
                    <input type="text" name="event_document_link2" class="form-control"
                           value="{{ old('event_document_link2') }}" placeholder="example: https://www.document/docuement1.pdf" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Sports *</label>
                    @if (count($sports) <= 0)
                        <select class="form-control" disabled>
                            <option value="">There is no Sports available, Create first</option>
                        </select>
                    @else
                        <select required name="sports_id[]" id="sports_id" class="form-control selectpicker"
                            multiple="multiple" autofocus>
                            @foreach ($sports as $sport)
                                <option value={{ $sport->id }}>{{ $sport->name }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>

                <div class="form-group">
                    <label for="">Sponsor (Optional)</label>
                    @if (count($sponsors) <= 0)
                        <select class="form-control" disabled>
                            <option value="">There is no Sponsor available, Create first</option>
                        </select>
                    @else
                        <select name="sponsors_id[]" id="sponsors_id" class="form-control selectpicker"
                            multiple="multiple" autofocus>
                            @foreach ($sponsors as $sponsor)
                                <option value={{ $sponsor->id }}>{{ $sponsor->name }}</option>
                            @endforeach
                        </select>
                    @endif
                </div>

                <div class="form-group">
                    <div>
                        <img id="event_preview_image" src="" alt="" class="w_300">
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Add Banner * (Max: 2MB)</label>
                    <div>
                        <input required type="file" name="event_featured_photo" id="event_featured_photo" value="{{ old("event_featured_photo") }}">
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
