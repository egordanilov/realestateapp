<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        
        if (auth()->attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ])) {
            return redirect()->home();
        } else {
            return redirect()->back();
        }
    }
}
