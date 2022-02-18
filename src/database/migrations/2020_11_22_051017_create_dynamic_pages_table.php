<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDynamicPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamic_pages', function (Blueprint $table) {
            $table->id();
            $table->text('dynamic_page_name');
            $table->text('dynamic_page_slug');
            $table->text('dynamic_page_content1')->nullable();
            $table->text('dynamic_page_content2')->nullable();
            $table->text('dynamic_page_link1')->nullable();
            $table->text('dynamic_page_link2')->nullable();
            $table->text('dynamic_page_banner')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
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
        Schema::dropIfExists('dynamic_pages');
    }
}
