<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return User[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if (User::create($request->all())) {
            return response()->json([
                'success' => 'Utilisateur créé avec succès'
            ], 200);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user)
    {
        if ($user->update($request->all())) {
            return response()->json([
                'success' => 'Utilisateur modifié avec succès'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
        if ( $user->delete()) {
            return response()->json([
                'success' => 'Utilisateur supprimé avec succès'
            ], 200);
        }
    }
}
