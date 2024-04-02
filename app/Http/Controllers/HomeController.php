<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            $userRole = Auth::user()->role;
            if ($userRole === 'admin') {
                return view('layout.alana-layout');
            } elseif ($userRole === 'participante') {
                $usuarios = User::with('mensaje')->get();
                return view('usuarios.showMensajesTodos', compact('usuarios'));
            }
        }
    }
}
