<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageClubRegistration extends Seeder
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
                'dynamic_page_name' => 'Pendaftaran Klub',
                'dynamic_page_slug' => 'registration-club-head-page',
                'dynamic_page_content1' => '<p>Berkas Persyarata Dan Tata Cara Pendaftaraan Klub Di IMI Jawa Barat.</p>',
                'dynamic_page_content2' => '<p>Saat ini fitur pendaftaran Klub di website ini masih dalam tahap pengembangan, Untuk sementara anda bisa mendaftar melalui google form dengan mengklik tombol dibawah ini. Terima Kasih Atas Pengertiannya.</p>',
                'dynamic_page_link1' => 'https://www.default-url.com',
                'dynamic_page_link2' => 'https://www.defualt-url.com',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],
            [
                'dynamic_page_name' => 'Berkas Persyaratan Pendaftaran Klub',
                'dynamic_page_slug' => 'registration-club-requirement-page',
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
                'dynamic_page_name' => 'Tata Cara Pendaftaran Klub',
                'dynamic_page_slug' => 'registration-club-howto-page',
                'dynamic_page_content1' => '<ol><li>Menyiapkan berkas yang disebutkan diatas,
                </li><li>                Melakukan pengisian berkas pada link berikut: bit.ly/Pendaftaran-KIS-IMIJABAR
                </li><li>                Melakukan pembayaran via transfer untuk biaya pendaftaran KIS sebesar 300.000 Rupiah,
                </li><li>                Melakukan konfirmasi pembayaran via Whatsapp.</li></ol><p><b><br></b></p><p><b>Catatan: </b>Untuk Biaya Pendaftaran / Perpanjangan Kartu Tanda Anggota Ikatan Motor Indonesia adalah sebesar 150.000 Rupiah (Pendaftaran) &amp; 130.000 Rupiah (Perpanjangan), Pembayaran dapat dilakukan via transfer melalui nomor rekening Virtual Account yang akan otomotis tergenerate menuju Akun Bank QNB Indonesia milik Ikatan Motor Indonesia,<br></p>',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],

        ];

        DB::table('dynamic_pages')->insert($sections);
    }
}
