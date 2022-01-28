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
            $table->text('logo')->nullable();
            $table->text('favicon')->nullable();
            $table->text('login_bg')->nullable();
            $table->text('top_bar_email')->nullable();
            $table->text('top_bar_phone')->nullable();
            $table->text('top_bar_social_status')->nullable();
            $table->text('top_bar_login_status')->nullable();
            $table->text('top_bar_registration_status')->nullable();
            $table->text('top_bar_cart_status')->nullable();
            $table->tinyInteger('sidebar_total_recent_post')->nullable();
            $table->text('theme_color')->nullable();
            $table->text('footer_column1_heading')->nullable();
            $table->text('footer_column2_heading')->nullable();
            $table->text('footer_column3_heading')->nullable();
            $table->text('footer_column4_heading')->nullable();
            $table->text('footer_address')->nullable();
            $table->text('footer_email')->nullable();
            $table->text('footer_phone')->nullable();
            $table->text('footer_copyright')->nullable();
            $table->text('preloader_photo')->nullable();
            $table->text('preloader_status')->nullable();
            $table->text('sticky_header_status')->nullable();
            $table->text('google_analytic_tracking_id')->nullable();
            $table->text('google_analytic_status')->nullable();
            $table->text('tawk_live_chat_code')->nullable();
            $table->text('tawk_live_chat_status')->nullable();
            $table->text('cookie_consent_status')->nullable();
            $table->text('google_recaptcha_site_key')->nullable();
            $table->text('google_recaptcha_status')->nullable();
            $table->text('banner_about')->nullable();
            $table->text('banner_service')->nullable();
            $table->text('banner_service_detail')->nullable();
            $table->text('banner_blog')->nullable();
            $table->text('banner_blog_detail')->nullable();
            $table->text('banner_category')->nullable();
            $table->text('banner_project')->nullable();
            $table->text('banner_project_detail')->nullable();
            $table->text('banner_team_member')->nullable();
            $table->text('banner_team_member_detail')->nullable();
            $table->text('banner_photo_gallery')->nullable();
            $table->text('banner_video_gallery')->nullable();
            $table->text('banner_faq')->nullable();
            $table->text('banner_product')->nullable();
            $table->text('banner_product_detail')->nullable();
            $table->text('banner_contact')->nullable();
            $table->text('banner_search')->nullable();
            $table->text('banner_cart')->nullable();
            $table->text('banner_checkout')->nullable();
            $table->text('banner_login')->nullable();
            $table->text('banner_registration')->nullable();
            $table->text('banner_forget_password')->nullable();
            $table->text('banner_customer_panel')->nullable();
            $table->text('banner_career')->nullable();
            $table->text('banner_job')->nullable();
            $table->text('banner_job_application')->nullable();
            $table->text('banner_term')->nullable();
            $table->text('banner_privacy')->nullable();
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
