<?php

namespace App\Http\Controllers;

use App\Models\Mascota as ModelsMascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{
    public function store(Request $req){


        request()->validate([
            'name' => 'required',
            'tipo_animal' => 'required'
        ]);
        return 'datos validados';
        //return $req->get('name');
    }
    public function index(){
        //$mascota = DB::table('mascotas')->get();
//        $mascota = DB::select('select * from "mascotas"');
        $mascota = ModelsMascota::get();
        return view('mascotas',compact('mascota'));
    }
}
