<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("variant")->nullable();
            $table->integer("quantity");
            $table->string("name");
            $table->text("description");
            $table->boolean("is_preorder")->nullable();
            $table->unsignedBigInteger("order_id");
            $table->index("order_id");
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer("price");
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
        Schema::dropIfExists('order_details');
    }
}
