<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageEORegistrationSeeder extends Seeder
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
                'dynamic_page_name' => 'Pendaftaran Event',
                'dynamic_page_slug' => 'registration-eo-page-head-section',
                'dynamic_page_content1' => '<p>Berkas Persyaratan Dan Tata Cara Pengajuan Izin Kegiatan/Lomba Otomotif Di IMI Jawa Barat</p>',
                'dynamic_page_content2' => '<p>Urus Surat Izin Kegiatan Otomotifmu Disini:</p>',
                'dynamic_page_link1' => 'https://www.imijabar.org/registration/eo/form',
                'dynamic_page_link2' => 'https://www.defualt-url.com',
                'dynamic_page_banner' => '',
            ],
            [
                'dynamic_page_name' => 'Berkas Persyaratan Pengajuan Izin Kegiatan',
                'dynamic_page_slug' => 'registration-eo-page-requirement-section',
                'dynamic_page_content1' => '<ol>
                <li>Foto Copy AD/ART yang disahkan notaris dalam bentuk Hard Copy.</li>
                <li>Memiliki Kedudukan Sekertariat,</li>
                <li>Memiliki Anggota Terdaftar pada IMI (minimal 15 orang).</li>
                </ol>',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => '',
            ],
            [
                'dynamic_page_name' => 'Tata Cara Penngajuan Izin Kegiatan',
                'dynamic_page_slug' => 'registration-eo-page-howto-section',
                'dynamic_page_content1' => '<ol><li>Menyiapkan berkas yang disebutkan diatas,
                </li><li>                Melakukan pengisian berkas pada link berikut: bit.ly/Pendaftaran-KIS-IMIJABAR
                </li><li>                Melakukan pembayaran via transfer untuk biaya pendaftaran KIS sebesar 300.000 Rupiah,
                </li><li>                Melakukan konfirmasi pembayaran via Whatsapp.</li></ol><p><b><br></b></p><p><b>Catatan: </b>Untuk Biaya Pendaftaran / Perpanjangan Kartu Tanda Anggota Ikatan Motor Indonesia adalah sebesar 150.000 Rupiah (Pendaftaran) &amp; 130.000 Rupiah (Perpanjangan), Pembayaran dapat dilakukan via transfer melalui nomor rekening Virtual Account yang akan otomotis tergenerate menuju Akun Bank QNB Indonesia milik Ikatan Motor Indonesia,<br></p>',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => '',
            ],
            [
                'dynamic_page_name' => 'Registration EO Success Page',
                'dynamic_page_slug' => 'registration-eo-page-success-section',
                'dynamic_page_content1' => 'Berhasil Mendaftarkan Event, silahkan tunggu informasi selanjutnya melalui email',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => '',
            ],

        ];

        DB::table('dynamic_pages')->insert($sections);
    }
}
