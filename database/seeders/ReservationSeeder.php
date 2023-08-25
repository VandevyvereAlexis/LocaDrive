<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// importe la classe 'DB' du namespace 'Illuminate\Support\Facades'. Permet d'utiliser les fonctionnalités de la classe 'DB' sans devoir spécifier le namespace complet à chaque fois.
use Illuminate\Support\Facades\DB;
use App\Models\Forfait;             // importe la classe "Forfait"
use App\Models\Vehicule;            // importe la classe "Vehicule"

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // boucle "for" itère de 1 à 76 (77 exclus) pour générer des réservations. 
        for($i = 1; $i <77; $i++)                                                 
        {
            // dans chaque itération, j'insère une nouvelle entrée dans la table 'reservations'.
            DB::table('reservations')->insert([
                'vehicule_id'   => rand(1 , Vehicule::count()),     // défini comme un ID de véhicule aléatoire entre 1 et le nombre total de véhicules enregistrés.
                'user_id'       => $i,                              // défini comme la valeur actuelle de $i
                'forfait_id'    => rand(1 , Forfait::count()),      // défini comme un ID de forfait aléatoire entre 1 et le nombre total de forfaits enregistrés.
                'prix'          => rand(32, 684),                   // défini comme un montant de prix aléatoire entre 32 et 684.
            ]);
        }
    }
}



