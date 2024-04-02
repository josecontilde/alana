<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string']
        ]);

        if( ! Auth::attempt($user, true)){
            throw ValidationException::withMessages([
                'password' => 'Verificar usuario y contraseña'
            ]);
        }

        return redirect(route('mensaje'));
    }
}
