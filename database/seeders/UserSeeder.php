<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;                    // importe la classe "User"
use Illuminate\Support\Facades\Hash;    // importe la "façade Hash" pour gérer le "hachage des mots de passe"
use Illuminate\Support\Str;             // importe la "classe Str" pour "générer des chaines aléatoires"


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ADMIN
        User::create([
            'nom'               => 'Admin',                     // valeur "Admin" pour colonne "nom"
            'prenom'            => 'Admin',                     // valeur "Admin" pour colonne "prenom"
            'password'          => Hash::make('Admin2023!'),    // valeur génère un hachage sécurisé du mot de passe "Admin2023!" en utilisant la classe Hash de Laravel pour colonne "password"
            'email'             => 'admin@admin.fr',            // valeur "admin@admin.fr" pour colonne "email"
            'email_verified_at' => now(),                       // assigne la date et l'heure actuelles à la colonne "email_verified_at", indique que l'adresse e-mail de l'utilisateur a été vérifiée à ce moment précis.
            'remember_token'    => Str::random(10),             // attribue une valeur aléatoire de 10 caractères générée par Str::random(10)
            'role_id'           => 2,                           // valeur "2" pour colonne "role_id"
        ]);

        // USER
        User::create([
            'nom'               => 'User',                      // valeur "User" pour colonne "nom"
            'prenom'            => 'User',                      // valeur "User" pour colonne "prenom"
            'password'          => Hash::make('User2023!'),     // valeur génère un hachage sécurisé du mot de passe "User2023!" en utilisant la classe Hash de Laravel pour colonne "password"
            'email'             => 'user@user.fr',              // valeur "user@user.fr" pour colonne "email"
            'email_verified_at' => now(),                       // assigne la date et l'heure actuelles à la colonne "email_verified_at", indique que l'adresse e-mail de l'utilisateur a été vérifiée à ce moment précis.
            'remember_token'    => Str::random(10),             // attribue une valeur aléatoire de 10 caractères générée par Str::random(10)
            'role_id'           => 1,                           // valeur "1" pour colonne "role_id"
        ]);

        User::factory(76)->create();                            // crée 76 instances de la classe méthode factory() et les insère dans la base de données
    }
}







