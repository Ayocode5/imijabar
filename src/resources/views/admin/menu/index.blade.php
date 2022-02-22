@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Menus</h1>

    <form action="{{ url('admin/menu/update') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">View Menus</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Menu Name</th>
                                    <th>Menu Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($menus as $row)
                                    <input type="hidden" name="menu_id[]" value="{{ $row->id }}">
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <select name="status[]" class="form-control">
                                                <option value="1" @if($row->status ==  1) selected @endif>Show</option>
                                                <option value="0" @if($row->status ==  0) selected @endif>Hide</option>
                                            </select>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        
@endsection