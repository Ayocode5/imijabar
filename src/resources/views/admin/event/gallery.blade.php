@extends('admin.admin_layouts')
@section('admin_content')

    @php
    $event_row = DB::table('events')->where('id', $event_id)->first();
    @endphp

    <h1 class="h3 mb-3 text-gray-800">Gallery of {{ $event_row->event_name }}</h1>
    <form action="{{ route('admin.event.gallery-store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <input type="hidden" name="event_id" value="{{ $event_id }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Project Photo</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.event.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Back to Project Page</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Caption</label>
                    <input type="text" name="event_photo_caption" class="form-control" value="{{ old('event_photo_caption') }}">
                </div>
                <div class="form-group">
                    <label for="">Featured Photo *</label>
                    <div>
                        <input type="file" name="event_photo">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">All Existing Photos</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.event.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Back to Project Page</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Photo</th>
                        <th>Caption</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($event_photo as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('public/uploads/'.$row->event_photo) }}" alt="" class="w_200"></td>
                            <td>{{ $row->event_photo_caption }}</td>
                            <td>
                                <a href="{{ URL::to('admin/event/gallery-delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
