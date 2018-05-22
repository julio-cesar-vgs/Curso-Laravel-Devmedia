<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NovaView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria uma nova view';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * Este comando funciona da seguinte forma.
     *
     * comando abaixo pega as informacoes da pasta resource + pasta views + nome do arquivo + blade.php + acrecentando informacoes do arquivo criado.
     *$fp = fopen(resource_path() . "\\views\\" . $view . ".blade.php", "w+");
     * @return mixed
     */
    public function handle()
    {
        $view = $this->argument('view');
        $fp = fopen(resource_path() . "\\views\\" . $view . ".blade.php", "w+");
        //commando abaixo ja adiciona um comentario ao usuario.
        fputs($fp, "{{-- Nova View --}}");
        fclose($fp);
        // mensagem que sera exibuda ao usuario.
        $this->info("View: {$view} criada com sucesso");

    }
}
