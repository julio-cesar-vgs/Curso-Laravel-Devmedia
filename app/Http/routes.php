<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('contato', function () {
    return "Página de Contato!";
});

Route::post('contato', function () {
    return "Realizando um Post!";
});

Route::put('contato', function () {
    return "Realizando um Put!";
});

Route::delete('contato', function () {
    return "Realizando um Delete!";
});

Route::match(['get', 'post'], 'sobre', function () {
    return "Trabalhando com match!";
});

Route::any('todos', function () {
    $url = url('nova');
    return "Todos! " . $url;
});

Route::get('artigo/{id}', function ($id) {
    return "Artigo id: {$id}";
});


/**
 * Criar rota opcionais
 */
Route::get('produto/{id?}/cor/{cor?}', function ($id = 12, $cor = "red") {
    return "Produto id: {$id} Cor = {$cor}";
});


/**
 * Exemplo de utilização do apelido pelo link abaixo.
 *
 * Qualquer modificação que fizer na rota detalhe nao é refletido no link oferecido
 */
Route::get('link', ['as' => 'link', function () {
    return 'Link <a href="' . route('detalhe') . '">Detalhe</a>';
}]);

/**
 * Funcao para criar um apelido da rota, usamos isto para facilitar a manutencao do caminho sem afetar as rotas.
 * Na ocasiao o item importante fica proximo é o detalhe.
 */
Route::get('sobre/detalhe', ['as' => 'detalhe', function () {
    return "teste";
}]);

/**
 * Funcao para criar grupos de rotas, esse configuração ajuda a criar uma parte padrao. E o restante é
 * associado ao restante das funcoes abaixo.
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('contato', function () {
        return "Página de Admin Contato!";
    });
    Route::get('sobre', function () {
        return "Página de Admin Sobre!";
    });
    Route::get('configuracao', function () {
        return "Página de Admin Configuracao!";
    });
});


Route::get('aluno', 'Aluno\AlunoController@index');

Route::get('livro', ['uses' => 'LivroController@index', 'as' => 'livro.index']);


//Rota implicita
Route::controller('produto', 'ProdutoController');

Route::get('home', function () {

    $usuarios = array(
        ['nome' => 'Gustavo'],
        ['nome' => 'Ana'],
        ['nome' => 'Camila'],
        ['nome' => 'Pedro']
    );
    $livros = [];

    return view('home', compact('usuarios','livros'));
});

