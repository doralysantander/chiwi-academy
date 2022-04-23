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

    public function profile(){
        $masterClases = Masterclass::all();

        return view('/livewire/profile',  compact('masterClases')); 
        
    }

    public function events(){
        $masterClases = Masterclass::all();

        return view('/table',  compact('masterClases')); 
        
    }


    public function createEvent(Request $request ){

        $request->validate([
            'title' => 'required|max:50',
            'fecha' => 'required',
            'hora' => 'required',
            'participantes' => 'required',
            'descripcion' => 'required|max:255',

        ]);

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

    public function update(Request $request, MasterClass $masterClass, ){
        $request->validate([
            'title' => 'required|max:50',
            'fecha' => 'required',
            'hora' => 'required',
            'participantes' => 'required',
            'descripcion' => 'required|max:255',


        ]);

        $masterClass->title = $request->title;
        $masterClass->fecha = $request->fecha;
        $masterClass->hora = $request->hora;
        $masterClass->descripcion = $request->descripcion;
        $masterClass->numero_participantes = $request->participantes;
        $masterClass->imagen_url = $request->imagen;
  
        $masterClass->save(); // se guarda el objeto

        return redirect()->route('table');
        
    }


    public function destroy(MasterClass $masterClass ){

        $masterClass->delete();
        return redirect()->route('table');

        
    }
}
