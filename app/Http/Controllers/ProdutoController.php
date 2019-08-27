<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller{
    
    public function produto(){
        $titulo = 'SENAI Brusque-SC';
        $rodape = date('Y').' Todos os direitos reservados';
        
        return view('site.produto',compact('titulo', 'rodape'));
    }
}


