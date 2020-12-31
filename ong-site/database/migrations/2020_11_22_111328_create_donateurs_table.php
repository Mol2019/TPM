<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donateurs', function (Blueprint $table) {
            $table->id();
            $table->string("identite");
            $table->integer("montant");
            $table->string("fonction")->nullable();
            $table->string("site_url")->unique()->nullable();
            $table->string("facebook")->unique()->nullable();
            $table->string("twitter")->unique()->nullable();
            $table->string("email")->unique()->nullable();
            $table->string("linkdln")->unique()->nullable();
            $table->string("contact")->unique()->nullable();
            $table->string("whatsapp")->unique()->nullable();
            $table->string("telegram")->unique()->nullable();
            $table->unsignedBigInteger("nationalite_id")->index();

            $table->foreign("nationalite_id")
                  ->on("nationalites")->references('id')
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

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
        Schema::dropIfExists('donateurs');
    }
}
