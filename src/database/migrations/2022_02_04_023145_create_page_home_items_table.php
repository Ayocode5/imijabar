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

            $table->string('jumbotron_title')->default('This is Jumbotron');
            $table->text('jumbotron_detail')->nullable();
            $table->string('jumbotron_bg')->default('jumbotron.png');
            $table->boolean('jumbotron_status')->default(1);
            
            $table->string('news_title')->default('This is News Title');
            $table->unsignedInteger('news_total')->default(10);
            $table->boolean('news_status')->default(1);

            $table->string('events_title')->default('This is Event Title');
            $table->unsignedInteger('events_total')->default(20);
            $table->boolean('events_status')->default(1);

            $table->string('about_title')->default('This is About Title');
            $table->text('about_detail')->nullable();
            $table->boolean('about_status')->default(1);

            $table->string('gallery_title')->default('This is Gallery Title');
            $table->text('gallery_detail')->nullable();
            $table->boolean('gallery_status')->default(1);

            $table->string('committee_title')->default('This is Committe Title');
            $table->text('committee_detail')->nullable();
            $table->boolean('committee_status')->default(1);

            $table->string('newsletter_title')->default('This is Newsletter Title');
            $table->text('newsletter_detail')->nullable();
            $table->string('newsletter_bg')->default('newsletter.png');
            $table->boolean('newsletter_status')->default(1);

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
