<?php

namespace App\Http\Controllers;


use App\Usuario;

class UsuarioController extends Controller
{

    /**
     *
     * Funcao para retornar uma string de usuario.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $usuario = new Usuario;

        $user = $usuario->getUsuario();
        $lista = Usuario::listaUsuarios();

        return view('usuario.index', compact('user','lista'));
    }
}
