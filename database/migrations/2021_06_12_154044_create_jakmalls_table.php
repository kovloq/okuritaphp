<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJakmallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jakmalls', function (Blueprint $table) {
            $table->id();
            $table->string("url");
            $table->string("sku")->nullable();
            $table->string("is_stock")->nullable();
            $table->string("is_tokopedia")->nullable();
            $table->string("price")->nullable();
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
        Schema::dropIfExists('jakmalls');
    }
}
