@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Sports</h1>

    <form action="{{ route('admin.event_sport.store') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Sports</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event_sport.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input required type="text" name="name" class="col-12 col-md-7 form-control name_sports" value="{{ old('name') }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Image *</label><br>
                    <img id="sport_preview_image" src="" alt="" class="w_300"><br><br>
                    <input required type="file" name="image" id="image" value="{{ old('image') }}" autofocus>
                </div>
                <div class="form-group">
                    
                    <label for="category_id">Category *</label><br>
                    <select required name="category_id" id="category_id" class="selectpicker">
                        <option style="display: none" value disabled selected>select categrory</option>
                        @if (count($categories) < 0)
                            <option value="">No Event Category available</option>
                        @endif
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
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
                <button type="submit" class="btn btn-success btn_create_sport">Submit</button>
            </div>
        </div>
    </form>

    <script>

        let valNameSports;
        $('.name_sports').val('');

        $('.name_sports').change(() => {
            valNameSports = $('.name_sports').val();
            $('.true_name_sports').val(valNameSports);
        });


        $('.selectpicker').change(() => {
            $('.name_category_sports').val($('.selectpicker option:selected').text());
            $('.true_name_sports').val(valNameSports + ' - ' + $('.selectpicker option:selected').text());

        })
        
        $('.btn_create_sport').click(() => {
            $('.true_name_sports').val(valNameSports + ' - ' + $('.selectpicker option:selected').text());
        });


        image.onchange = (event) => {
            const [file] = image.files
            if (file) {
                sport_preview_image.src = URL.createObjectURL(file)
            }
            sport_preview_image.onload = () => {
                URL.revokeObjectURL(sport_preview_image.src)
            }
        }
    </script>
@endsection
