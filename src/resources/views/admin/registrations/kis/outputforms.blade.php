
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .size_a4 {
            width: 23cm;
            height: 29.7cm;
            /* border: 2px solid black; */

        }

        .column_layout {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            -webkit-box-flex: 1;
            -webkit-flex: 1;

        }

        .row_layout {
            display: -webkit-box;
            /* wkhtmltopdf uses this one */
            display: flex;
            flex-wrap: wrap;
        }

        .content_center_layout {
            -webkit-box-pack: center;
            /* wkhtmltopdf uses this one */
            justify-content: center !important;
        }

        .row_header {
            align-items: flex-end !important;
        }

        .signature_applicant {
            text-decoration: underline;
        }

        .logo_header {
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
            justify-content: flex-end !important;
        }

        .logo_img {
            max-width: 100%;
            height: auto;
        }

        .content_header {
            justify-content: center !important;
            flex: 0 0 83.333333%;
            max-width: 83.333333%;
        }

        .content_header_top {
            align-items: flex-end !important;
            justify-content: flex-end !important;
        }

        .text_content_header_top {
            color: #fff;
            padding: 0.2rem;
            margin: 0;
            text-align: center;
        }

        .content_header_center {
            align-items: flex-start !important;
            justify-content: flex-end !important;
        }

        .content_header_bottom {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }

        /* .margin_template_output_form {
  margin: 0 200px;
  border-top: 2px solid black;
  border-left: 2px solid black;
  border-right: 2px solid black;
  border-bottom: 2px solid black;
} */

        .signature_form_content {
            align-items: center !important;
            justify-content: center !important;
        }

        .form_output_kis,
        td {
            vertical-align: top;
        }

        .form_output_kis {
            font-size: 16px;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="size_a4">
        <header style="margin-bottom: 4px;">
            <div>
                <div class="row_layout">
                    <div class="column_layout">
                        <img class="logo_img" height="120px" width="120px" src=""
                            alt="logo imi">
                    </div>
                    <div style="flex-basis: 0;
                    flex-grow: 4;
                    max-width: 100%;
                    -webkit-box-flex: 4;
                    -webkit-flex: 4;">
                        <div style="margin-left: 400px;">
                            <div style="background-color: #001E6C; max-width: 50%;">
                                <p class="text_content_header_top">Untuk: PP IMI</p>
                            </div>
                        </div>
                        <div style="margin-left: 392px;">
                            <p
                                style="padding-left: 0.5rem!important; padding-right: 0.5rem!important; margin-bottom: 0;">
                                No. :
                                020752</p>
                        </div>
                        <div class="content_header_bottom">
                            <h1 style="text-align: center!important; text-decoration: underline; font-size: 24px;">
                                FORMULIR PENDAFTARAN
                                KARTU IZIN
                                START</h1>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <main style="margin: 0 16px;">
            <table class="form_output_kis">

                <tr>
                    <td>Nama (Sesuai KTP)</td>
                    <td>:</td>
                    <td>Nancy</td>
                </tr>

                <tr>
                    <td>Tempat dan Tanggal Lahir</td>
                    <td>:</td>
                    <td>Jakarta, 15 Januari 2022</td>
                </tr>

                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>Perempuan</td>
                </tr>

                <tr>
                    <td>Golongan Darah</td>
                    <td>:</td>
                    <td>XXX</td>
                </tr>

                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>UIN Jakarta</td>
                </tr>

                <tr>
                    <td>Nomor KTP</td>
                    <td>:</td>
                    <td>000000000000000</td>
                </tr>

                <tr>
                    <td>Dikeluarkan Di</td>
                    <td>:</td>
                    <td>UIN Jakarta</td>
                </tr>

                <tr>
                    <td>Nomor Passport</td>
                    <td>:</td>
                    <td>666666</td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td colspan="3"><b>JL. </b> <span>Sakit perut 4x berak berak di hutan .</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>RT.</b> <span>666</span> <b>RW. </b> <span>666</span></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Kelurahan</b></td>
                    <td>:</td>
                    <td>Cengkareng wicis yang barat</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Kecamatan</b></td>
                    <td>:</td>
                    <td>Cengkareng</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Kota</b></td>
                    <td>:</td>
                    <td>Cengkareng City</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>Kode POS</b></td>
                    <td>:</td>
                    <td>1111</td>
                </tr>


                <tr>
                    <td>Telepon</td>
                    <td>:</td>
                    <td>Rumah</td>
                    <td>:</td>
                    <td>0215 0000000</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Kantor</td>
                    <td>:</td>
                    <td>0215 0000000</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Handphone</td>
                    <td>:</td>
                    <td>08888888888</td>
                </tr>

                <tr>
                    <td>Surat Izin Mengemudi</td>
                    <td>:</td>
                    <td>A/B/C</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Nomor</td>
                    <td>:</td>
                    <td>013123120312031239</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Polda</td>
                    <td>:</td>
                    <td>Cengkareng </td>
                </tr>

                <tr>
                    <td>Iuran Anggota</td>
                    <td>:</td>
                    <td>1 Th/ 2Th/ 3Th</td>
                </tr>
                <tr>
                    <td>Nomor Keanggotaan</td>
                    <td>:</td>
                    <td>PengProv</td>
                    <td></td>
                    <td>No. Klub</td>
                    <td>No. Keanggotaan Provinsi</td>
                </tr>
                <tr>
                    <td><i>(Diisi oleh PengProv)</i></td>
                    <td></td>
                    <td>02</td>
                    <td></td>
                    <td>003</td>
                    <td>00000</td>
                </tr>
                <tr>
                    <td><i>(Diisi olh PP. IMI)</i></td>
                    <td></td>
                    <td>No. Keanggotaan Nasional</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>1111111</td>
                </tr>
            </table>

            <div class="signature_form_kis_output">
                <div class="signature_form_content row_layout">
                    <div class="column_layout">
                        <div class="">
                            Mengetahui :
                            <br />
                            Pengurus Klub (Dibubuhi Stempel)
                            <br/>
                            ..........................................................
                            <br />
                        </div>
                        <div class="">
                            <br />
                            <br />
                            <br />
                        </div>
                        <div class="">
                            ( __________________________ )
                        </div>
                        <div class="">
                            <p style="margin-left: 35px;">Tanda Tangan & Nama</p>
                        </div>
                    </div>
                    <div class="column_layout">
                            <img style="height: 4cm; width: 3cm;"
                                src="{{ public_path("uploads/".$pas_photo) }}" alt="photo register kis">
                    </div>
                    <div class="column_layout">
                        <div class="">
                            ______,________________
                        </div>
                        <div class="">
                            <p>Pemohon,</p>
                        </div>
                        <div class="">
                            <img height="60px" width="150px" src="{{ public_path("uploads/".$signature_pemohon) }}" alt="ttd_pemohon">
                        </div>
                        <div class=" signature_applicant">
                            ( Septian Putra Pratama )
                        </div>
                        <div class="">
                            <p>Tanda Tangan & Nama</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="signature_2_form_kis_output" style="margin-top: -40px;">

                <p style="text-align: center; margin-bottom: 0;">Menyetujui</p>

                <p style="text-align: center; text-decoration: underline;">PENGPROV IMI (Dibubuhi Stempel)</p>

                <div>
                    <br />
                    <br />
                </div>
                <div class="">
                    <p style="text-align: center; margin: 0;">( _______________________________ )</p>
                </div>

                <div class="">
                    <p style="text-align: center; margin: 0;">Tanda Tangan & Nama</p>
                </div>

                <div class="">
                    <p style=" text-align: center;">Tanggal ............................................</p>
                </div>
            </div>
        </main>
    </div>
</body>


</html>