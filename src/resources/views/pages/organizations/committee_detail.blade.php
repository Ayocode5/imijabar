@extends('layouts.app')

@section('content')

    @include('layouts.components.breadcrumb')

    <main id="committee__detail">
        <div class="container p-md-0 m-md-0 mx-auto w-100">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-4 position-relative">
                   <div class="ribbon_committee position-absolute">
                        <div class="d-flex align-items-center">
                            <div class="col-3 small_logo">
                                <img src="{{asset('images/logoSmall.svg')}}"" alt="logo imi" />
                            </div>
                            <div class="col-1 sparator">
                                <img src="/images/sparator.svg" alt="sparator" />
                            </div>
                            <div class="col-8 small_tag">
                                <p>
                                    Official Management of IMI Jawa Barat
                                </p>
                            </div>
                        </div>
                    </div>
                    <img class="committee__detail-image w-100 img-fluid" src="{{asset('uploads/committee/') . "/$committee->photo"}}" alt="{{$committee->name}}" />
                </div>  

                <div class="col-12 col-md-8">
                    <div class="committee__detail-bio">
                        <p class="h3 committee-designation font-weight-bold">{{$committee->designation}}</p>
                        <p class="h1 font-weight-bold">{{$committee->name}}</p>
                        <div class="committee-degree mt-5">
                                {!! $committee->degree !!}
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="accordion">
                <div class="card my_card">
                    <div style="cursor: pointer" class="card-header ad_imi" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed card-title" style="padding: 0px;">
                                    Detail Profile Anggota
                                </button>
                            </h5>
                            <img src="{{ asset('images') }}/arrow_down.svg" alt="collapse detail profile" />
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body committee-detail">
                            {!! $committee->detail !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
