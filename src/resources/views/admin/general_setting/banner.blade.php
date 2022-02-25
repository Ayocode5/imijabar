@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Banner</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Default Home Page Banner</h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/setting/general/banner/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="current_photo" value="{{ $general_setting->banner_home }}">
                        <div class="form-group">
                            <label for="">Existing Banner</label>
                            <div>
                                <img id="banner_home_preview" src="{{ asset('uploads/'.$general_setting->banner_home) }}" alt="" class="w_200">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Change Banner</label>
                            <div>
                                <input id="banner_home" type="file" name="banner_home">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">About Page Banner</h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/setting/general/banner/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="current_photo" value="{{ $general_setting->banner_about }}">
                        <div class="form-group">
                            <label for="">Existing Banner</label>
                            <div>
                                <img src="{{ asset('uploads/'.$general_setting->banner_about) }}" alt="" class="w_200">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Change Banner</label>
                            <div>
                                <input type="file" name="banner_about">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div> --}}

        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Default News Page Banner</h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/setting/general/banner/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="current_photo" value="{{ $general_setting->banner_news }}">
                        <div class="form-group">
                            <label for="">Existing Banner</label>
                            <div>
                                <img id="banner_news_preview" src="{{ asset('uploads/'.$general_setting->banner_news) }}" alt="" class="w_200">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Change Banner</label>
                            <div>
                                <input id="banner_news" type="file" name="banner_news">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Default Event Page Banner</h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/setting/general/banner/update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="current_photo" value="{{ $general_setting->banner_event }}">
                        <div class="form-group">
                            <label for="">Existing Banner</label>
                            <div>
                                <img id="banner_event_preview" src="{{ asset('uploads/'.$general_setting->banner_event) }}" alt="" class="w_200">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Change Banner</label>
                            <div>
                                <input id="banner_event" type="file" name="banner_event">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        banner_home.onchange = (event) => {
            const [file] = banner_home.files
            if (file) {
                banner_home_preview.src = URL.createObjectURL(file)
            }
            banner_home_preview.onload = () => {
                URL.revokeObjectURL(banner_home_preview.src)
            }
        }

        banner_news.onchange = (event) => {
            const [file] = banner_news.files
            if (file) {
                banner_news_preview.src = URL.createObjectURL(file)
            }
            banner_news_preview.onload = () => {
                URL.revokeObjectURL(banner_news_preview.src)
            }
        }

        banner_event.onchange = (event) => {
            const [file] = banner_event.files
            if (file) {
                banner_event_preview.src = URL.createObjectURL(file)
            }
            banner_event_preview.onload = () => {
                URL.revokeObjectURL(banner_event_preview.src)
            }
        }
    </script>
    
@endsection