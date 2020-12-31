<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("sigle")->unique()->nullable();
            $table->string("logo")->unique()->nullable();
            $table->string("site_url")->unique()->nullable();
            $table->string("facebook")->unique()->nullable();
            $table->string("twitter")->unique()->nullable();
            $table->string("email")->unique()->nullable();
            $table->string("linkdln")->unique()->nullable();
            $table->string("contact")->unique()->nullable();
            $table->string("whatsapp")->unique()->nullable();
            $table->string("telegram")->unique()->nullable();
            $table->boolean("is_online")->default(true);

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
        Schema::dropIfExists('partenaires');
    }
}
