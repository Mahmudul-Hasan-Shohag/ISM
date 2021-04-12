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
            $table->id();
            $table->date('date');
            $table->string('customer_name',50);
            $table->string('customer_id',50)->nullable();
            $table->string('product_name',50);
            $table->string('product_id',50);
            $table->string('quantity',50);
            $table->string('unit_price',100);
            $table->string('discount',100)->nullable();
            $table->string('cash',100)->nullable();
            $table->string('due',100)->nullable();
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
