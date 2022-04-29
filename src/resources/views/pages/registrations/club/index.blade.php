@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_registration_club">
        <div class="head_registration_club">
            <h1>{{ $section1->name }}</h1>
            <p>{!! $section1->content1 !!}</p>
        </div>

        <div class="wrap_header_club_register">
            <div class="card border-0">
                <img class="img-fluid card-img featured_image_club_register"
                    src="{{ asset('uploads') . "/$section1->banner" }}" alt="featured image club">

                <div class="card-img-overlay overlay_image_club_register d-flex">
                    <div class="my-auto mx-auto text-center content_overlay_image_club_register">
                        <h4 class="card-title">Daftarkan Klub mu, dan Jadilah Bagian Resmi Dari IMI Jawa Barat</h4>
                    
                        <a href="{{ $section1->link }}">
                            <button class="btn_daftar_club">Daftar Disini</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main_registrasi_club">
        <section id="requirements_resgis_club">
            <div class="wrap_requirements_resgis_club py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_requirements_regis_club col-12 col-md-7">
                        <h2>{{ $section2->name }}</h2>
                    </div>
                    <div class="wrap_image_line_requirements_regis_club col-12 col-md-5">
                        <img class="w-100" src="{{ asset('images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                <ul class="mt-3 list_requirements_regis_club">
                    {{-- <li>
                        Scan File KTP/SIM,
                    </li>
                    <li>
                        Scan File Foto Pemohon,
                    </li>
                    <li>
                        Surat Keterangan dari Orang Tua (bermaterai) bagi anak-anak yang berusia dibawah 17 tahun,
                    </li>
                    <li>
                        Mempunyai KTA,
                    </li>
                    <li>
                        Bukti Transfer Biaya Pembuatan KIS.
                    </li> --}}
                    {!! $section2->content1 !!}
                    </ul>
            </div>
        </section>

        <section id="tatacara_resgis_club">
            <div class="wrap_requirements_resgis_club py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_requirements_regis_club col-12 col-md-5">
                        <h2>{{ $section3->name }}</h2>
                    </div>
                    <div class="wrap_image_line_requirements_regis_club col-12 col-md-7">
                        <img class="w-100" src="{{ asset('images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                <ul class="list_tatacara_registration_club">
                    {{-- <li>
                        Menyiapkan berkas yang disebutkan diatas,
                    </li>
                    <li>
                        Melakukan pengisian berkas pada link berikut: bit.ly/Pendaftaran-KIS-IMIJABAR
                    </li>
                    <li>
                        Melakukan pembayaran via transfer untuk biaya registration KIS sebesar 300.000 Rupiah,
                    </li>
                    <li>
                        Melakukan konfirmasi pembayaran via Whatsapp.
                    </li> --}}
                    {!! $section3->content1 !!}
                </ul>
                {{-- <ul class="note_tatacara_registration">
                    <li>Catatan:
                        Untuk Biaya Pendaftaran / Perpanjangan Kartu Tanda Anggota Ikatan Motor Indonesia adalah sebesar
                        150.000 Rupiah (Pendaftaran) & 130.000 Rupiah (Perpanjangan),
                        Pembayaran dapat dilakukan via transfer melalui nomor rekening Virtual Account yang akan
                        otomotis tergenerate menuju Akun Bank QNB Indonesia milik Ikatan Motor Indonesia,
                    </li>
                </ul> --}}
            </div>
        </section>
    </main>
@endsection
