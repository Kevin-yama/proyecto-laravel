<?php

namespace App\Http\Controllers\usuarios;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function index(){
        $usuario = Usuario::get();
        return view('usuarios.index',compact('usuario'));

    }
    public function vista_crear(){
        return view('usuarios.crear');
    }
    public function editar($id){
        return view('usuario.editar');
    }
    public function show($usuario){
        return view('usuarios.show',compact('usuario'));
    }
    public function delete_user($id){
        Usuario::destroy($id);
        return redirect()->route('usuarios');

    }
    public function crear (){
        Usuario::create([
          'nombre' => request('nombre'),
          'celular' => request('celular_')
        ]);
        return redirect()->route('usuarios');
    }


}
