@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit About Page Information</h1>

    <form action="{{ url('admin/page/about/update') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $page_about?->title }}">
                </div>
                <div class="form-group">
                    <label for="">Subtitle</label>
                    <textarea name="subtitle" class="form-control editor">{{ $page_about?->subtitle }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" class="form-control editor" cols="30"
                        rows="10">{{ $page_about->detail }}</textarea>
                </div>

                {{-- Heading & Body --}}
                @foreach (range(1, 11) as $num)
                    <div class="form-group">
                        <label for="">Heading {{ $num }}</label>
                        <input type="text" name="heading{{ $num }}" class="form-control"
                            value="{{ $page_about?->{"heading$num"} }}">
                    </div>
                    <div class="form-group">
                        <label for="">Body {{ $num }}</label>
                        <textarea name="body{{ $num }}"
                            class="form-control editor">{{ $page_about?->{"body$num"} }}</textarea>
                    </div>
                @endforeach

                {{-- Banner --}}
                {{-- @foreach (range(1, 3) as $banner)
                    <div class="form-group">
                        <label for="">Existing Banner {{ $banner }}</label>
                        <div><img src="{{ asset('public/uploads/' . $page_about?->{"about-banner-$banner.png"}) }}" alt=""
                                class="w_200"></div>
                    </div>
                    <div class="form-group">
                        <label for="">Change Banner</label>
                        <div><input type="file" name="banner-{{$banner}}"></div>
                    </div>
                @endforeach --}}

                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" @if ($page_about?->status == 1)
                            selected
                            @endif>Show</option>
                        <option value="0" @if ($page_about?->status == 0)
                            selected
                            @endif>Hide</option>
                    </select>
                </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $page_about->seo_title }}">
                </div>
                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30"
                        rows="10">{{ $page_about->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
