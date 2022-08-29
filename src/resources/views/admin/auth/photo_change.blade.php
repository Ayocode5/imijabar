@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Photo</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('admin/photo-change/update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="current_photo" value="{{ $admin_data->photo }}">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Photo</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Existing Photo *</label>
                            <div>
                                <img id="photo_preview" src="{{ asset('uploads/users/'.$admin_data->photo) }}" alt="" class="w_150">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Change Photo *</label>
                            <div><input id="photo" type="file" name="photo"></div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        photo.onchange = (event) => {
            const [file] = photo.files
            if (file) {
                photo_preview.src = URL.createObjectURL(file)
            }
            photo_preview.onload = () => {
                URL.revokeObjectURL(photo_preview.src)
            }
        }
    </script>

@endsection
