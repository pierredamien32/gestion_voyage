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
        Schema::create('sejours', function (Blueprint $table) {
            $table->id('id_sejour');
            $table->date('debut');
            $table->date('fin');

            $table->unsignedBigInteger('id_voyageur');
            $table->foreign('id_voyageur')->references('id_voyageur')->on('voyageurs')->onDelete('cascade');

            $table->unsignedBigInteger('code');
            $table->foreign('code')->references('code')->on('logements')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sejours');
    }
};
