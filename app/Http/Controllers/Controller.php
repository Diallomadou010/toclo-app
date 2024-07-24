<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string|min:8|max:255',
        'type_utilisateur' => 'required|in:client,prestataire',
    ]);

    $user = User::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'type_utilisateur' => $request->type_utilisateur,
    ]);

    return response()->json(['message' => 'Utilisateur créé avec succès', 'user' => $user], 201);
}

}
