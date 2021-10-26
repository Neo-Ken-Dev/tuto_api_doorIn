<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $account = Account::all();
        return $account->toJson(JSON_PRETTY_PRINT);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if (Account::create($request->all())) {
            return response()->json([
                'success' => 'Account créé avec succès'
            ], 200);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return Account
     */
    public function show(Account $account)
    {
        return $account;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Account $account)
    {
        if ($account->update($request->all())) {
            return response()->json([
                'success' => 'Account modifié avec succès'
            ], 200);
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Account $account)
    {
        if ( $account->delete()) {
            return response()->json([
                'success' => 'Account supprimé avec succès'
            ], 200);
        }
    }
}
