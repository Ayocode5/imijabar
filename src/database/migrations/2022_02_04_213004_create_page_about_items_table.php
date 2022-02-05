<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAboutItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_about_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('detail')->nullable();

            $table->string('heading1')->nullable();
            $table->text('body1')->nullable();

            $table->string('heading2')->nullable();
            $table->text('body2')->nullable();

            $table->string('heading3')->nullable();
            $table->text('body3')->nullable();

            $table->string('heading4')->nullable();
            $table->text('body4')->nullable();

            $table->string('heading5')->nullable();
            $table->text('body5')->nullable();

            $table->string('heading6')->nullable();
            $table->text('body6')->nullable();

            $table->string('heading7')->nullable();
            $table->text('body7')->nullable();

            $table->string('heading8')->nullable();
            $table->text('body8')->nullable();

            $table->string('heading9')->nullable();
            $table->text('body9')->nullable();

            $table->string('heading10')->nullable();
            $table->text('body10')->nullable();

            $table->string('heading11')->nullable();
            $table->text('body11')->nullable();

            $table->text('banner1')->nullable();
            $table->text('banner2')->nullable();
            $table->text('banner3')->nullable();

            $table->boolean('status');
            $table->string('seo_title')->nullable();
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
        Schema::dropIfExists('page_about_items');
    }
}
