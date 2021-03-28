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
            $table->integer("user_id")->references('id')->on('users')->onDelete('cascade')->index();
            $table->integer("amount");
            $table->integer("status_id");
            $table->integer("shipping_id")->nullable();
            $table->timestamp("paid_date")->nullable();
            $table->timestamp("shipped_date")->nullable();
            $table->timestamp("closed_date")->nullable();
            $table->string("ordernumber");
            $table->text("address_billing")->nullable();
            $table->text("address_delivery")->nullable();
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
        Schema::dropIfExists('orders');
    }
}
