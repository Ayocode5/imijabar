<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code', 100);
            $table->string('coupon_type', 30);
            $table->string('coupon_discount', 10);
            $table->smallInteger('coupon_maximum_use');
            $table->smallInteger('coupon_existing_use');
            $table->string('coupon_start_date', 10);
            $table->string('coupon_end_date', 10);
            $table->string('coupon_status', 20);
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
        Schema::dropIfExists('coupons');
    }
}
