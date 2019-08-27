<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstController extends Controller{
    
    public function inst(){
        $titulo = 'SENAI Brusque-SC';
        $rodape = date('Y').' Todos os direitos reservados';
        
        return view('site.inst',compact('titulo', 'rodape'));
    }
}

