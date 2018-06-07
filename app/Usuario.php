<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{


    public function getUsuario(){
        return 'Retorno de usuario';
    }

    public static function listaUsuarios(){
        return 'Lista de Usuarios';
    }
}
