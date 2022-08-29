<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageKIS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [
            [
                'dynamic_page_name' => 'Kartu Izin Start',
                'dynamic_page_slug' => 'registration-kis-head-page',
                'dynamic_page_content1' => '<p>Berkas Persyarata Dan Tata Cara Pengajuan Kartu Izin Start Di IMI Jawa Barat.</p>',
                'dynamic_page_content2' => '<p>Saat ini fitur pendaftaran KIS (Kartu Izin Start) di website ini masih dalam tahap pengembangan, Untuk sementara anda bisa mendaftar melalui google form dengan mengklik tombol dibawah ini. Terima Kasih Atas Pengertiannya.</p>',
                'dynamic_page_link1' => 'https://www.imijabar.org/registration/kis/form',
                'dynamic_page_link2' => 'https://www.defualt-url.com',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],
            [
                'dynamic_page_name' => 'Berkas Persyaratan Pembuatan Kartu Izin Start',
                'dynamic_page_slug' => 'registration-kis-requirement-page',
                'dynamic_page_content1' => '<ol><li>Scan File KTP/SIM,
                </li><li>                Scan File Foto Pemohon,
                </li><li>                Surat Keterangan dari Orang Tua (bermaterai) bagi anak-anak yang berusia dibawah 17 tahun,
                </li><li>                Mempunyai KTA,
                </li><li>                Bukti Transfer Biaya Pembuatan KIS.</li></ol>',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],
            [
                'dynamic_page_name' => 'Tata Cara Pendaftaran Kartu Izin Start',
                'dynamic_page_slug' => 'registration-kis-howto-page',
                'dynamic_page_content1' => '<ol><li>Menyiapkan berkas yang disebutkan diatas,
                </li><li>                Melakukan pengisian berkas pada link berikut: bit.ly/Pendaftaran-KIS-IMIJABAR
                </li><li>                Melakukan pembayaran via transfer untuk biaya pendaftaran KIS sebesar 300.000 Rupiah,
                </li><li>                Melakukan konfirmasi pembayaran via Whatsapp.</li></ol><p><br></p><ul><li><b><font color="#000000" style=""><font style="">Catatan</font>:</font></b> Untuk Biaya Pendaftaran / Perpanjangan Kartu Tanda Anggota Ikatan Motor Indonesia adalah sebesar 150.000 Rupiah (Pendaftaran) &amp; 130.000 Rupiah (Perpanjangan), Pembayaran dapat dilakukan via transfer melalui nomor rekening Virtual Account yang akan otomotis tergenerate menuju Akun Bank QNB Indonesia milik Ikatan Motor Indonesia,<br></li></ul>',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],
            [
                'dynamic_page_name' => 'Registration KIS Success Page',
                'dynamic_page_slug' => 'registration-kis-page-success-section',
                'dynamic_page_content1' => 'Berhasil Mendaftarkan Kis, silahkan tunggu informasi selanjutnya melalui email',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => '',
            ],

        ];

        DB::table('dynamic_pages')->insert($sections);
    }
}
