<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->enum('type', ['percent', 'sale']);
            $table->string('content');
            $table->integer('percentage')->unsigned()->nullable();
            $table->integer('sale_one')->unsigned()->nullable();
            $table->integer('sale_two')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();



            $table->foreign('product_id')->references('id')
                  ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deals');
    }
}
