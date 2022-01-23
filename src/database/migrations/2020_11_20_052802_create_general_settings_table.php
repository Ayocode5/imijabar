<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('favicon');
            $table->text('login_bg');
            $table->text('top_bar_email')->nullable();
            $table->text('top_bar_phone')->nullable();
            $table->text('top_bar_social_status');
            $table->text('top_bar_login_status');
            $table->text('top_bar_registration_status');
            $table->text('top_bar_cart_status');
            $table->tinyInteger('sidebar_total_recent_post');
            $table->text('theme_color');
            $table->text('footer_column1_heading');
            $table->text('footer_column2_heading');
            $table->text('footer_column3_heading');
            $table->text('footer_column4_heading');
            $table->text('footer_address');
            $table->text('footer_email');
            $table->text('footer_phone');
            $table->text('footer_copyright');
            $table->text('preloader_photo');
            $table->text('preloader_status');
            $table->text('sticky_header_status');
            $table->text('google_analytic_tracking_id');
            $table->text('google_analytic_status');
            $table->text('tawk_live_chat_code');
            $table->text('tawk_live_chat_status');
            $table->text('cookie_consent_status');
            $table->text('google_recaptcha_site_key');
            $table->text('google_recaptcha_status');
            $table->text('banner_about');
            $table->text('banner_service');
            $table->text('banner_service_detail');
            $table->text('banner_blog');
            $table->text('banner_blog_detail');
            $table->text('banner_category');
            $table->text('banner_project');
            $table->text('banner_project_detail');
            $table->text('banner_team_member');
            $table->text('banner_team_member_detail');
            $table->text('banner_photo_gallery');
            $table->text('banner_video_gallery');
            $table->text('banner_faq');
            $table->text('banner_product');
            $table->text('banner_product_detail');
            $table->text('banner_contact');
            $table->text('banner_search');
            $table->text('banner_cart');
            $table->text('banner_checkout');
            $table->text('banner_login');
            $table->text('banner_registration');
            $table->text('banner_forget_password');
            $table->text('banner_customer_panel');
            $table->text('banner_career');
            $table->text('banner_job');
            $table->text('banner_job_application');
            $table->text('banner_term');
            $table->text('banner_privacy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_settings');
    }
}
