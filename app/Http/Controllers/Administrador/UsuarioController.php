<?php

namespace App\Http\Controllers\Administrador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioController extends Controller
{
   public function crearUsuario(Request $request){
      $nombre=$request->name;
      $apellido_paterno=$request->apellido_paterno;
      $apellido_materno=$request->apellido_materno;
      $fecha_nacimiento=$request->fecha_nacimiento;
      $sexo=$request->sexo;
      $email=$request->email;
      $password=$request->password;
      $id_municipio=$request->id_municipio;

      User::create(['name'=>$nombre,'apellido_paterno'=>$apellido_paterno,'apellido_materno'=>$apellido_materno,
      'fecha_nacimiento'=>$fecha_nacimiento,'sexo'=>$sexo,'email'=>$email,'password'=>$password,'id_municipio'=>$id_municipio
      ]);
   }

   public function listarUsuarios(){
      $usuario=User::all();
      return $usuario;
   }
}
