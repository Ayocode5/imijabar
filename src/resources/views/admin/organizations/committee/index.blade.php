@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Committee Members</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Members</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.organizations.committee.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($team_member as $committee)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('uploads/'.$committee->photo) }}" alt="" class="w_150"></td>
                            <td>{{ $committee->name }}</td>
                            <td>{{ $committee->designation }}</td>
                            <td style="display: flex; flex-direction: row; flex: 50%;">
                                <a href="{{ route("admin.organizations.committee.edit", $committee->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
{{--                                <a  href="{{ route("admin.organizations.committee.destroy",$committee->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>--}}
                                <form action="{{ route("admin.organizations.committee.destroy", $committee->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button class="ml-2 btn btn-danger btn-sm" type="submit" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
