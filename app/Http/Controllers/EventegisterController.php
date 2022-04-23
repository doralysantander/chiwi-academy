<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;

class EventegisterController extends Controller
{

    public function find(){
        
    }

    public function create(Request $request ){

        $request->validate([
            'title' => 'required|max:50',
            'fecha' => 'required',
            'hora' => 'required',
            'participantes' => 'required',
            'descripcion' => 'required|max:255',

        ]);

        $register = new Register();
        $register->title = $request->title;
        $register->fecha = $request->fecha;
        $register->hora = $request->hora;
        $register->descripcion = $request->descripcion;
        $register->numero_participantes = $request->participantes;
        $register->imagen_url = $request->imagen;

        $register->save(); // se guarda el objeto 

        return redirect()->route('table');
    }
}
