<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\LogConsulta;


class InstController extends Controller{
    
    public function inst(){
        $titulo = 'SENAI Brusque-SC';
        $rodape = date('Y').' Todos os direitos reservados';
        
        $caminho = '../storage/app';
        $log = new LogConsulta($caminho);
        $data = $log->registrar();
        
        return view('site.inst',compact('titulo', 'rodape'));
    }
}

