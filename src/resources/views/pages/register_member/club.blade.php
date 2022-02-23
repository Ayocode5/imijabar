@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_pendaftaran_kis">
        <div class="head_pendaftaran_kis">
            <h1>{{ $section1->name }}</h1>
            <p>{!! $section1->content1 !!}</p>
        </div>
        <div class="feature_image_pendaftaran_kis">
            <img class="d-block mx-auto" src="{{ asset('public/uploads/') . "/$section1->banner" }}"
                alt="image pendaftaran kis">
        </div>
        <div class="fitur_pengembangan_regis_kis">
            {!! $section1->content2 !!}
        </div>

        <a class="daftar_kis_individu text-decoration-none text-dark" href="{{ $section1->link }}"><button>Daftar
                Sekarang</button></a>
    </section>

    <main id="main_registrasi_kis_individu">
        <section id="persyaratan_resgis_kis">
            <div class="wrap_persyaratan_resgis_kis py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_persyaratan_regis_kis col-12 col-md-7">
                        <h2>{{ $section2->name }}</h2>
                    </div>
                    <div class="wrap_image_line_persyaratan_regis_kis col-12 col-md-5">
                        <img class="w-100" src="{{ asset('public/images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                <div class="mt-3 list_persyaratan_regis_kis">
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
                </div>
            </div>
        </section>

        <section id="tatacara_resgis_kis">
            <div class="wrap_persyaratan_resgis_kis py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_persyaratan_regis_kis col-12 col-md-5">
                        <h2>{{ $section3->name }}</h2>
                    </div>
                    <div class="wrap_image_line_persyaratan_regis_kis col-12 col-md-7">
                        <img class="w-100" src="{{ asset('public/images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                <ul class="list_tatacara_pendaftaran_kis">
                    {{-- <li>
                        Menyiapkan berkas yang disebutkan diatas,
                    </li>
                    <li>
                        Melakukan pengisian berkas pada link berikut: bit.ly/Pendaftaran-KIS-IMIJABAR
                    </li>
                    <li>
                        Melakukan pembayaran via transfer untuk biaya pendaftaran KIS sebesar 300.000 Rupiah,
                    </li>
                    <li>
                        Melakukan konfirmasi pembayaran via Whatsapp.
                    </li> --}}
                    {!! $section3->content1 !!}
                </ul>
                {{-- <ul class="note_tatacara_pendaftaran">
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
