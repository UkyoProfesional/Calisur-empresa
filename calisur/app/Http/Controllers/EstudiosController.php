<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiosController extends Controller
{
    public function index(){
        return view('estudios');
    }
}
