<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Util\LogConsulta;

class VerLog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verlog {formato? : Formato da data}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Possibilita ver o log de acesso da aplicação';

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
     * @return mixed
     */
    public function handle()
    {   
        $caminho = 'storage/app';
        $log = new LogConsulta($caminho);
        $data = $log->registrar();
        $this->info($data);
    }
}
