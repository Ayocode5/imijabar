<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->text('product_name');
            $table->text('product_slug')->nullable();
            $table->text('product_old_price')->nullable();
            $table->text('product_current_price');
            $table->smallInteger('product_stock');
            $table->text('product_content');
            $table->text('product_content_short');
            $table->text('product_return_policy')->nullable();
            $table->text('product_featured_photo');
            $table->smallInteger('product_order')->default(0);
            $table->text('product_status');
            $table->text('seo_title');
            $table->text('seo_meta_description');
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
        Schema::dropIfExists('products');
    }
}
