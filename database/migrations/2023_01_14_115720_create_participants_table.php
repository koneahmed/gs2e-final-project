<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('date_naissance');
            $table->unsignedBigInteger('niveau_id')->nullable();
            $table->foreign('niveau_id')->references('id')->on('niveaux');
            $table->unsignedBigInteger('sexe_id')->nullable();
            $table->foreign('sexe_id')->references('id')->on('sexes');
            $table->string('contact');
            $table->string('email');
            $table->string('habitation');
            $table->string('information');
            $table->string('cv');
            $table->unsignedBigInteger('formation_id')->nullable();
            $table->foreign('formation_id')->references('id')->on('formations');
            $table->longText('motivation');
            $table->boolean('valide')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('participants');
    }
}
