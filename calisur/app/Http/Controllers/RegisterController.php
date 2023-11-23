<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }
    public function store(Request $request){
        //Validacion
        $this->validate($request,[
            'name'=> 'required|max:30',
            'email'=> 'required|unique:users|email|max:60',
            'password'=> 'required|confirmed|min:6',
        ]);

         User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
         ]);
         //Autenticar usuario
         auth()->attempt($request->only('email','password'));
         

         //Redireccionar
         return redirect()->route('principal', ['user' => auth()->user()->name]);
    }
}