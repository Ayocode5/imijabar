@extends('admin.admin_layouts')
@section('admin_content')

    <h1 class="h3 mb-3 text-gray-800">Setup Roles for {{ $attachedPermissionsRole->name }}</h1>

    <form action="{{ url('admin/role/access-setup-update/'.$attachedPermissionsRole->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Setup Roles for {{ $attachedPermissionsRole->name }}</h6>
                        <div class="float-right d-inline">
                            <a href="{{ route('admin.role.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <input class="permission-select-all" type="checkbox" name="select-all-permission" id="selectAll">
                            <label for="selectAll">Select All</label>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>{{ str_replace('-', ' ', $permission->name) }} <input class="permission-item" name="input[]" type="checkbox" value="{{$permission->id}}" @if (in_array($permission->id, $attachedPermissionsRole->permissions->pluck('id')->toArray())) checked @endif></td>
                                </tr>
                            @endforeach

                        </table>

                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
