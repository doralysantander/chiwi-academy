<?php

namespace App\Http\Controllers;

use App\Models\masterclass;
use Illuminate\Http\Request;

class MasterclassController extends Controller
{
    public function home(){
        $masterClases = Masterclass::paginate(5);
        return view('home',  compact('masterClases'));
    }

    public function index(){
        $master = Masterclass::paginate();

        return $master;  // se retorna la wista  con view(vista, compact('variable de consulta'))
        
    }

    public function events(){
        $masterClases = Masterclass::all();

        return view('/table',  compact('masterClases')); 
        
    }


    public function createEvent(Request $request ){

        $masterClass = new Masterclass();

        $masterClass->title = $request->title;
        $masterClass->fecha = $request->fecha;
        $masterClass->hora = $request->hora;
        $masterClass->descripcion = $request->descripcion;
        $masterClass->numero_participantes = $request->participantes;
        $masterClass->imagen_url = $request->imagen;
  



        $masterClass->save(); // se guarda el objeto 

        return redirect()->route('table');
    }


    public function edit(MasterClass $masterClass ){

        return  view('/editEvent', compact('masterClass')); // se retorna el objeto 
    }
}
