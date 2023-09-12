<?php

namespace App\Http\Controllers;

use App\Models\User;            // Importer la classe "User"
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user/edit', ['user' => $user]);    // Renvoie la vue "user/edit" avec les données de l'utilisateur.

        // Affiche le formulaire de modification de l'utilisateur spécifié en paramètre et renvoie la vue correspondante.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
