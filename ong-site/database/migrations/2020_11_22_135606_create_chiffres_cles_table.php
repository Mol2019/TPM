<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiffresClesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chiffres_cles', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->text('description');
            $table->integer("valeur");
            $table->string('image');
            $table->string("statut");
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
        Schema::dropIfExists('chiffres_cles');
    }
}
