<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MensajeController extends Controller
{
    public function show()
    {
        return view('usuarios.mensaje');
    }
    public function showMensaje()
    {
        // Obtener el usuario autenticado
    $usuario = Auth::user();
    
    // Obtener el mensaje del usuario
    $mensaje = $usuario->mensaje;

    // Pasar el mensaje a la vista
    return view('usuarios.showMensajes', ['usuario' => $usuario, 'mensaje' => $mensaje]);
    }
    public function send(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'identificador' => ['required', 'string', 'max:255'],
            'mensaje' => ['required', 'string']
        ]);

        try {
            $usuarioId = Auth::id();
            Mensaje::create([
                'nombreMensaje' => $request->nombre,
                'mensaje' => $request->mensaje,
                'nombreIdetificador' => $request->identificador,
                'user_id' => $usuarioId
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Su mensaje ya fue enviado.');
        }

        return redirect(route('home'))->with('alert', '¡Registro exitoso!');
    }
}
