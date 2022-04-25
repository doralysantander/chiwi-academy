<?php

namespace App\Http\Controllers;



use App\Models\masterclass;
use App\Models\register;
use Illuminate\Http\Request;

class EventegisterController extends Controller
{

    public function find(){
        
    }

    public function create(Request $request ){
        
       /*  dd(request('masterclass_id')); */

        $request->validate([

            'masterclass_id' => 'required',
            

        ]);

        $event = new Register();
        $event->masterclass_id = request('masterclass_id');
        $event->user_id = auth()->user()->id;
        $event->save(); // se guarda el objeto 

        

        return redirect()->route('home.index');
    }
}
