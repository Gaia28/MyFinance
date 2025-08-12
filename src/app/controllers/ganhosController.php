<?php
namespace App\controllers;

use Database\dataTransfer;

class GanhosController {

    private $dadosSanitizados = [];

    public function salvarGanho($table, $descricao, $valor, $id) {
        $this->dadosSanitizados = [
            'descricao' => $this->sanitizeFields($descricao),
            'valor' => $this->sanitizeFields($valor)
        ];

        foreach ($this->dadosSanitizados as $key => $value) {
            if (empty($value)) {
                $this->gerarAlert("Preencha todos os campos!");
                return;
            }
        }

        $dataTransfer = new dataTransfer();

        if ($dataTransfer->inserFinance($table, $this->dadosSanitizados['descricao'], $this->dadosSanitizados['valor'], (int)$id)) {
            $this->gerarAlert("Ganho registrado com sucesso!");
        } else {
            $this->gerarAlert("Erro ao registrar ganho.");
        }
    }

    public function getGanhos($table, $id) {
        $dataTransfer = new dataTransfer();
        return $dataTransfer->getFinance($table, (int)$id);
        
    }

    private function sanitizeFields($fields) {
        return htmlspecialchars(strip_tags(trim($fields)));
    }

    private function gerarAlert($mensagem) {
        echo "<script>
            alert('$mensagem');
            window.location.href = 'registrarganhos';
        </script>";
        exit;
    }
}
?>
