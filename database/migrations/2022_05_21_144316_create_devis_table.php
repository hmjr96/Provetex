<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('idDevis');
            $table->enum('typeVisiteur',['client','prospect'])->default('prospect');
            $table->string('nomVisiteur');
            $table->string('nomContact');
            $table->string('email');
            $table->string('phone');
            $table->string('pays');
            $table->string('nbrPiece');
            $table->string('precision');
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
        Schema::dropIfExists('devis');
    }
}
