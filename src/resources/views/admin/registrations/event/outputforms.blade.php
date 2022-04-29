<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .size_a4 {
            width: 24cm;
            height: 29.7cm;
            /* border: 2px solid black; */
        }

        .flex_row {
            display: -webkit-box;
            /* wkhtmltopdf uses this one */
            display: flex;
            flex-wrap: wrap;
        }

        .flex_column {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
        }

        .signature_verification,
        .signature_verification th,
        .signature_verification td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        @media screen {
            footer {
                display: none;
            }

            header {
                display: none;
            }
        }

        @media print {
            header {
                position: fixed;
                width: 100%;
                top: 0;
            }

            footer {
                position: fixed;
                width: 100%;
                bottom: 0;
            }
        }

    </style>

</head>
<body>

    @php
        $jenis_kendaraan = json_decode($registrar->jenis_kendaraan);

        $oc = json_decode($registrar->oc)[0];

        $rc = json_decode($registrar->rc)[0];

        $sc = json_decode($registrar->sc)[0];

        preg_match_all("/[a-zA-Z.\s\d]+/", str_replace("\r\n", ",", json_decode($registrar->sponsor_dontaur_lain)), $sponsor_donatur_lain);
        $sponsor_donatur_lain = $sponsor_donatur_lain[0];

        preg_match_all("/[a-zA-Z.\s\d]+/", str_replace("\r\n", ",", json_decode($registrar->kelas_lomba)),   $kelas_lomba);
        $kelas_lomba = $kelas_lomba[0];

        preg_match_all("/[a-zA-Z.\s\d]+/", str_replace("\r\n", ",", json_decode($registrar->penghargaan)), $penghargaan);
        $penghargaan = $penghargaan[0];

    @endphp

    <div class="size_a4">
        <header>
            <div style="align-items: center;" class="flex_row">
                <div class="">
                    <img height="150px" width="150px" src="{{ asset('images') }}/logoIMIJabar.png"
                        alt="logo imi jabar">
                </div>
                <div style="margin-left: 100px;" class="">
                    <div style="text-align: center;">
                        <p>PENGURUS PROVINSI</p>
                        <h1 style="text-decoration: underline; font-size: 32px;">IKATAN MOTOR INDONESIA</h1>
                        <p>JAWA BARAT</p>
                    </div>
                </div>
            </div>
        </header>

        <main style="margin: 0 24px; margin-top: 140px;">
            <h2 style="font-size: 18px; text-align: center; text-decoration: underline;">PERNYATAAN PERMOHONAN IJIN
                KEGIATAN</h2>
            <p>Kami yang bertandatangan dibawah ini mengajukan pernyataan permohonan ijin Kegiatan Wilayah Provinsi Jawa
                Barat dan tercatat dalam kalender kegiatan IMI - Jabar periode 2021-2025 untuk :
            </p>

            <br>
            <table style="text-align: left;">
                <tr>
                    <th>I. </th>
                    <th>DESKRIPSI KEGIATAN</th>
                    <td>:</td>
                </tr>
                <tr>
                    <th></th>
                    <th>NAMA EVENT</th>
                    <td>:</td>
                    <td>{{ $registrar->nama_event }}</td>
                </tr>

                <tr>
                    <th></th>
                    <th>TEMPAT</th>
                    <td>:</td>
                    <td>{{ $registrar->tempat_penyelenggaraan }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th>TANGGAL</th>
                    <td>:</td>
                    <td>{{ $registrar->tanggal_penyelenggaraan }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th>JENIS</th>
                    <td>:</td>
                    <td>
                        @foreach ($jenis_kendaraan as $jk)
                            {{ $loop->iteration }}. {{ $jk }} <br>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th>KLASIFIKASI</th>
                    <td>:</td>
                    <td>{{ $registrar->klasifikasi_lomba }}</td>
                </tr>
            </table>

            <p>Keterangan singkat mengenai kegiatan : </p>
            <p style="word-wrap: break-word;">
                {{ $registrar->deskripsi_lomba }}
            </p>

            <br>
            <table style="text-align: left;">
                <tr>
                    <th>II. </th>
                    <th style="text-decoration: underline;">PENANGGUNG JAWAB KEGIATAN</th>
                    <td>:</td>
                </tr>
                <!-- KETUA PENYELENGGARA -->
                <tr>
                    <th></th>
                    <th>- Ketua Penyelenggara (OC)</th>
                    <td>Nama</td>
                    <td> :</td>
                    <td>{{ $oc->{'Nama'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>Alamat</td>
                    <td> :</td>
                    <td>{{ $oc->{'Alamat'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>Pekerjaan</td>
                    <td> :</td>
                    <td>{{ $oc->{'Pekerjaan'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td style="padding-bottom: 16px;">No. KTA</td>
                    <td style="padding-bottom: 16px;"> :</td>
                    <td style="padding-bottom: 16px;">{{ $oc->{'No. KTA'} }}</td>
                </tr>

                <!-- Ketua komite perlombaan (rc) -->
                <tr>
                    <th></th>
                    <th>- Ketua Komite Perlombaan (RC)</th>
                    <td>Nama</td>
                    <td> :</td>
                    <td>{{ $rc->{'Nama'} }}</td>
                </tr>

                <tr>
                    <th></th>
                    <th></th>
                    <td>Alamat</td>
                    <td> :</td>
                    <td>{{ $rc->{'Alamat'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>Pekerjaan</td>
                    <td> :</td>
                    <td>{{ $rc->{'Pekerjaan'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>No. KTA</td>
                    <td> :</td>
                    <td>{{ $rc->{'No. KTA'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>No. Anggota IMI-JABAR / Klub</td>
                    <td> :</td>
                    <td>{{ $rc->{"No. Anggota IMI Jabar/Klub"} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>No. TKT</td>
                    <td> :</td>
                    <td>{{ $rc->{'No. TKT'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td style="padding-bottom: 16px;">No. Lisensi</td>
                    <td style=" padding-bottom: 16px;"> :</td>
                    <td style="padding-bottom: 16px;">{{ $rc->{'No. Lisensi'} }}</td>
                </tr>
                <!-- Petugas Scrutineering -->
                <tr>
                    <th></th>
                    <th>- Petugas Scrutineering</th>
                    <td>Nama</td>
                    <td> :</td>
                    <td>{{ $sc->{'Nama'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>Alamat</td>
                    <td> :</td>
                    <td>{{ $sc->{'Alamat'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>No. Lisensi</td>
                    <td> :</td>
                    <td>{{ $sc->{'No. Lisensi'} }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <td>No. KTA</td>
                    <td> :</td>
                    <td>{{ $sc->{'No. KTA'} }}</td>
                </tr>
            </table>


            <table style="margin-top: 16px;">
                <tr>
                    <th>III. </th>
                    <th style="text-decoration: underline;">SUMBER DANA BAGI PENYELENGGARA KEGIATAN</th>
                    <td> :</td>
                </tr>

            </table>
            <table style="text-align: left;">
                <tr>
                    <th></th>
                    <th>1. </th>
                    <th>Sponsor Tunggal</th>
                    <td> :</td>
                    <td style="text-decoration: underline;">{{ $registrar->sponsor_tunggal }}</td>
                </tr>
                <tr>
                    <th></th>
                    <th>2. </th>
                    <th>Sponsor Utama</th>
                    <td> :</td>
                    <td style="text-decoration: underline;">{{ $registrar->sponsor_utama }}</td>
                </tr>
                @if (is_array($sponsor_donatur_lain))
                    @foreach ($sponsor_donatur_lain as $sd)
                        <tr>
                            <th></th>
                            <th>{{ $loop->iteration + 2 }}. </th>
                            <th>Sponsor / Donatur</th>
                            <td> :</td>
                            <td style="text-decoration: underline;">{{ $sd }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th></th>
                        <th>3. </th>
                        <th>Sponsor / Donatur</th>
                        <td> :</td>
                        <td style="text-decoration: underline;">{{ $sponsor_donatur_lain }}</td>
                    </tr>
                @endif
                {{-- <tr>
                    <th></th>
                    <th>3. </th>
                    <th>Sponsor / Donatur</th>
                    <td> :</td>
                    <td style="text-decoration: underline;">..................................</td>
                </tr> --}}
                {{-- <tr>
                    <th></th>
                    <th>4. </th>
                    <th>Lain-lain</th>
                    <td> :</td>
                    <td style="text-decoration: underline;">..................................</td>
                </tr> --}}
            </table>
            <p><b>JENIS HUBUNGAN DENGAN PENYANDANG DANA:</b></p>
            <p style="word-wrap: break-word;">
                {{ $registrar->hubungan_sponsor_penyelenggara }}
            </p>

            <br>
            <table>
                <tr>
                    <th>IV. </th>
                    <th style="text-decoration: underline;">KELAS YANG DILOMBAKAN DAN PENGHARGAAN</th>
                    <td> :</td>
                </tr>
            </table>


            <div style="justify-content: space-between;" class="flex_row">
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <td style="text-align: center;"><br>KELAS YANG DILOMBAKAN</td>
                    </tr>
                    @if (is_array($kelas_lomba))
                        @foreach ($kelas_lomba as $kl)
                            <tr>
                                <th></th>
                                <th>{{ $loop->iteration }}. </th>
                                <td>{{ $kl }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th></th>
                            <th>1. </th>
                            <td>{{ $kelas_lomba }}</td>
                        </tr>
                    @endif

                    {{-- <tr>
                        <th></th>
                        <th>2. </th>
                        <td> ......................................................</td>
                    </tr> --}}
                </table>
                <table>
                    <tr>
                        <th></th>
                        <th></th>
                        <td style="text-align: center;"><br>PENGHARGAAN (Trophy + Uang/Barang)</td>
                    </tr>
                    @if (is_array($penghargaan))
                        @foreach ($penghargaan as $p)
                            <tr>
                                <th></th>
                                <th>{{ $loop->iteration }}. </th>
                                <td>{{ $p }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th></th>
                            <th>1. </th>
                            <td>{{ $penghargaan }}</td>
                        </tr>
                    @endif
                </table>
            </div>


            <p style="page-break-after: always;">&nbsp;</p>
            <p style="page-break-before: always;">&nbsp;</p>


            <p style="margin-top: 130px;">

                Demikian pernyataan permohonan ini kami isi dengan data yang sesungguhnya, dan kami bersedia tunduk dan
                mematuhi segenap kode sportifitas serta peraturan-peraturan yang dikeluarkan oleh PP. IMI / IMI - JAWA
                BARAT yang berlaku.</p>

            <div style="justify-content: center; justify-items: center;" class="flex_row">
                <div class="flex_column">
                    <br>
                    <p>....................................</p>
                    <p>Ketua Komite Organisasi (OC)</p>
                    <br />
                    <img src="{{ asset('uploads/' . $registrar->oc_signature) }}" alt="tanda tangaan OC">
                    <br />
                    <p style="margin-left: 50px">( {{ $oc->{"Nama"} }} )</p>

                </div>

                <div style="align-self: flex-end; text-align: center;" class="flex_column">
                    <p>Materai</p>
                    <p>Rp. 6.000,-</p>
                </div>

                <div  style="align-self: flex-end; text-align: center;" class="flex_column">
                    <br>
                    <p>________, {{Illuminate\Support\Carbon::parse($registrar->created_at)->isoFormat("D MMMM Y")}}</p>
                    <center><p>Ketua Komite Perlombaan (RC)</p></center>
                    <br>
                    <img src="{{ asset('uploads/' . $registrar->rc_signature) }}" alt="tanda tangaan RC">
                    <br>
                    <center><p>( {{ $rc->{"Nama"} }} )</p></center>
                </div>
            </div>

            <div class="flex_row"
                style="margin-top: 70px; justify-content: center; justify-items: center; align-items: center;">
                <div style="text-align: center;">
                    <p>Petugas Scrutineering</p>
                    <br>
                    <img src="{{ asset('uploads/' . $registrar->sc_signature) }}" alt="tanda tangaan SC">
                    <br>
                    <p>( {{ $sc->{"Nama"} }} )</p>
                </div>
            </div>


            <p style="text-decoration: underline; font-weight: 700; margin-bottom: 16px; margin-top: 16px;">DIISI OLEH
                PETUGAS VERIFIKASI
            </p>
            <table style="margin-bottom: 24px;" class="signature_verification">
                <tr>
                    <th><b>KETUA BIDANG OLAHRAGA</b></th>
                    <th><b>BIRO OLAHRAGA MOTOR / MOBIL</b></th>
                    <th><b>KETUA BIDANG ORGANISASI BIRO KEANGGOTAAN</b></th>
                    <th><b>SEKRETARIS / WAKIL SEKRETARIS</b></th>
                </tr>
                <tr>
                    <td style="height: 130px;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="height: 50px;"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </main>



        <footer style="margin-top: 24px; position: fixed; bottom: 0; ">
            <div>
                <div style="justify-items: center; justify-content: center;" class="flex_row">
                    <div class="flex_column">
                        <img style="margin: 0 auto; display: block;" height="45px" width="75px"
                            src="{{ asset('images') }}/fia-logo.png" alt="fia logo">
                    </div>
                    <div class="flex_column">
                        <img style="margin: 0 auto; display: block;" height="45px" width="75px"
                            src="{{ asset('images') }}/fia-logo.png" alt="fia logo">
                    </div>
                    <div class="flex_column">
                        <img style="margin: 0 auto; display: block;" height="60px" width="90px"
                            src="{{ asset('images') }}/fim-logo.png" alt="fim logo">
                    </div>
                </div>
                <hr style="border: 1px solid black;" />
                <div style="text-align: center; margin-top: 16px;">
                    <p>Jl. Batununggal Indah Raya No. 81 Komplek Batununggal Indah Bandung 40266</p>
                    <p>Telp. 022 873130161 email: sekretariat.imijabar@gmail.com</p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
