@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Create Greeting</h1>

    <form action="{{ route("admin.organizations.greeting.store") }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Committee Greeting</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.organizations.greeting.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <img id="greeting_preview_image" src="" alt="" class="w_300">
                <div class="form-group">
                    <label for="">Select Image *</label><br>
                    <input type="file" id="image" name="image" value="{{ old('image') }}"  required autofocus>
                </div>
                <div class="form-group">
                    <label for="name">Order *</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="number" min="0" placeholder="enter number" name="order"  required class="col-12 col-md-7 form-control name_sports_show" value="{{ old("order") }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select required name="show" class="form-control">
                        <option value="1" >Show</option>
                        <option value="0" >Hide</option>
                    </select>
                </div>

            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-success btn_update_sport">Create</button>
            </div>
        </div>
    </form>

    <script>
        image.onchange = (event) => {
            const [file] = image.files
            if (file) {
                greeting_preview_image.src = URL.createObjectURL(file)
            }
            greeting_preview_image.onload = () => {
                URL.revokeObjectURL(greeting_preview_image.src)
            }
        }
    </script>

@endsection
