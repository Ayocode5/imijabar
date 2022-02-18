<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageKTA extends Seeder
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
                'dynamic_page_name' => 'Kartu Tanda Anggota',
                'dynamic_page_slug' => 'registration-kta-head-page',
                'dynamic_page_content1' => '<p>Berkas Persyarata Dan Tata Cara Pengajuan Kartu Tanda Anggot Di IMI Jawa Barat.</p>',
                'dynamic_page_content2' => '<p>Saat ini fitur pendaftaran KIS (Kartu Tanda Anggot) di website ini masih dalam tahap pengembangan, Untuk sementara anda bisa mendaftar melalui google form dengan mengklik tombol dibawah ini. Terima Kasih Atas Pengertiannya.</p>',
                'dynamic_page_link1' => 'https://www.default-url.com',
                'dynamic_page_link2' => 'https://www.defualt-url.com',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],
            [
                'dynamic_page_name' => 'Berkas Persyaratan Pembuatan Kartu Tanda Anggota',
                'dynamic_page_slug' => 'registration-kta-requirement-page',
                'dynamic_page_content1' => '<p>Untuk Berkas Persyaratan &amp; Pendaftaran Kartu Tanda Anggota Ikatan Motor Indonesia dapat dilakukan melalui aplikasi IMI Online yang dapat didownload di Google Play Store &amp; App Store, Berikut link mendownload aplikasi IMI Online: </p><p>PlayStore: <a href="goo.gl/mNgiAQ" target="_blank">goo.gl/mNgiAQ</a> | AppStore: <a href="goo.gl/7B1myK" target="_blank">goo.gl/7B1myK</a></p>',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],
            [
                'dynamic_page_name' => 'Tata Cara Pendaftaran Kartu Tanda Anggota',
                'dynamic_page_slug' => 'registration-kta-howto-page',
                'dynamic_page_content1' => '<p>Untuk Tata Cara Pendaftaran Kartu Tanda Anggota Ikatan Motor Indonesia melalui aplikasi IMI online dapat diliat pada video tutorial berikut ini: </p><p>Member baru : <a href="https://www.youtube.com/watch?v=djsGIHGVzak" target="_blank">https://www.youtube.com/watch?v=djsGIHGVzak</a> </p><p>Perpanjangan : <a href="https://www.youtube.com/watch?v=aXBBNiTyDis&amp;t=8s" target="_blank">https://www.youtube.com/watch?v=aXBBNiTyDis&amp;t=8s</a> </p><h4></h4><h5></h5><h3><ul><li>Catatan: Untuk Biaya Pendaftaran / Perpanjangan Kartu Tanda Anggota Ikatan Motor Indonesia adalah sebesar 150.000 Rupiah (Pendaftaran) &amp; 130.000 Rupiah (Perpanjangan), Pembayaran dapat dilakukan via transfer melalui nomor rekening Virtual Account yang akan otomotis tergenerate menuju Akun Bank QNB Indonesia milik Ikatan Motor Indonesia,</li></ul></h3>',
                'dynamic_page_content2' => '',
                'dynamic_page_link1' => '',
                'dynamic_page_link2' => '',
                'dynamic_page_banner' => 'http://pictures/1.png',
            ],

        ];

        DB::table('dynamic_pages')->insert($sections);
    }
}
