<?php

use Illuminate\Database\Seeder;

class LivrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * para executar a factory → factory('caminho do arquivo');
     *
     * @return void
     */
    public function run()
    {
        //DB::table('livros')->insert(['titulo'=>'Primeiro Livro',
        //    'descricao'=> 'Descricao do primeiro Livro']);

        //procedimento para criar itens ficticios
        factory(\App\Livro::class, 50)->create();
    }
}
