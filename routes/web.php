<?php

use App\Http\Controllers\AdminPostController;

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

  // Route::get('/', function(){
  //   return view('welcome');
  // });

  Route::get('Notificaciones', function(){
    return view('Notificaciones');
  });

  Route::get('/', function(){
    return view('posts',[
      'posts'=>App\Models\Post::latest()->get()//all()//with('category','user')->//to always charge the category and user
    ]);
  });

Route::get('posts/{post:slug}',function(App\Models\Post $post){
  return view('post',[
    'post'=>$post
  ]);
});

Route::get('categories/{category:slug}',function(App\Models\Category $category){
  return view('posts',[
    'posts'=>$category->posts
  ]);
});

Route::get('users/{user:username}',function(App\Models\User $user){
  //dd($user);
  return view('posts',[
    'posts'=>$user->posts
  ]);
});






Route::get('admin/posts',[AdminPostController::class,'index'])->middleware('admin');
