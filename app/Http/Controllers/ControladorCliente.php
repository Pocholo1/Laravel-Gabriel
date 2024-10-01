<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ControladorCliente extends Controller
{

    // public function index(){
    //     $user = User::all();

    //     return view('index', array('clientes' => $user));
    // }

    // public function idusername($id){
    //     $user = User::find($id);
    //     return view('index.idusername', compact('index'));
    // }

    // public function cliente()
    // {
    //     return view('index', ['clientes' => $this->clients]);
    // }


    // public function cedula($id)
    // {
    //    return view ('details');
    // }

    public function register(Request $request)
    {
        // Validación y lógica de registro
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'nombre' => $validatedData['nombre'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return response()->json(['message' => 'Usuario registrado exitosamente'], 201);
    }
}
