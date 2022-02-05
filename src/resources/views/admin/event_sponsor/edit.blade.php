@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Sponsor</h1>

    <form action="{{ url('admin/event/sponsor/update/' . $sponsor->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Sponsor</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event_sponsor.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name *</label>
                    <input type="text" name="name" class="form-control" value="{{ $sponsor->name }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Current Image</label>
                    <div>
                        <img id="sponsor_preview_image" src="{{ asset('public/uploads/'. $sponsor->image) }}" alt="" class="w_300">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Image *</label><br>
                    <input type="file" id="image" name="image" value="{{ old('image') }}" autofocus>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $sponsor->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30"
                        rows="10">{{ $sponsor->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

    <script>
        image.onchange = (event) => {
            const [file] = image.files
            if (file) {
                sponsor_preview_image.src = URL.createObjectURL(file)
            }
            sponsor_preview_image.onload = () => {
                URL.revokeObjectURL(sponsor_preview_image.src)
            }
        }
    </script>

@endsection
