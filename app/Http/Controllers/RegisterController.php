<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {
        $validatedData = $request->validate(
            [
                'firstName' => 'required|max: 255',
                'lastName' => 'required|max:255',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min: 6|max: 255',
                'confirm-password' => 'required|same:password',
            ],
            [
                'firstName.required' => 'Please enter your first name.',
                'firstName.max' => 'First name must not exceed 255 characters.',

                'lastName.required' => 'Please enter your last name.',
                'lastName.max' => 'Last name must not exceed 255 characters.',

                'email.required' => 'Please enter an email',
                'email.email' => 'Email must be in a valid format.',
                'email.unique' => 'This email is already taken.',

                'password.required' => 'Please enter a password.',
                'password.min' => 'Password minimum is 6 characters.',
                'password.max' => 'Password must not exceed 255 characters.',

                'confirm-password.required' => 'Please confirm you password.',
                'confirm-password.same' => 'Confirm password does not match with password.'
            ]
        );

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Successful! Please Login');
    }
}
