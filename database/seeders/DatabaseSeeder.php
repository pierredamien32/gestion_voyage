<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Logement;
use App\Models\Sejour;
use App\Models\Voyageur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Logement::create([
        //     "nom"=> "Villa Belle Vue",
        //     "capacite"=> 4,
        //     "type"=> "Villa",
        //     "lieu"=> "Paris, France",
        //     "photo"=> "155845.jpg",
        //     "disponibilite"=> "oui"
        // ]);

        // Logement::create([
        //     "nom"=> "Chalet Montagnard",
        //     "capacite"=> 8,
        //     "type"=> "Maison",
        //     "lieu"=> "Chamonix, France",
        //     "photo"=> "1599545.jpg",
        //     "disponibilite"=> "non"
        // ]);

        // Voyageur::create([
        //     "nom"=> "DEO",
        //     "prenom"=> "John",
        //     "région"=> "kpota",
        //     "ville"=> "Akpakpa",
        //     "sexe"=> "Masculin",
        // ]);

        // Voyageur::create([
        //     "nom"=> "TOSSOU",
        //     "prenom"=> "Jean",
        //     "région"=> "kpota",
        //     "ville"=> "Adjaha",
        //     "sexe"=> "Féminin",
        // ]);

        // Sejour::create([
        //     "debut"=> "2022-06-05",
        //     "fin"=> "2023-08-02",
        //     "id_voyageur" => 5,
        //     "code"=> 1
        // ]);

        // Sejour::create([
        //     "debut"=> "2022-10-06",
        //     "fin"=> "2023-11-04",
        //     "id_voyageur" => 4,
        //     "code"=> 3
        // ]);

        Sejour::create([
            "debut"=> "2022-10-06",
            "fin"=> "2023-11-04",
            "id_voyageur" => 6,
            "code"=> 4
        ]);
    }


}
