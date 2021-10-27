<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'pseudo' => ['required'],
            'bio' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'zipcode' => ['required'],
            'country' => ['required'],
            'password' => ['required'],
        ]);

        User::create([
            'pseudo' => $request->pseudo,
            'bio' => $request->bio,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
            'country' => $request->country,
            'password' => Hash::make($request->password)
        ]);
    }
}
