<?php
namespace App\controllers;

use Database\dataTransfer;


class GanhosController{

    private $dadosSanitizados = [];


    public function salvarGanho($table, $descricao,$valor) {
        $this->dadosSanitizados = [
            'descricao'=>$this->sanitizeFields($descricao),
            'valor'=> $this->sanitizeFields($valor)
        ];

        $dataTransfer = new dataTransfer();
        $dataTransfer->inserFinance($table, $this->dadosSanitizados['descricao'], $this->dadosSanitizados['valor']);
    
    }

    private function sanitizeFields($fields){
        return htmlspecialchars(strip_tags(trim($fields)));
    }
}
?>