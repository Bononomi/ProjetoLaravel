<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;

class ProdutoController extends Controller{
    
    public function produto(){
        $titulo = 'SENAI Brusque-SC';
        $rodape = date('Y').' Todos os direitos reservados';
        
         $caminho = '../storage/app';
        $log = new LogConsulta($caminho);
        $data = $log->registrar();
        
        
        return view('site.produto',compact('titulo', 'rodape'));
    }
}


