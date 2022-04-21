<?php

namespace App\Http\Controllers;

use App\Models\masterclass;
use Illuminate\Http\Request;

class MasterclassController extends Controller
{
    public function index(){
        $master = Masterclass::paginate();

        return $master;  // se retorna la wista  con view(vista, compact('variable de consulta'))
    }


    public function create_master(Request $request ){

        $masterClass = new Masterclass();


        $masterClass->fecha = $request->fecha;
        $masterClass->hora = $request->hora;
        $masterClass->fecha = $request->fecha;
        $masterClass->descripcion = $request->descripcion;
        $masterClass->numero_participantes = $request->participantes;
        $masterClass->imagen_url = $request->imagen;
  



        $masterClass->save(); // se guarda el objeto 

        return redirect()->route('/');
    }


    public function update_master($id ){

        $masterClass = Masterclass::find($id);


        // $masterClass->fecha = $request->fecha;
        // $masterClass->hora = $request->hora;
        // $masterClass->fecha = $request->fecha;
        // $masterClass->descripcion = $request->descripcion;
        // $masterClass->numero_participantes = $request->participantes;
        // $masterClass->imagen_url = $request->imagen;
  



        return $masterClass; // se retorna el objeto 
    }
}
