<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;

class IndexController extends Controller
{
   
    public function index() {
        $titulo = 'SENAI Brusque-SC';
        $rodape = date('Y').' Todos os direitos reservados';
        
        $caminho = '../storage/app';
        $log = new LogConsulta($caminho);
        $data = $log->registrar();
      
        
        return view('site.index', compact('titulo', 'rodape'));
    }
    
}