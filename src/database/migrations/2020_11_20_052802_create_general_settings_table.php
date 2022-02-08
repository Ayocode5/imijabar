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
            $table->text('banner_home')->nullable();
            $table->text('banner_news')->nullable();
            $table->text('banner_event')->nullable();
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
