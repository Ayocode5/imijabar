<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageHomeItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_home_items', function (Blueprint $table) {
            $table->id();
            $table->text('seo_title');
            $table->text('seo_meta_description');
            $table->text('why_choose_title');
            $table->text('why_choose_subtitle');
            $table->text('why_choose_status');
            $table->text('special_title');
            $table->text('special_subtitle');
            $table->text('special_content');
            $table->text('special_btn_text');
            $table->text('special_btn_url');
            $table->text('special_yt_video');
            $table->text('special_bg');
            $table->text('special_video_bg');
            $table->text('special_status');
            $table->text('service_title');
            $table->text('service_subtitle');
            $table->text('service_status');
            $table->text('testimonial_title');
            $table->text('testimonial_subtitle');
            $table->text('testimonial_status');
            $table->text('testimonial_bg');
            $table->text('project_title');
            $table->text('project_subtitle');
            $table->text('project_status');
            $table->text('team_member_title');
            $table->text('team_member_subtitle');
            $table->text('team_member_status');
            $table->text('appointment_title');
            $table->text('appointment_text');
            $table->text('appointment_btn_text');
            $table->text('appointment_btn_url');
            $table->text('appointment_bg');
            $table->text('appointment_status');
            $table->text('latest_blog_title');
            $table->text('latest_blog_subtitle');
            $table->text('latest_blog_status');
            $table->text('newsletter_title');
            $table->text('newsletter_text');
            $table->text('newsletter_bg');
            $table->text('newsletter_status');
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
        Schema::dropIfExists('page_home_items');
    }
}
