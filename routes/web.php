<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AuthController;


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

// authentication - usado para verificar el login del usuario
Route::post("/auth",[AuthController::class,"auth"]);
// retorna vista de login
Route::get("/login", function(){
    return view("login");
});
// elimina la session del usuario y redirige a login
Route::get("/logout",function(){
    session()->flush();
    return redirect("/login");
});
/* 
    ruta principal de la aplicacion verifica si el usuario
    esta logueado en el sistema o no y lo envia a la vista 
    correspondiente
*/
Route::get('/', function () {
    if(session()->get("auth") == true){
        return view("home");
    }else{
        return view("login");
    }
});
// home del aplicativo muestra una breve bienvenida
Route::get("/home", function(){
    return view("home");
});
// usuarios
Route::resource('/usuarios', UsuariosController::class);
