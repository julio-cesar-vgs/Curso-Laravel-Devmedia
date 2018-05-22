<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;

class AlunoController extends Controller
{

    public function index()
    {
        return "Index de Aluno " . '<a href="' . route('livro.index') . '">Livro</a>';
    }

}
