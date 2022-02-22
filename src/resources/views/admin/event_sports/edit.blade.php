@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Sport</h1>

    <form action="{{ url('admin/event/sport/update/' . $sport->id) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Sport</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event_sport.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name *</label>
                    
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        {{-- <input type="text" name="name" class="col-12 col-md-7 form-control name_sports_show"
                            value="{{ $sport->name }}" autofocus> --}}

                        <input type="text" hidden name="name" class="col-12 col-md-7 form-control true_name_sports" value="{{ $sport->name }}" autofocus>

                        <input type="text" name="name_sports" class="col-12 col-md-7 form-control name_sports_show" value="{{ $sport->name }}" autofocus>

                        @foreach ($categories as $category)
                            @if ($category->id == $sport->category->id)
                                <input readonly type="text" name="category-sports" class="col-12 col-md-4 form-control name_category_sports" value="{{ $category->name }}">
                            @endif
                        @endforeach
          
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Current Image</label>
                    <div>
                        <img id="sport_preview_image" src="{{ asset('public/uploads/' . $sport->image) }}" alt=""
                            class="w_300">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Change Image *</label><br>
                    <input type="file" id="image" name="image" value="{{ old('image') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Category *</label><br>
                    <select required name="category_id" id="category_id" class="selectpicker">
                        @if (count($categories) < 0)
                            <option value="">No Event Category available</option>
                        @else
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id == $sport->category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $sport->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30"
                        rows="10">{{ $sport->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success btn_update_sport">Update</button>
            </div>
        </div>
    </form>

    <script>
        let valNameSports;

        document.querySelector('.name_sports_show').value = document.querySelector('.name_sports_show').value.split(' - ')[0];
        // $('.name_sports_show').val($('.name_sports_show').val().split(' - ')[0]);
        // console.log($('.name_sports_show').val().split(' - ')[0]);

        document.querySelector('.name_sports_show').addEventListener('change', () => {
            valNameSports = document.querySelector('.name_sports_show').value;
            document.querySelector('.true_name_sports').value = valNameSports + ' - ' + document.querySelector('.name_category_sports').value;
        });
        // $('.name_sports_show').change(() => {
        //     valNameSports = $('.name_sports_show').val();
        //     $('.true_name_sports').val(valNameSports + ' - ' + $('.name_category_sports').val());
        // });

        document.querySelector('.selectpicker').addEventListener('change', () => {
            document.querySelector('.name_category_sports').value = document.querySelector('.selectpicker')[document.querySelector('.selectpicker').selectedIndex].innerHTML;
            console.log(document.querySelector('.selectpicker')[document.querySelector('.selectpicker').selectedIndex].textContent)
            document.querySelector('.true_name_sports').value = document.querySelector('.name_sports_show').value + ' - ' + document.querySelector('.name_category_sports').value;
        })
        // $('.selectpicker').change(() => {
        //     $('.name_category_sports').val($('.selectpicker option:selected').text());
        //     $('.true_name_sports').val($('.name_sports_show').val() + ' - ' + $('.name_category_sports').val());
        // })
        document.querySelector('.btn_update_sport').addEventListener('click', () => {
            document.querySelector('.true_name_sports').value = document.querySelector('.name_sports_show').value + ' - ' + document.querySelector('.selectpicker')[document.querySelector('.selectpicker').selectedIndex].innerHTML;
        })
        // $('.btn_update_sport').click(() => {
        //     $('.true_name_sports').val($('.name_sports_show').val() + ' - ' + $('.selectpicker option:selected').text());
        // })


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
