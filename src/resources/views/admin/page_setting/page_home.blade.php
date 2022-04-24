@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Home Page Information</h1>
    
    <div class="card shadow mb-4 t-left">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Meta Information</a>
                        <a class="nav-link" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false">Jumbotron Section</a>
                        <a class="nav-link" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">News Section</a>
                        <a class="nav-link" id="v-pills-13-tab" data-toggle="pill" href="#v-pills-13" role="tab" aria-controls="v-pills-13" aria-selected="false">Events Section</a>
                        <a class="nav-link" id="v-pills-14-tab" data-toggle="pill" href="#v-pills-14" role="tab" aria-controls="v-pills-14" aria-selected="false">About Section</a>
                        <a class="nav-link" id="v-pills-15-tab" data-toggle="pill" href="#v-pills-15" role="tab" aria-controls="v-pills-15" aria-selected="false">Gallery Section</a>
                        <a class="nav-link" id="v-pills-16-tab" data-toggle="pill" href="#v-pills-16" role="tab" aria-controls="v-pills-16" aria-selected="false">Committee Section</a>
                        <a class="nav-link" id="v-pills-17-tab" data-toggle="pill" href="#v-pills-17" role="tab" aria-controls="v-pills-17" aria-selected="false">Newsletter Section</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        {{-- Meta Descriptions --}}
                        <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">

                            <!-- Tab 1 -->
                            <form action="{{ url('admin/page/home/metadata') }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="seo_title" class="form-control" value="{{ $page_home?->seo_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Meta Description</label>
                                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $page_home?->seo_meta_description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                            <!-- // Tab 1 -->

                        </div>

                        {{-- Jumbotron Section Form --}}
                        <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
                            <!-- Tab 10 -->
                            <form action="{{ url('admin/page/home/jumbotron') }}" method="POST" enctype="multipart/form-data">

                                @method('PATCH')
                                <input type="hidden" name="current_bg" value="{{ $page_home?->jumbotron_bg }}">
                                <input type="hidden" name="current_icon" value="{{ $page_home?->jumbotron_icon }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="jumbotron_title" class="form-control" value="{{ $page_home?->jumbotron_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Details</label>
                                    <textarea name="jumbotron_detail" class="form-control h_100" cols="30" rows="10">{{ $page_home?->jumbotron_detail }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Icon</label>
                                    <div><img src="{{ asset('uploads/'.$page_home?->jumbotron_icon) }}" alt="" class="w_200"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Change Icon</label>
                                    <div><input type="file" name="jumbotron_icon"></div>
                                </div>

                                <div class="form-group">
                                    <label for="">Banner</label>
                                    <div><img src="{{ asset('uploads/'.$page_home?->jumbotron_bg) }}" alt="" class="w_200"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Change Banner</label>
                                    <div><input type="file" name="jumbotron_bg"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="jumbotron_status" class="form-control">
                                        <option value="1" type="number" @if ($page_home?->jumbotron_status == 1)
                                            selected
                                        @endif>Show</option>
                                        <option value="0" type="number" @if ($page_home?->jumbotron_status == 0)
                                            selected
                                        @endif>Hide</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>

                        {{-- News Section Form --}}
                        <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
                            <!-- Tab 10 -->
                            <form action="{{ url('admin/page/home/news') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="news_title" class="form-control" value="{{ $page_home?->news_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Total News</label>
                                    <input type="number" name="news_total" class="form-control" value="{{ $page_home?->news_total }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="news_status" class="form-control">
                                        <option value="1" @if ($page_home?->news_status == 1)
                                            selected
                                        @endif>Show</option>
                                        <option value="0"  @if ($page_home?->news_status == 0)
                                            selected
                                        @endif>Hide</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>

                        {{-- Events Section Form --}}
                        <div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">
                            <form action="{{ url('admin/page/home/events') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="events_title" class="form-control" value="{{ $page_home?->events_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Total Events</label>
                                    <input type="number" name="events_total" class="form-control" value="{{ $page_home?->events_total }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="events_status" class="form-control">
                                        <option value="1" @if ($page_home?->events_status == 1)
                                            selected
                                        @endif>Show</option>
                                        <option value="0"  @if ($page_home?->events_status == 0)
                                            selected
                                        @endif>Hide</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>

                        {{-- About Section Form --}}
                        <div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">
                            <form action="{{ url('admin/page/home/about') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="about_title" class="form-control" value="{{ $page_home?->about_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Details</label>
                                    <textarea name="about_detail" class="form-control editor h_100" cols="30" rows="10" >{{ $page_home->about_detail }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="about_status" class="form-control">
                                        <option value="1" @if ($page_home?->about_status == 1)
                                            selected
                                        @endif>Show</option>
                                        <option value="0"  @if ($page_home?->about_status == 0)
                                            selected
                                        @endif>Hide</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>

                        {{-- Gallery Section Form --}}
                        <div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">
                            <form action="{{ url('admin/page/home/gallery') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="gallery_title" class="form-control" value="{{ $page_home?->gallery_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Details</label>
                                    <textarea name="gallery_detail" class="form-control h_100" cols="30" rows="10" >{{ $page_home?->gallery_detail }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="gallery_status" class="form-control">
                                        <option value="1" @if ($page_home?->gallery_status == 1)
                                            selected
                                        @endif>Show</option>
                                        <option value="0"  @if ($page_home?->gallery_status == 0)
                                            selected
                                        @endif>Hide</option>
                                    </select>
                                </div>
                                
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>

                        {{-- Committee Section Form --}}
                        <div class="tab-pane fade" id="v-pills-16" role="tabpanel" aria-labelledby="v-pills-16-tab">
                            <form action="{{ url('admin/page/home/committee') }}" method="post">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="committee_title" class="form-control" value="{{ $page_home?->committee_title }}">
                                </div>

                                <div class="form-group">
                                    <label for="">Details</label>
                                    <textarea name="committee_detail" class="form-control h_100" cols="30" rows="10">{{ $page_home?->committee_detail }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="committee_status" class="form-control">
                                        <option value="1" @if ($page_home?->committee_status == 1)
                                            selected
                                        @endif>Show</option>
                                        <option value="0" @if ($page_home?->committee_status == 0)
                                            selected
                                        @endif>Hide</option>
                                    </select>
                                </div>

                                
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>

                        {{-- Newsletter Section Form --}}
                        <div class="tab-pane fade" id="v-pills-17" role="tabpanel" aria-labelledby="v-pills-17-tab">
                            <!-- Tab 17 -->
                            <form action="{{ url('admin/page/home/newsletter') }}" method="post" enctype="multipart/form-data">
                                @method('PATCH')
                                <input type="hidden" name="current_photo" value="{{ $page_home?->newsletter_bg }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="newsletter_title" class="form-control" value="{{ $page_home?->newsletter_title }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Details</label>
                                    <textarea name="newsletter_detail" class="form-control h_100" cols="30" rows="10">{{ $page_home?->newsletter_detail }}</textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="">Icon</label>
                                    <div><img src="{{ asset('uploads/'.$page_home?->newsletter_bg) }}" alt="" class="w_200"></div>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label for="">Change Banner</label>
                                    <div><input type="file" name="newsletter_bg"></div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="newsletter_status" class="form-control">
                                        <option value="1" @if ($page_home?->newsletter_status == 1)
                                            selected
                                        @endif>Show</option>
                                        <option value="0"  @if ($page_home?->newsletter_status == 0)
                                            selected
                                        @endif>Hide</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        favicon.onchange = (event) => {
            const [file] = favicon.files
            if (file) {
                favicon_preview.src = URL.createObjectURL(file)
            }
            favicon_preview.onload = () => {
                URL.revokeObjectURL(favicon_preview.src)
            }
        }
    </script> --}}

@endsection