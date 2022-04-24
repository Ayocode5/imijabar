@extends('admin.admin_layouts')

@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">All Registrar</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">KIS</h6>
            <div class="float-right d-inline">
                <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>No. KTA</th>
                        <th>No. Kartu Identitas</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($registrars as $registrar)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $registrar->nama }}</td>
                            <td>{{ $registrar->email }}</td>
                            <td>{{ $registrar->nomor_kta }}</td>
                            <td>{{ $registrar->nomor_kartu_identitas }}</td>
                            <td>
                                <a href="{{ url('admin/registration/kis/registrant/' . $registrar->id . '/export') }}" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i> Export to PDF</a>
                                {{-- <a href="#" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a> --}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
