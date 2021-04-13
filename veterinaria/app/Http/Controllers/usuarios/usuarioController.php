<?php

namespace App\Http\Controllers\usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index(){
        return view('usuarios.index');
    }
    public function crear(){
        return view('usuarios.crear');
    }
    public function show($usuario){
        return view('usuarios.show',compact('usuario'));
    }


}
