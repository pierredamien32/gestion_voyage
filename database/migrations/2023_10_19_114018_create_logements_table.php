<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logements', function (Blueprint $table) {
            $table->id('code'); // Clé primaire auto-incrémentée
            $table->string('nom'); // Colonne pour le nom du logement
            $table->integer('capacite'); // Colonne pour la capacité du logement (assurez-vous que c'est le type approprié)
            $table->string('type'); // Colonne pour le type du logement
            $table->string('lieu'); // Colonne pour le lieu du logement
            $table->string('photo')->nullable(); // Colonne pour le chemin de la photo du logement (nullable)
            $table->enum('disponibilite', ['oui', 'non']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
};
