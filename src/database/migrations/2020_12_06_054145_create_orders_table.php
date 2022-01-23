<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->text('customer_name');
            $table->text('customer_email');
            $table->text('customer_type');
            $table->text('billing_name');
            $table->text('billing_email');
            $table->text('billing_phone');
            $table->text('billing_country');
            $table->text('billing_address');
            $table->text('billing_state');
            $table->text('billing_city');
            $table->text('billing_zip');
            $table->text('shipping_name');
            $table->text('shipping_email');
            $table->text('shipping_phone');
            $table->text('shipping_country');
            $table->text('shipping_address');
            $table->text('shipping_state');
            $table->text('shipping_city');
            $table->text('shipping_zip');
            $table->text('order_note')->nullable();
            $table->text('txnid');
            $table->text('shipping_cost')->nullable();
            $table->text('coupon_code')->nullable();
            $table->text('coupon_discount')->nullable();
            $table->text('paid_amount');
            $table->text('fee_amount');
            $table->text('net_amount');
            $table->text('card_last4')->nullable();
            $table->text('card_expiry_month')->nullable();
            $table->text('card_expiry_year')->nullable();
            $table->text('payment_method');
            $table->text('payment_status');
            $table->text('order_no');
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
        Schema::dropIfExists('orders');
    }
}
