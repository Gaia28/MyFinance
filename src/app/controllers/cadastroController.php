<?php
namespace App\controllers;

use Database\DataTransfer;

class CadastroController{

    private $dadosSanitizados = [];

    public function validarCampos($nome, $email, $senha, $confirmarSenha){

       $this->dadosSanitizados = [
            'nome' => $this->sanitizeFields($nome),
            'email' => $this->sanitizeFields($email),
            'senha' => $this->sanitizeFields($senha),
            'confirmar_senha' => $this->sanitizeFields($confirmarSenha)
       ];

        foreach($this->dadosSanitizados as $key => $value){
            empty($value) ? $this->gerarErro("Preencha todos os campos!") : null;
            var_dump($key, $value);
            
        }
        if (!filter_var($this->dadosSanitizados['email'], FILTER_VALIDATE_EMAIL)) {
            $this->gerarErro("Formato de email inválido!");
        }
        if (strlen($this->dadosSanitizados['senha']) < 6) {
            $this->gerarErro("Sua senha deve ter pelo menos 6 caracteres!");
        }
        if ($this->dadosSanitizados['senha'] !== $this->dadosSanitizados['confirmar_senha']) {
            $this->gerarErro("As senhas não coincidem!");
        }
        if($this->verificarEmailnoBanco()){
            $this->gerarErro("Email já cadastrado!");
        }else{
            $this->salvarDadosnoBanco();
        }


    }
    private function verificarEmailnoBanco() {
        $email = $this->dadosSanitizados['email'];
        $dataTransfer = new DataTransfer();
        if ($dataTransfer->verifyData($email, 'usuarios', 'email')) {
            $this->gerarErro("Email já cadastrado!");
        }
        
      
    }
    //adicionar criptografia de senha
    private function salvarDadosnoBanco() {
        $fullname = $this->dadosSanitizados['nome'];
        $email = $this->dadosSanitizados['email'];
        $password = $this->dadosSanitizados['senha'];

        $dataTransfer = new DataTransfer();
        $dataTransfer->insertUser($fullname, $email, $password);
        
        echo "<script> window.location.href = '/MyFinance/login';</script>";
      
    }
    
//Sanitiza os campos de entrada
    private function sanitizeFields($field){
        return htmlspecialchars(strip_tags(trim($field)));
    }
   
    // gerar erro
    private function gerarErro($mensagem) {
        echo "<script>
        sessionStorage.setItem('erroCadastro', '$mensagem');
        window.location.href = '/MyFinance/cadastro';
        </script>";
        exit;
    }
    
}
?>
