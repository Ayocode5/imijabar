@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Shipping</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('admin/shipping/update/'.$shipping->id) }}" method="post">
                @csrf
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Shipping</h6>
                        <div class="float-right d-inline">
                            <a href="{{ route('admin.shipping.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Shipping Name *</label>
                                    <input type="text" name="shipping_name" class="form-control" value="{{ $shipping->shipping_name }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="">Shipping Text *</label>
                                    <textarea name="shipping_text" class="form-control" cols="30" rows="10">{{ $shipping->shipping_text }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Shipping Cost *</label>
                                    <input type="text" name="shipping_cost" class="form-control" value="{{ $shipping->shipping_cost }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Shipping Order *</label>
                                    <input type="text" name="shipping_order" class="form-control" value="{{ $shipping->shipping_order }}">
                                </div>
                                <div class="form-group">
                                    <label for="">Shipping Status *</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shipping_status" id="rr1" value="Show" @if($shipping->shipping_status == 'Show') checked @endif>
                                            <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="shipping_status" id="rr2" value="Hide" @if($shipping->shipping_status == 'Hide') checked @endif>
                                            <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
