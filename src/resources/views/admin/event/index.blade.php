@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Events</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Events</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.event.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Featured Photo</th>
                        <th>Event Name</th>
                        <th>Sport</th>
                        <th>Category</th>
                        <th>Manage Gallery</th>
                        <th>Event Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('public/uploads/'.$event->featured_photo) }}" alt="" class="w_200"></td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->sports}}</td>
                            <td>{{ $event->categories}}</td>
                            <td>
                                <a href="{{ URL::to('admin/event/gallery/'.$event->id) }}" class="btn btn-success btn-sm">Manage Gallery</a>
                            </td>
                            <td>{{$event->status}}</td>
                            <td>
                                <a href="{{ URL::to('admin/event/edit/'.$event->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ URL::to('admin/event/delete/'.$event->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
