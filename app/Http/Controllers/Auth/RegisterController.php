<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __invoke() {
        $this->middleware('guest');
    }

    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {

        //validate
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed'
        ]);
        //create user
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);

        //login
        if (auth()->attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ])) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back();
        }
    }

}
