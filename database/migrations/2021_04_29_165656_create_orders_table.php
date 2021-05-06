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
            $table->string('customer_id',20);
            $table->string('cus_name',20);
            $table->string('cus_mobile',20);
            $table->string('cus_email',20);
            $table->string('cus_address',20);
            $table->string('order_date');
            $table->string('order_status',20);
            $table->string('total_products',35);
            $table->string('subtotal',50);
            $table->string('totalprice',50);
            $table->string('payment_status',20);
            $table->string('cash',50);
            $table->string('due',50);
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
