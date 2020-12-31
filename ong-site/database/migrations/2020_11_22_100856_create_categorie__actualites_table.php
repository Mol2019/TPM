<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorieActualitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie__actualite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("categorie_id")->index("categorie_id index in categorie_actualite");
            $table->unsignedBigInteger("actualite_id")->index("actualite_id index in categorie_actualite");

            $table->foreign("categorie_id")
                  ->references('id')->on("categories")
                  ->onUpdate("cascade")
                  ->onDelete("cascade");

            $table->foreign("actualite_id")
                  ->references('id')->on("actualites")
                  ->onUpdate("cascade")
                  ->onDelete("cascade");
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
        Schema::dropIfExists('categorie__actualites');
    }
}
