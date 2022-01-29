<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->text('event_name');
            $table->text('event_slug');
            $table->text('event_content');
            $table->text('event_content_short');
            $table->date('event_start_date');
            $table->date('event_end_date');
            $table->enum('event_status', ['rejected','approved','applying'])->nullable();
            $table->text('event_location');
            $table->text('event_map');
            $table->text('event_video')->nullable();
            $table->text('event_featured_photo');
            $table->text('seo_title')->nullable();
            $table->text('seo_meta_description')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->timestamp('applying_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('events');
    }
}
