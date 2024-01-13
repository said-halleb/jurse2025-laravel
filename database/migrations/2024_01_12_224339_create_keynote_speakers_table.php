<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeynoteSpeakersTable extends Migration
{
    public function up()
    {
        Schema::create('keynote_speakers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->text('description');
            $table->string('website');
            // Ajoutez d'autres colonnes en fonction de vos besoins
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('keynote_speakers');
    }
}