@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Ads</h1>

    <form action="{{ route("admin.advertisement.update", $ads->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        @method("PATCH")
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Advertisement</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.advertisement.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Current Image</label>
                    <div>
                        <img id="ads_preview_image" src="{{ asset("uploads/advertisements/$ads->image")  }}" alt=""
                             class="w_300">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Image</label><br>
                    <input type="file" id="image" name="image" value="{{ old('image') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="name">Redirect URL *</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="text" placeholder="www.some-url.com" name="redirect_url" class="col-12 col-md-7 form-control name_sports_show" value="{{ $ads->redirect_url }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Order *</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="number" min="0" name="order" class="col-12 col-md-7 form-control name_sports_show" value="{{ $ads->order }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="show" class="form-control">
                        <option value="1" @if ($ads->show == 1)
                        selected
                            @endif>Show</option>
                        <option value="0"  @if ($ads->show == 0)
                        selected
                            @endif>Hide</option>
                    </select>
                </div>

            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-success btn_update_sport">Update</button>
            </div>
        </div>
    </form>

    <script>
        image.onchange = (event) => {
            const [file] = image.files
            if (file) {
                ads_preview_image.src = URL.createObjectURL(file)
            }
            ads_preview_image.onload = () => {
                URL.revokeObjectURL(ads_preview_image.src)
            }
        }
    </script>

@endsection
