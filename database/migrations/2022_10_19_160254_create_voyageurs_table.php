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
        Schema::create('voyageurs', function (Blueprint $table) {
            $table->id('id_voyageur'); // Clé primaire avec auto-incrémentation
            $table->string('nom');
            $table->string('prenom');
            $table->string('ville');
            $table->string('région');
            $table->enum('sexe', ['masculin', 'féminin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyageurs');
    }
};
