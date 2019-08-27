<?php

namespace App\Util;

class LogConsulta {

    private $caminho;
    
    public function __construct($caminho) {
        $this->caminho = $caminho;
    }
    
    public function registrar($formato = 'n') {
        
        if ($formato == 'n') {
            $data = date('d/m/Y H:i');
        } else if ($formato == 't') {
            $data = time();
        } else {
            $data ="Parâmetro inválido";
        }
        
        
        if (file_exists($this->caminho.'/log_geral.txt')) {
            $dadosAtuais = $this->capturar();
            $ip = $_SERVER['REMOTE_ADDR']; 
            $endereco = $_SERVER['PHP_SELF'];
            $dadosAtuais .= "\n\n".$data."  |  ".$ip."  |  ".$endereco;
            $this->gravarArquivo($dadosAtuais);
        } else {
            $this->gravarArquivo($data);
        }
        
        return $data;
        
    }
    
    private function gravarArquivo($data) {
        file_put_contents
            ($this->caminho.'/log_geral.txt', $data);
    }
    
    public function capturar() {
        $dados = file_get_contents($this->caminho.'/log_geral.txt');
        return $dados;
    }
    
}