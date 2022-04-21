<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function data(){

        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El email o la contraseña son incorrectos', 
            ]);
        }else {
            if(auth()->user()->role == 'admin' ){
                return redirect()->route('table.index');
            }else{
                return redirect()->to('/');
            }
        }
        
    }



    public function destroy(){

        auth()->logout();

        return redirect()->to('/login');
    }
}
