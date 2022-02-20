@extends('admin.admin_layouts')

@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">All Club</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Club</h6>
            <div class="float-right d-inline">
                <a target="_blank" href="https://docs.google.com/spreadsheets/d/{{ $spreadsheet_id }}/view" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View on G-Sheet</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Total Member</th>
                        <th>Status</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($values as $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value['Nama Club'] }}</td>
                            <td>{{ $value['Total Member'] }}</td>
                            <td></td>
                            {{-- <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection