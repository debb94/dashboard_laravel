<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\MyController;
use App\Models\UsuariosModel;
use Illuminate\Support\Facades\Crypt;

class UsuariosController extends MyController{

    public function index(){
        if($this->checkSession()){
            $users = UsuariosModel::all();
            $data = array();
            $data['users'] = $users;
            return view("usuarios",$data);
        }else{
            return redirect("/");
        }
    }

    public function create(){
        if($this->checkSession()){
            $data = array();
            $data['screen'] = "Crear Usuario";
            $data['estados'] = [
                0 => "Inactivo",
                1 => "Activo"
            ];

            $data["roles"] = [
                "Administrador" => "Administrador",
                "Cliente"       => "Cliente"
            ];
            return view("usuarioscreate",$data);
        }else{
            return redirect("/");
        }
    }

    public function store(Request $request){
        if($this->checkSession()){
            $user = $request->all();
            $request->validate([
                "usuario_nombre1"       => "required|min:2",
                "usuario_apellido1"     => "required|min:2",
                "usuario_email"         => "required|min:10",
                "usuario_rol"           => "required",
                "usuario_estado"        => "required"
            ]);
            unset($user['_token']);
            unset($user['_method']);

            // default password 12345678
            $user['usuario_pass'] = Crypt::encrypt("12345678");

            $result = UsuariosModel::create($user);
            $users = UsuariosModel::all();
            $data = array();
            $data['users'] = $users;
            return view("usuarios",$data);
        }else{
            return redirect("/");
        }
    }

    public function show($id){
        if($this->checkSession()){
            $users = UsuariosModel::find($id);
            $data = array();
            $data['user'] = $users;
            $data['screen'] = "Ver usuario - ".$users["usuario_nombre1"]." ".$users["usuario_apellido1"];
            return view("usuariosview",$data);
        }else{
            return redirect("/");
        }
    }

    public function edit($id){
        if($this->checkSession()){
            $users = UsuariosModel::find($id);
            $data = array();
            $data['user'] = $users;
            $data['screen'] = "Editar usuario - ".$users["usuario_nombre1"]." ".$users["usuario_apellido1"];

            $data['estados'] = [
                0 => "Inactivo",
                1 => "Activo"
            ];

            $data["roles"] = [
                "Administrador" => "Administrador",
                "Cliente"       => "Cliente"
            ];
            return view("usuariosedit",$data);
        }else{
            return redirect("/");
        }
    }

    public function update(Request $request, $id){
        if($this->checkSession()){
            $user = $request->all();

            $request->validate([
                "usuario_nombre1"       => "required|min:2",
                "usuario_apellido1"     => "required|min:2",
                "usuario_email"         => "required|min:10",
                "usuario_rol"           => "required",
                "usuario_estado"        => "required"
            ]);
            unset($user['_token']);
            unset($user['_method']);

            UsuariosModel::where("usuario_id",$id)->update($user);
            $users = UsuariosModel::all();
            $data = array();
            $data['users'] = $users;
            return view("usuarios",$data);
        }else{
            return redirect("/");
        }
    }

    public function destroy($id){
        if($this->checkSession()){
            $user = UsuariosModel::find($id);
            $user->delete();

            $users = UsuariosModel::all();
            $data = array();
            $data['users'] = $users;
            return view("usuarios",$data);
        }else{
            return redirect("/");
        }
    }
}
