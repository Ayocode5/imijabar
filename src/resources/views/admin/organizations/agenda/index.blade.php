@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">All Agenda</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Internal Agenda</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.organizations.agenda.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($agendas) > 0)
                        @foreach($agendas as $agenda)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $agenda->name }}</td>
                                <td>{{ Illuminate\Support\Carbon::parse($agenda->date)->format("d/M/Y h:m") }}</td>
                                <td>{!! $agenda->description !!}</td>
                                <td style="display: flex; flex-direction: row; flex: 50%;">
                                    <a href="{{ route("admin.organizations.agenda.edit", $agenda->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route("admin.organizations.agenda.destroy", $agenda->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button class="ml-2 btn btn-danger btn-sm" type="submit" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></button>
                                    </form>
{{--                                    <a href="{{ route("advertisement.destroy", $agenda->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>--}}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
