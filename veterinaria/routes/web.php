<?php

use App\Http\Controllers\usuarios\usuarioController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$mascota = [
    ['nombre' => 'gato1'],
    ['nombre' => 'gato12']
];

// Route::get('/home/{nombre?}', function ($nombre = 'invitad@') {
//     return view('home', ['nombre' => $nombre]);
//     //return "esto es una veterinaria";
// });
Route::get('/', homeController::class);

Route::get('about_me', function () {
    return "kevin yama programador web";
})->name("sobre-mi");

// Route::get('contactame', function () {
//     echo "<a href= '" .route('sobre-mi') ."'> conctactame </a> </br> ";
// });
// el signo de interrogacion es para que nosea abligatorio pasar un parametro
// pero tenemos que definir el parametro

// rutas para usuarios
Route::get('/usuarios/mostrar', [usuarioController::class, 'index'])->name('usuarios');
Route::get('/usuarios/mostrar/{id}', [usuarioController::class, 'show']);
Route::get('usuarios/crear', [usuarioController::class, 'crear']);

// rutas para mascotas
Route::view('/mascotas', 'mascotas',compact('mascota')) -> name("mascotas");

