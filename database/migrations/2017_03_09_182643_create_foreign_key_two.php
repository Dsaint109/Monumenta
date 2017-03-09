<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyTwo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('shops', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')
                ->on('users')
                ->onUpdate('cascade');
        });

        Schema::table('products', function(Blueprint $table) {
            $table->foreign('shop_id')->references('id')->on('shops')
                ->onDelete('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onUpdate('cascade');
        });

        Schema::table('options', function(Blueprint $table) {
            $table->foreign('product_id')->references('id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Schema::table('option_values', function(Blueprint $table) {
            $table->foreign('option_id')->references('id')
                ->on('options')
                ->onUpdate('cascade');
        });

        Schema::table('deals', function (Blueprint $table){
            $table->foreign('product_id')->references('id')
                ->on('products');
        });

        Schema::table('product_tag', function (Blueprint $table){

            $table->foreign('product_id')->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('tag_id')->references('id')
                ->on('tags')
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
        //
        Schema::table('shops', function(Blueprint $table) {
            $table->dropForeign('shops_user_id_foreign');
        });

        Schema::table('products', function(Blueprint $table) {
            $table->dropForeign('products_shop_id_foreign');
            $table->dropForeign('products_category_id_foreign');
        });

        Schema::table('options', function(Blueprint $table) {
            $table->dropForeign('options_product_id_foreign');
        });

        Schema::table('option_values', function(Blueprint $table) {
            $table->dropForeign('option_values_option_id_foreign');
        });

        Schema::table('deals', function(Blueprint $table) {
            $table->dropForeign('deals_product_id_foreign');
        });

        Schema::table('product_tag', function (Blueprint $table){
            $table->dropForeign('product_tag_product_id_foreign');
            $table->dropForeign('product_tag_tag_id_foreign');
        });

    }


}
