<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        margin: 0;
        padding: 0;
    }

    .size_a4 {
        width: 23cm;
        height: 29.7cm;
        /* border: 2px solid black; */
    }

    .form_output_registrasi_club {
        margin: 0 24px;
        font-size: 12px;
    }

    .comittee_core_table,
    .comittee_core_table th,
    .comittee_core_table td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .team_core_table,
    .team_core_table th,
    .team_core_table td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .blank_row {
        height: 20px !important;
        background-color: #ffffff;
    }

    .middle_text_on_table {
        vertical-align: middle;
        text-align: center;
    }


    .row_layout {
        display: -webkit-box;
        /* wkhtmltopdf uses this one */
        display: flex;
    }

    .col_layout {
        -webkit-box-flex: 1;
        -webkit-flex: 1;

        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%;
    }

</style>


<body>

    <div class="size_a4">
        <div class="form_output_registrasi_club">
            <header>
                <h3 style="text-align: center;">DATA DAN REKOMENDASI KLUB</h3>
            </header>

            <main>
                <div class="form_klub">
                    <table>
                        <tr>
                            <td nowrap><b>NAMA KLUB </b></td>
                            <td>:</td>
                            <td>{{ $nama_klub }}</td>
                        </tr>
                        <tr>
                            <td><b>ALAMAT </b></td>
                            <td>:</td>
                            <td>{{ $alamat_jalan }}, {{ $alamat_kel_kec }}, {{ $alamat_kota }}, {{ $alamat_provinsi }}, {{ $alamat_kodepos }}
                            </td>
                        </tr>
                        <tr>
                            <td nowrap><b>PENGURUS INTI</b> </td>
                            <td>:</td>
                            <table style="width: 100%;" class="comittee_core_table">
                                <tr>
                                    <th>N A M A</th>
                                    <th>JABATAN</th>
                                    <th>NO. KTA</th>
                                </tr>
                                @php
                                    
                                    $anggota_inti = json_decode($anggota_inti);
                                    
                                @endphp

                                @foreach ($anggota_inti as $a)
                                    <tr class="blank_row">
                                        <td>{{ $a->{'Nama'} }}</td>
                                        <td>{{ $a->{'Jabatan'} }}</td>
                                        <td>{{ $a->{'No. KTA'} }}</td>
                                    </tr>
                                @endforeach
                                {{-- <tr class="blank_row">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="blank_row">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="blank_row">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="blank_row">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr> --}}

                            </table>
                        </tr>

                    </table>

                    <table class="data_team_core_klub" style="margin-top: 16px;">
                        <tr>
                            <td nowrap><b>DATA ANGGITA INTI</b> ( minimal 15 anggota termasuk pengurus )</td>
                            <table style="width: 100%;" class="team_core_table">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>NO. KTA</th>
                                    <th>NO. KIS <br />( u, Klub Prestasi )</th>
                                    <th>NO. LISENSI IMI <br />( u, Klub Promotor )</th>
                                </tr>

                                @php
                                    $anggota = json_decode($anggota);
                                @endphp
                                @foreach ($anggota as $a)
                                    
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">{{ $loop->iteration }}</td>
                                    <td>{{ $a->{'Nama'} }}</td>
                                    <td class="middle_text_on_table">{{ $a->{'No. KTA'} }}</td>
                                    <td class="middle_text_on_table">{{ $a->{'No. KIS'} }}</td>
                                    <td class="middle_text_on_table">{{ $a->{'No. Lisensi IMI'} }}</td>
                                </tr>
                                @endforeach
                                {{-- <tr class="blank_row">
                                    <td class="middle_text_on_table">2</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">3</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">4</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">5</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">6</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">7</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">8</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">9</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">10</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">11</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">12</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">13</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">14</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">15</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr>
                                <tr class="blank_row">
                                    <td class="middle_text_on_table">16</td>
                                    <td></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                    <td class="middle_text_on_table"></td>
                                </tr> --}}


                            </table>
                        </tr>
                    </table>

                    <p>Demikian data ini kami sampaikan dengan sebenar-benarnya sebagai salah satu syarat penerbitan
                        Sertifikat Tanda Klub Terdaftar dari Ikatan Motor Indonesia ( IMI )</p>
                    <p>Tanggal, {{ Illuminate\Support\Carbon::parse($created_at)->format("d F Y") }}</p>
                    <img height="70px" width="200px" src="{{ public_path("uploads/registrations/club/") . "$signature_ketua_anggota" }}" alt="ttd ketua klub">
                    <p style="text-decoration:underline">
                    .......................................</p>
                    <p>Ketua Klub: {{ $anggota_inti[0]->{'Nama'} }}</p>
                    <hr>
                    <div class="form_filled_by_imi">
                        <p style="text-align: right;">( diisi oleh Pengprov IMI dan diberi silang pada kotak yang
                            dipilih )</p>
                        <p>Klub tersebut diatas telah kami teliti dan kami rekomendasikan untuk dapat diterbitkan
                            Sertifikat Tanda Klub Terdaftar dengan Katagori : </p>

                        <div class="wrap_category_registered_klub">
                            <div class="row_layout">
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        KLUB
                                        REKREASI/HOBBY</label>
                                </div>
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        KLUB
                                        PRESTASI/OLAHRAGA</label>
                                </div>
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        KLUB
                                        PROMOTOR/UMUM</label>
                                </div>

                            </div>
                            <div class="row_layout">
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        DAERAH</label>
                                </div>
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        DAERAH</label>
                                </div>
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        DAERAH</label>
                                </div>

                            </div>
                            <div class="row_layout">
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        NASIONAL</label>
                                </div>
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        NASIONAL</label>
                                </div>
                                <div class="col_layout">
                                    <label for="selection1"><input type="checkbox" name="selection1" id="selection1">
                                        NASIONAL</label>
                                </div>
                            </div>
                        </div>

                        <p>Tanggal, ..................................................</p>
                        <p>PENGPROV IMI ..............................................</p>
                        <br />
                        <br />
                        <br />
                        <p style="text-decoration: underline;">
                            ..........................................................................</p>
                        <p>Ketua</p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>



</html>
