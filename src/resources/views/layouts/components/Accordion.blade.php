<section>
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
</section>