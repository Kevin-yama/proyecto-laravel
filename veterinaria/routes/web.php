<?php

use App\Http\Controllers\usuarios\usuarioController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\MascotaController;
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
Route::get('usuarios/crear', [usuarioController::class, 'vista_crear'])->name ('crear_usuario');
Route::post('usuarios/crear', [usuarioController::class, 'crear'])->name ('crear_usuario');
// rutas para mascotas
Route::get('/mascotas', [MascotaController::class, 'index']) -> name("mascotas");
Route::post('mascotas', [MascotaController::class, 'store']);

