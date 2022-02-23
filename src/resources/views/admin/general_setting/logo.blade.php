@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Logo</h1>

    <form action="{{ url('admin/setting/general/logo/update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="current_photo" value="{{ $general_setting->logo ?? '' }}">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Existing Logo</label>
                    <div>
                        <img id="logo_preview" src="{{ asset('uploads/'.($general_setting->logo ?? '')) }}" alt="" class="w_200">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Logo</label>
                    <div>
                        <input id="logo" type="file" name="logo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

    <script>
        logo.onchange = (event) => {
            const [file] = logo.files
            if (file) {
                logo_preview.src = URL.createObjectURL(file)
            }
            logo_preview.onload = () => {
                URL.revokeObjectURL(logo_preview.src)
            }
        }
    </script>

@endsection