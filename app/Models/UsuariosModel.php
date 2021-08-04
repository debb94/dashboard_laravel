<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    use HasFactory;

    protected   $table              ="usuarios";
    protected   $primaryKey         ="usuario_id";
    public      $incrementing       =true;
    public      $timestamps         =false;

    protected $fillable = [
        "usuario_nombre1",
        "usuario_nombre2",
        "usuario_apellido1",
        "usuario_apellido2",
        "usuario_email",
        "usuario_pass",
        "usuario_rol",
        "usuario_estado"
    ];

}
