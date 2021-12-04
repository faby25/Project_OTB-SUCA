<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', HomeController::class);

// Route::get('Usuarios', function(){
//     return "Bienvenido a la pagina Usuarios";
// });
// Route::get('Usuarios/{User}',function($user){
//     return "Bienvenido a tu perfil";
// });
// Route::get('Usuarios/create', function(){
//   return "En esta pagina podras a crear un Usuario";
// });

  Route::get('/', function(){
    return view('welcome');
  });

  Route::get('Notificaciones', function(){
    return view('Notificaciones');
  });
