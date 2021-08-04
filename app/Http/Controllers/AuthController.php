<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\UsuariosModel;

class AuthController extends Controller{
    
    public function auth(Request $request){

        $email  = $request->input("username");
        $pass   = $request->input("pass");

        $user = UsuariosModel::where("usuario_email",$email)->first();
        

        if(Crypt::decrypt($user->usuario_pass) == $pass){
            $data = [
                "auth"      => true,
                "nombre"    => $user->usuario_nombre1." ".$user->usuario_apellido1,
                "email"     => $user->usuario_email
            ];
            session($data);
            return redirect("/home");
        }else{
            return redirect("/login");
        }
    }

}
