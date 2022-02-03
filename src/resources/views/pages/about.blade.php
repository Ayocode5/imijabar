@extends('layouts.app')

@section('content')

    @include('layouts.components.breadcrumb', ['url_path' => 'Tentang IMI'])

    <!-- START VISI MISI -->
    <section id="visi_misi">
        <div class="container-fluid wrap_visi_misi">
            <div class="row visi_section">
                <div class="col-12 col-lg-7 order-2 order-lg-1 align-items-center d-flex">
                    <div>
                        <div class="d-inline">

                        </div>
                        <h2 class="visimisi-outline">VISI <span class="visimisi-jabar">IMI JAWA
                                BARAT</span></h2>
                        <!-- <div class="border_visi"></div> -->
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                    </div>
                </div>
                <div class="align-items-center d-flex col-12 col-lg-5 order-1">
                    <img src="{{ asset('storage/app/public/assets/') }}/img/visi-img.png" alt="visimisi img" class="img-fluid">
                </div>
            </div>
            <div class="row misi_section">
                <div class="align-items-center d-flex col-12 col-lg-5 order-2 order-lg-1">
                    <img src="{{ asset('storage/app/public/assets/') }}/img/misi-img.png" alt="visimisi img" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 order-2 align-items-center justify-content-end d-flex">
                    <div>
                        <div class="d-inline">

                        </div>
                        <h2 class="visimisi-jabar text-right">
                            IMI JAWA BARAT
                            <span class="visimisi-outline">
                                MISI
                            </span>
                        </h2>

                        <!-- <div class="border_visi"></div> -->
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                        <p class="visimisi-detail">Lectus felis egestas pellentesque id nullam non velit sed id.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END VISI MISI -->

    <!-- START SEJARAH -->
    <section id="sejarah">
        <div class="container-fluid wrap_sejarah_imi">
            <div class="row pt-5">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <h2 class="sejarah-title">
                        Sejarah Perjalanan IMI<br>Jawa Barat
                    </h2>
                    <p class="sejarah-text">
                        <span class="sejarah-text-bold"> Masa Awal Pembentukan - </span> Di awal pembentukan IMI
                        Jawa
                        Barat bernama Ikatan Motor
                        Jawa Barat
                        (IMJB) kemudian mulailah dirumuskan pembentukan IMI Jawa Barat dengan membentuk steering
                        committee yang diprakarsai oleh dua klub mobil yakni Volkswagen Club Bandung, dan Speed
                        Driver.
                        Setelah rapat pertama yang dihadiri beberapa petinggi klub otomotif Jawa Barat,
                        ditetapkanlah 19
                        Desember 1989 sebagai hari lahir IMI Jawa Barat dan menetapkan H MADJOERI sebagai
                        pimpinan.
                    </p>
                </div>
                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-img.png" alt="sejarah img" class="sejarah-img mt-5">
                </div>
            </div>
            <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-down.png" alt="arrow down" class="sejarah-arrow">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <p class="sejarah-text">
                        <span class="sejarah-text-bold"> Periode 1989 - 1992 - </span> Dibawah kepemimpinan H
                        MADJOERI
                        beserta jajaran kepengurusan IMI Jawa Barat mulai bahu-membahu menegakan eksistensi
                        pertama
                        IMI
                        Jawa Barat. Seluruh aktifitas otomotif di Jawa Barat menjadi berinduk ke IMI Jawa Barat,
                        mudah
                        bagi IMI Jawa Barat untuk menarik simpatik dan citra dari masyarakat Jawa Barat. Pada
                        tahun
                        1992
                        IMI Jawa Barat untuk pertama kalinya menggelar Malam Prestasi Atlit Otomotif Jawa Barat
                        di
                        Gedung Pramuka (JL. Westu Kencana), berbagai aktivitas otomotif lainnya pun turut serta
                        diadakan
                        secara rutin pada periode ini seperti Wisata Rally dan Slalom Test. Sejarah juga mecatat
                        Road
                        Race pertama kalinya diadakan oleh Turtle Speed di JL. Diponegoro (Gedung Sate).
                    </p>
                </div>
                <div class="col-12 col-lg-2 d-flex justify-content-center">
                    <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-right.png" alt="arrow right" class="sejarah-arrow2">
                </div>
                <div class="col-12 col-lg-5">
                    <p class="sejarah-text">
                        <span class="sejarah-text-bold"> Periode 1992 - 1996 - </span> Masih dibawah
                        kepemimpinan H.
                        MADJOERI dan beberapa pengurus baru, IMI Jawa Barat mulai menghadapi banyak tantangan
                        terutama
                        di bidang Balap Motor, dan Rally Mobil yang menjadi tren kala itu sehingga menjadi
                        kurang
                        terkendali akibat dari banyak nya Radio Anak Muda Bandung yang mengadakan event dengan
                        menambahkan peraturan pelengkap lomba masing-masing. Berangkat dari hal tersebut PP IMI
                        mulai
                        mengemas peraturan Drag Race yang lebih mengikat dan harus dipatuhi oleh para partisipan
                        dan
                        penyelenggara.
                    </p>
                </div>
            </div>
            <div class="showmore-btn">
                <div class="accordion" id="accordionShowMore">
                    <div class="card" style="border: none;">
                        <div id="collapseHistory" class="collapse" aria-labelledby="showMoreHistory"
                            data-parent="#accordionShowMore">
                            <div class="card-body p-0" style="background-color: #fbfbfbfb;">
                                <div class="row d-flex justify-content-end mr-md-2">
                                    <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-down.png" alt="arrow down" class="sejarah-arrow">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-5 order-3 order-lg-1">
                                        <p class="sejarah-text">
                                            <span class="sejarah-text-bold"> Periode 2000 - 2004 - </span> Di
                                            periode
                                            ke-4 ini IMI Jawa Barat dipimpin oleh H. Doddy Heryadi ex ketua
                                            harian
                                            IMI
                                            Jawa Barat periode sebelumnya. Pada periode ini bidang wisata
                                            menjadi
                                            bagian
                                            dari fokus IMI Jawa Barat setelah olahraga roda 2 dan 4. Jambore
                                            yang
                                            digelar IMI Jawa Barat pada periode ini menjadi hal yang paling
                                            ditunggu
                                            oleh ribuan masyarakat Kota Bandung, saat itu hanya IMI Jawa Barat
                                            yang
                                            mengadakan Jambore IMI, dan pada periode ini juga anggota IMI Jawa
                                            Barat
                                            sudah mencapai 200 anggota.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-2 order-2 d-flex justify-content-center">
                                        <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-right.png" alt="arrow right"
                                            class="sejarah-arrow4">
                                    </div>
                                    <div class="col-12 col-lg-5 order-1 order-lg-3">
                                        <p class="sejarah-text">
                                            <span class="sejarah-text-bold"> Periode 1996 - 2000 - </span> Pada
                                            periode
                                            ini IMI Jawa Barat dipimpin oleh Drs H UKMAN SUTARYAN dan pada
                                            periode
                                            ini
                                            pula IMI Jawa Barat dihadapkan oleh beberapa Kejuaraan Nasional
                                            Rally
                                            dan
                                            Slalom. Meskipun di era ini sempat terjadi krisis moneter, namun itu
                                            tidak
                                            menggoyahkan langkah pengurus dan semua klub untuk tetap solid dalam
                                            membangun eksistensi otomotif Jawa Barat. Di periode ini juga IMI
                                            Jawa
                                            Barat
                                            mulai menjadi contoh bagi pengda-pengda IMI daerah lain dalam
                                            mengelola
                                            organisasi.
                                        </p>
                                    </div>
                                </div>
                                <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-down.png" alt="arrow down" class="sejarah-arrow">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <p class="sejarah-text">
                                            <span class="sejarah-text-bold"> Periode 2004 - 2008 - </span> IMI
                                            Jawa
                                            Barat memasuki era baru dalam periode ini, sosok pemimpin muda
                                            Mantan
                                            atlit
                                            Motocross dan Gokart Nasional Oke Daradjat Junjunan terpilih menjadi
                                            Ketua
                                            Pengprov IMI Jawa Barat. Susunan kepengurusan yang fresh dan
                                            memiliki
                                            semangat tinggi mewarnai periode ini. Puncak nya IMI Jawa Barat
                                            dinobatkan
                                            sebagai Pengprov terbaik di periode ini, serta rangkaian prestasi
                                            yang
                                            diraih pada tahun-tahun berikutnya 2005, 2006, 2007, dan 2008
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-2 d-flex justify-content-center">
                                        <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-right.png" alt="arrow right"
                                            class="sejarah-arrow2">
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <p class="sejarah-text">
                                            <span class="sejarah-text-bold"> Periode 2008 - 2012 - </span> Oke
                                            Darajat
                                            Junjunan kembali terpilih menjadi pemimpin IMI Jawa Barat, meskipun
                                            ada
                                            beberapa rintangan dari sektor wisata pada periode ini, tidak
                                            menyurutkan
                                            IMI Jawa Barat untuk mengulangi kesuksesan periode sebelumnya bahkan
                                            prestasi yang didapatkan juga meningkat secara signifikan jumlahnya,
                                            seperti
                                            terpilihnya IMI Jawa Barat sebagai tuan rumah Jambore nasional
                                            otomotif
                                            di
                                            Pangandaran, serta turut menyumbangkan 2 emas dan juara umum cabang
                                            olahraga
                                            bermotor PON Ke-18 2012 di Riau, predikat pengprov terbaik ke-3 pun
                                            turut
                                            disabet pada tahun 2009, dan tebaik ke-2 pada tahun 2010 dan 2011,
                                            IMI
                                            Jawa
                                            Barat pun ditunjuk sebagai tuan rumah penyelenggaraan BK PON XVIII
                                            Riau
                                            2012
                                            di sirkuit Sentul.
                                        </p>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-end mr-md-2">
                                    <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-down.png" alt="arrow down" class="sejarah-arrow">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-5 order-3 order-lg-1">
                                        <p class="sejarah-text">
                                            <span class="sejarah-text-bold"> Periode 2016 - 2020 - </span> Pada
                                            periode
                                            ini IMI Jawa Barat dipimpin oleh H. Fachrul Sarman, di periode ini
                                            juga
                                            IMI
                                            Jawa Barat menggelar perhelatan IMI Award 2016 sebagai bentuk
                                            penghormatan
                                            IMI Jawa Barat kepada pahlawan-pahlawan otomotif Jawa Barat,
                                            sekaligus
                                            sebagai ajang pelantikan kepengerusan IMI Jawa Barat periode 2016 -
                                            2020.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-2 order-2 d-flex justify-content-center">
                                        <img src="{{ asset('storage/app/public/assets/') }}/img/sejarah-arrow-right.png" alt="arrow right"
                                            class="sejarah-arrow4">
                                    </div>
                                    <div class="col-12 col-lg-5 order-1 order-lg-3">
                                        <p class="sejarah-text">
                                            <span class="sejarah-text-bold"> Periode 2012 - 2016 - </span> Di
                                            periode
                                            selanjutnya IMI Jawa Barat kembali dipimpin oleh tokoh muda otomotif
                                            Jawa
                                            Barat yakni, Rio Teguh Pribadi, di periode ini IMI Jawa Barat mampu
                                            mempertahankan prestasi sebelumnya yakni menjadi juara umum cabor
                                            balap
                                            motor pada gelaran PON Jabar 2016, pada periode ini juga IMI Jawa
                                            Barat
                                            telah mencapai lebih dari 300 klub yang terbanyak pada masanya,
                                            gelar
                                            sebagai Pengprov terbaik pun turut dipertahankan yakni ditahun 2013
                                            -
                                            2014,
                                            kemudian terbaik ke-2 ditahun 2015, dan ke-3 ditahun 2016.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header" id="showMoreHistory" style="background-color: #F8F8F8;">
                            <h2 class="mb-0 d-flex justify-content-center">
                                <button class="btn btn-link showmore_history" type="button" data-toggle="collapse"
                                    data-target="#collapseHistory" aria-expanded="true" aria-controls="collapseHistory">
                                    Tampilkan Lebih Banyak

                                    <img src="{{ asset('storage/app/public/assets/') }}/img/icon-arrow-down.svg" alt="arrow down" class="showmore-icon">
                                </button>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SEJARAH -->

    <!-- START GALERI -->
    @include('layouts.components.gallery')
    <!-- END GALERI -->

    <!-- START KEPENGURUSAN -->
    @include('layouts.components.committee')
    <!-- END KEPENGURUSAN -->

    <!-- START ANGGARAN -->
    <section>
        <div class="wrap_anggaran">
            <div id="accordion">
                <div class="card my_card">
                    <div class="card-header art_imi" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link card-title" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne" style="padding: 0px;">
                                Anggaran Rumah Tangga IMI Jawa Barat
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body  art_imi">
                            Anggaran Rumah Tangga IMI Jawa Barat periode 2021 - 2025, silahkan unduh disini :
                            <br />
                            <button type="button"
                                class="btn btn-light btn-outline-dark text-center button_download_file mt-2"><img
                                    class="mr-3" src="{{ asset('storage/app/public/assets/') }}/img/pdf-icon.png" alt=""> Download
                                File</button>

                        </div>
                    </div>
                </div>
                <div class="card my_card">
                    <div class="card-header ad_imi" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed card-title" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                style="padding: 0px;">
                                Anggaran Dasar IMI Jawa Barat
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body ad_imi">
                            Anggaran Dasar IMI Jawa Barat periode 2021 - 2025, silahkan unduh disini :
                            <br />
                            <button type="button"
                                class="btn btn-light btn-outline-dark text-center button_download_file mt-2"><img
                                    class="mr-3" src="{{ asset('storage/app/public/assets/') }}/img/pdf-icon.png" alt=""> Download
                                File</button>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END ANGGARAN -->

@endsection
