<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function register () {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {
        $request->validate([
            'firstName' => 'required|max: 255',
            'lastName' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min: 6|max: 255',
            'confirm-password' => 'required|same:password',
            // 'phoneNumber' => 'required|numeric|digits:12',
            // 'DOB' => 'required|date|before_or_equal:today',
            // 'gender' => 'required|in:male,female'
        ]);

        
        User::create([
            'firstName' => $request -> firstName,
            'lastName' => $request -> lastName,
            'email' => $request -> email,
            'password' => $request -> password,
            // 'phoneNumber' => $request -> phoneNumber,
            // 'DOB' => $request -> DOB,
            // 'gender' => $request -> gender
        ]);
        
        return redirect('/login');
    }


}
