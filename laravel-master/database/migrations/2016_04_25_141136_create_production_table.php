<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('repository');
            $table->enum('repository_type', ['GIT', 'SVN'])->default('GIT');
            $table->timestamps();
        });
        Schema::create('labels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
            $table->string('desc')->comment('description for labels display on web');
            $table->enum('type', ['context', 'category', 'page', 'detail'])->default('detail')->comment('label type, used to generate file name');
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
        Schema::drop('labels');
        Schema::drop('products');
    }
}
