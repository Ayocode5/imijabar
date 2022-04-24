@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_registration_event">
        <div class="head_registration_event">
            <h1>Pendaftaran Event</h1>
            <p>Berkas Persyaratan Dan Tata Cara Pengajuan Izin Kegiatan/Lomba Otomotif Di IMI Jawa Barat</p>
        </div>

        <div class="wrap_header_event_register">
            <div class="card border-0">
                <img class="img-fluid card-img featured_image_event_register" src="{{ asset('images') }}/banner-reg-event.png"
                    alt="featured image event">

                <div class="card-img-overlay overlay_image_event_register d-flex">
                    <div class="my-auto mx-auto text-center content_overlay_image_event_register">
                        <h4 class="card-title">Urus Surat Izin Kegiatan Otomotifmu Disini:</h4>

                        <a href="{{ route("eo.registration.form") }}">
                            <button class="btn_daftar_event">Daftar Disini</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main_registrasi_event">
        <section id="requirements_resgis_event">
            <div class="wrap_requirements_resgis_event py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_requirements_regis_event col-12 col-md-7">
                        <h2>Berkas Persyaratan Pengajuan Izin Kegiatan</h2>
                    </div>
                    <div class="wrap_image_line_requirements_regis_event col-12 col-md-5">
                        <img class="w-100" src="{{ asset('images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                <div class="mt-3 list_requirements_regis_event">
                    <ul>
                        <li>
                            Foto Copy AD/ART yang disahkan notaris dalam bentuk Hard Copy.
                        </li>
                        <li>
                            Memiliki Kedudukan Sekertariat,
                        </li>
                        <li>
                            Memiliki Anggota Terdaftar pada IMI (minimal 15 orang).
                        </li>

                    </ul>
                </div>
            </div>
        </section>

        <section id="tatacara_resgis_event">
            <div class="wrap_requirements_resgis_event py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_requirements_regis_event col-12 col-md-5">
                        <h2>Tata Cara Pendaftaran Event</h2>
                    </div>
                    <div class="wrap_image_line_requirements_regis_event col-12 col-md-7">
                        <img class="w-100" src="{{ asset('images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                <ul class="list_tatacara_registration_event">
                    <li>
                        Mengisi formulir CRISA pada link berikut: bit.ly/Form-CRISA-IMIJABAR
                    </li>
                    <li>
                        Mengisi formulir TKT (Tanda Klub Terdaftar) pada link berikut:bit.ly/Form-TKT-IMIJABAR
                    </li>
                    <li>
                        Menyerahkan Foto Copy AD/ART yang disahkan oleh notaris berupa Hard Copy,
                    </li>
                    <li>
                        Membayar biaya TKT sebesar 100.000/tahun,
                    </li>
                    <li>
                        Membayar uang pangkal pendaftaran sebesar 100.000,
                    </li>
                    <li>
                        Membayar Iuran Tahunan Keanggotaan Klub sebesar 100.000/tahun.
                    </li>

                </ul>
                <ul class="note_tatacara_registration">
                    <p>Catatan</p>
                    <li>
                        Berikut nomor rekening bank BCA IMI Jawa Barat: xxxxxxxxxx a/n Ikatan Motor Jawa Barat,
                    </li>
                    <li>
                        Konfirmasi pembayaran via Whatsapp: 08xxxxxxxxxx.
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
