<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobnews', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("salaire");
            $table->text("description");
            $table->date("date_debut");
            $table->date("date_end");
            $table->boolean("is_online")->default(false);

            $table->unsignedBigInteger("jobcategorie_id")->index();
            $table->unsignedBigInteger("contrat_id")->index();

            $table->foreign("jobcategorie_id")
                  ->on("jobcategories")->references('id')
                  ->onDelete("cascade")
                  ->onUpdate("cascade");

            $table->foreign("contrat_id")
                  ->on("contrats")->references('id')
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
        Schema::dropIfExists('jobnews');
    }
}
