@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Create Motor/Mobil/Mobility</h1>

    <form action="{{ route("admin.communities.store") }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Communities</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.communities.index') }}" class="btn btn-primary btn-sm"><i
                            class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <img id="ads_preview_image" src="" alt="" class="w_300">
                <div class="form-group">
                    <label for="">Nama Club *</label><br>
                    <input type="text" class="col-12 col-md-7 form-control" id="club_name" name="club_name" value="{{ old('club_name') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="name">Ketua *</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="text" name="club_leader" class="col-12 col-md-7 form-control" value="{{ old("club_leader") }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Tanggal Berdiri Club *</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="date" name="establishment_date" class="col-12 col-md-7 form-control" value="{{ old("establishment_date") }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Email *</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="text" name="socmed[email]" class="col-12 col-md-7 form-control" value="{{ old("socmed[email]") }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Youtube</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="text" name="socmed[youtube]" class="col-12 col-md-7 form-control" value="{{ old("socmed[youtube]") }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Twitter</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="text" name="socmed[twitter]" class="col-12 col-md-7 form-control" value="{{ old("socmed[twitter]") }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Instagram</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="text" name="socmed[instagram]" class="col-12 col-md-7 form-control" value="{{ old("socmed[instagram]") }}" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Facebook</label>
                    <div style="gap: 24px" class="d-flex flex-wrap">
                        <input type="text" name="socmed[facebook]" class="col-12 col-md-7 form-control" value="{{ old("socmed[facebook]") }}" autofocus>
                    </div>
                </div>
                <img id="com_preview_image" src="" alt="" class="w_300">
                <div class="form-group">
                    <label for="">Image *</label><br>
                    <input type="file" id="image" name="image" value="{{ old('image') }}" autofocus>
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" class="form-control">
                        <option value="motor">Motor</option>
                        <option value="mobil" >Mobil</option>
                        <option value="mobility" >Mobility</option>
                    </select>
                </div>

            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-success btn_update_sport">Create</button>
            </div>
        </div>
    </form>

    <script>
        image.onchange = (event) => {
            const [file] = image.files
            if (file) {
                com_preview_image.src = URL.createObjectURL(file)
            }
            com_preview_image.onload = () => {
                URL.revokeObjectURL(com_preview_image.src)
            }
        }
    </script>

@endsection
