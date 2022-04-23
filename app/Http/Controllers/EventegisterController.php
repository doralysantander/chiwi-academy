<?php

namespace App\Http\Controllers;

use App\Models\masterclass;
use App\Models\register;
use Illuminate\Http\Request;

class EventegisterController extends Controller
{

    public function find(){
        
    }

    public function createEvent(Request $request ){
        
        
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


    public function destroy(Request $request){
        

        $request->validate([

            'masterclass_id' => 'required',
            

        ]);
       
        $master_id = request('masterclass_id');

        $id = auth()->user()->id;

       
        Register::where('user_id', $id )->where('masterclass_id', $master_id )->delete();

        
        return redirect()->route('home.index');

        
    }

    public function profile(){
        $id = auth()->user()->id;
        $master = Register::all()->where('user_id',$id );

        //dd($master);

        return view('/livewire/profile',  compact('master')); 
        
    }
}