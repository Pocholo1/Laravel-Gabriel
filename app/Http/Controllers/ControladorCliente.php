<?php


namespace App\Http\Controllers;
use App\Models\User;


class ControladorCliente extends Controller
{

    public function index(){
        $user = User::all();

        return view('index', array('clientes' => $user));
    }

    public function idusername($id){
        $user = User::find($id);
        return view('index.idusername', compact('index'));
    }

    public function cliente()
    {
        return view('index', ['clientes' => $this->clients]);
    }


    public function cedula($id)
    {
       return view ('details');
    }
}
