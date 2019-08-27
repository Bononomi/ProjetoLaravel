<?php

namespace App\Util;

class LogConsulta {

    private $caminho;

    public function __construct($caminho) {
        $this->caminho = $caminho;
    }
    
    public function registrar($fotmato = 'n'){
         if($formato = 'n'){
            $data= date('d/m/Y H:i');
        }else if ($formato = 't'){
            $data = time();
        }else{
            $data = "Parâmetro Inválido";
        }
        
        if(file_exists($this->caminho.'/log_geral.txt')){
            
            $dadosAtuais = $this->capturar();
            $ip = $this->capturar();
            $dadosAtuais .= $ip."\n".$data;
            $this->gravarArquivo($ip, $dadosAtuais);
            
        }else{
            $this->gravarArquivo($data);
        }
               
        
        return $data;
        
    }
    
    private function gravarArquivo($data) {
        file_put_contents($this->caminho.'/log_geral.txt', $data);
        
    }
    
    public function capturar(){
        
        $dados = file_get_contents($this->caminho.'/log_geral.txt');
        return $dados;
        
    }
    
    public function ip(){
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
}
