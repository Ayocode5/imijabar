@extends('admin.admin_layouts')

@section('admin_content')
    <div class="pdf-export-result-wrapper" id="pdf-export-result-wrapper"></div>

    <h1 class="h3 mb-3 text-gray-800">All Registrar</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Event Organizer</h6>
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
                            <th>Nama Event</th>
                            <th>Email</th>
                            {{-- <th>Status</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrars as $registrar)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $registrar->nama_event }}</td>
                                <td>{{ $registrar->email }}</td>
                                {{-- <td></td> --}}
                                <td>
                                    <button
                                        export-url="{{ url('admin/registration/event/registrant/' . $registrar->id . '/export') }}"
                                        class="btn btn-danger export btn-sm"><i class="fas fa-file-pdf"></i> Export</button>
                                    {{-- <a href="{{ url('admin/registration/event/registrant/' . $registrar->id . '/export') }}"
                                        class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i>&nbsp; Export to
                                        PDF</a> --}}
                                    {{-- <a href="" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i
                                            class="fas fa-trash-alt"></i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
