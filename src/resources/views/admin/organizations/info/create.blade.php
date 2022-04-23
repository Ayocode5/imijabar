@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Create Info</h1>

    <form action="{{ route("admin.organizations.info.store") }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Informations</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.organizations.info.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <input hidden type="text" name="type" value="activity" id="type">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Title</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input placeholder="Info Title" type="text" name="name" class="col-12 col-md-7 form-control name_sports_show" value="{{ old("name") }}" autofocus>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="name">Date</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input  type="datetime-local" name="date" class="col-12 col-md-7 form-control name_sports_show" value="{{ old("date") }}" autofocus>
                    </div>
                </div> --}}
                <div class="form-group">
                    <label for="name">Description</label>
                    <textarea required name="description" class="form-control editor" cols="30"
                        rows="10">{{ old('description') }}</textarea>
                </div>
                

            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-success btn_update_sport">Create</button>
            </div>
        </div>
    </form>

    {{-- <script>
        image.onchange = (event) => {
            const [file] = image.files
            if (file) {
                ads_preview_image.src = URL.createObjectURL(file)
            }
            ads_preview_image.onload = () => {
                URL.revokeObjectURL(ads_preview_image.src)
            }
        }
    </script> --}}

@endsection
