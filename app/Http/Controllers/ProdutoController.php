<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{


    function getIndex(){
        return "Produto";
    }

    function  getLista(){
        return "Lista de Produtos";
    }

    function  postLista(){
        return "Post Lista de Produtos";
    }


}
