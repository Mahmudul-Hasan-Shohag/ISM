<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashmemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashmemos', function (Blueprint $table) {
           // $table->id();
            $table->string('customer_name',20);
            $table->string('address',30);
            $table->string('mobile',30);
            $table->string('product_id',30);
            $table->string('product_name',30);
            $table->string('product_quantity',30);
            $table->string('unit_price',20);
            $table->string('total_price',30);
            $table->string('discount',30);
            $table->string('cash',30);
            $table->string('due',30);
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
        Schema::dropIfExists('cashmemos');
    }
}
