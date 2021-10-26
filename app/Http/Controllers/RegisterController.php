<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'pseudo' => ['required'],
            'phone' => ['required'],
        ]);

        User::create([
            'pseudo' => $request->pseudo,
            'phone' => $request->phone,
        ]);
    }

}
