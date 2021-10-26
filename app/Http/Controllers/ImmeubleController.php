<?php

namespace App\Http\Controllers;

use App\Immeuble;
use Illuminate\Http\Request;

class ImmeubleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $immeubles = Immeuble::all();
        return $immeubles->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if (Immeuble::create($request->all())) {
            return response()->json([
                'success' => 'Immeuble créé avec succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Immeuble  $immeuble
     * @return Immeuble
     */
    public function show(Immeuble $immeuble)
    {
        return $immeuble;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Immeuble  $immeuble
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Immeuble $immeuble)
    {
        if ($immeuble->update($request->all())) {
            return response()->json([
                'success' => 'Immeuble modifié avec succès'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Immeuble  $immeuble
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Immeuble $immeuble)
    {
        if ( $immeuble->delete()) {
            return response()->json([
                'success' => 'Immeuble supprimé avec succès'
            ], 200);
        }
    }
}
