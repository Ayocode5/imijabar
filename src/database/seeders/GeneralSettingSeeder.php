<?php

namespace Database\Seeders;

use App\Models\Admin\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'login_bg' => 'login_bg.png',
            'top_bar_email' => 'ayocode.id@gmail.com',
            'top_bar_phone' => '081234567890',
            'footer_address' => "Jl. Batununggal Indah Raya No.81, Batununggal, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40267",
            'footer_email' => "ayocode.id@gmail.com",
            'footer_phone' => '081234567890',
            'footer_copyright' => '© Copyright 2022 IMI Jawa Barat | All Right Reserved',
            'footer_column1_heading' => 'Kantor Pusat',
            'footer_column2_heading' => 'Hubungi Kami',
            'footer_column3_heading' => 'IMI Jabar',
            'footer_column4_heading' => 'Optimization to Execellence.',
            'sidebar_total_recent_post' => 10,
            'theme_color' => '3D7CD6',
            'preloader_photo' => 'preloader.gif',
            'preloader_status' => 'Show',
            'sticky_header_status' => 'Show',
            'google_analytic_tracking_id' => 'UA-84213520-6',
            'google_analytic_status' => 'Show',
            'google_recaptcha_site_key' => '6LfzGuEZAAAAADZrHN3QDdPLYfS3I6BaKmjWjryh',
            'google_recaptcha_status' => 'Show',
            'tawk_live_chat_code' => "<script type='text/javascript'>
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement('script'),s0=document.getElementsByTagName('script')[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/5a7c31ded7591465c7077c48/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>",
            'tawk_live_chat_status' => 'Show',
            'cookie_consent_status' => 'Show',
            'banner_home' => 'banner_home.png',
            'banner_news' => 'banner_news.png',
            'banner_event' => 'banner_event.png'
        ]);
    }
}
