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


Route::post("/auth",[AuthController::class,"auth"]);

Route::get("/login", function(){
    return view("login");
});

Route::get("/logout",function(){
    session()->flush();
    return redirect("/login");
});

Route::get('/', function () {
    if(session()->get("auth") == true){
        return view("home");
    }else{
        return view("login");
    }
});

Route::get("/home", function(){
    return view("home");
});

Route::resource('/usuarios', UsuariosController::class);
