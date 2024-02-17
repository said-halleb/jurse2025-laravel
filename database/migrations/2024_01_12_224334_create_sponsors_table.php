<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->id();
    
            $table->string('src'); // Le chemin de l'image du sponsor
            $table->string('alt'); // Texte alternatif de l'image
            $table->integer('order'); // Ordre d'affichage des sponsors
            // Ajoutez d'autres colonnes en fonction de vos besoins
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}
