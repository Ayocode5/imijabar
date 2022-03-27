@extends('layouts.app')

@section('content')

    {{-- @include('layouts.components.breadcrumb') --}}

    <section id="content-email-verif">
        <div class="container d-flex justify-content-center" style="padding: 0px;">
            <div class="text-center">
                <div class="col" style="padding: 0px;">
                    <h1 class="title-email-verif">
                        Email Terverifikasi
                    </h1>
                    <img src="{{ asset('images/') }}/line_blue.svg" alt="line blue"
                        style="width: 90%; height: 3px; object-fit: cover;">
                    <p class="subtitle-email-verif">Selamat, sekarang kamu sudah resmi berlangganan. Nantikan kabar terbaru
                        seputar dunia otomotif dari IMI Jawa Barat</p>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <img src="{{ asset('images/') }}/email-verified.png" alt="email-verification-img" class="img-email-verif">
        </div>

        <button class="btn_back_home_email_verif mx-auto d-block">
            <a href="/">
                Kembali Ke Halaman Utama
            </a>
        </button>
    </section>
@endsection
