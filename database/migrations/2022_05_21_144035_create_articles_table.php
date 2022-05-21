<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('idArticle');
            $table->string('nom');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('idCategorieidCategorie')->nullable();
           $table->unsignedBigInteger('idImage')->nullable();
           $table->unsignedBigInteger('idColor')->nullable();
           $table->unsignedBigInteger('idOrder')->nullable();
           $table->foreign('idCategorie')->references('idCategorie')->on('categories')->onDelete('SET NULL');
           $table->foreign('idImage')->references('idImage')->on('images')->onDelete('SET NULL');
           $table->foreign('idColor')->references('idColor')->on('colors')->onDelete('SET NULL');
           $table->foreign('idOrder')->references('idOrder')->on('orders')->onDelete('SET NULL');
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
        Schema::dropIfExists('articles');
    }
}
