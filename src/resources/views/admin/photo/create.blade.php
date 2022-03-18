@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Photo</h1>

    <form action="{{ route('admin.photo.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Photo</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.photo.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>
                        View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Photo *</label><br>
                    <img id="photo_preview_image" src="" alt="" class="w_300"><br><br>
                    <div>
                        <input required type="file" id="photo_name" name="photo_name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="form-group">
                            <label for="">Caption *</label>
                            <input type="text" name="photo_caption" class="form-control"
                                value="{{ old('photo_caption') }}" autofocus>
                        </div> --}}
                        <div class="form-group">
                            <label for="">Order</label>
                            <input type="text" name="photo_order" class="form-control"
                                value="{{ old('photo_order', '0') }}">
                        </div>
                        <div class="form-group">
                            <label for="">Category *</label>
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

    <script>
        photo_name.onchange = (event) => {
            const [file] = photo_name.files
            if (file) {
                photo_preview_image.src = URL.createObjectURL(file)
            }
            photo_name.onload = () => {
                URL.revokeObjectURL(photo_preview_image.src)
            }
        }
    </script>

@endsection
