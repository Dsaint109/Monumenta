<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tag', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('tag_id')->unsigned();


            $table->foreign('product_id')->references('id')
                  ->on('product')
                  ->onDelete('cascade');

            $table->foreign('tag_id')->references('id')
                ->on('tag')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_tag');
    }
}
