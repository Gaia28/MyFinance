<?php 
session_start();
require_once __DIR__ . '/../../../database/dataTransfer.php';

class loginController {

    private $dadosSanitizados = [];

    public function validarCamposLogin($email, $senha) {
        $this->dadosSanitizados = [
            'email' => $this->sanitizeFields($email),
            'senha' => $this->sanitizeFields($senha)
        ];

        foreach ($this->dadosSanitizados as $key => $value) {
            empty($value) ? $this->gerarErro("Preencha todos os campos!") : null;
        }

        if (!filter_var($this->dadosSanitizados['email'], FILTER_VALIDATE_EMAIL)) {
            $this->gerarErro("Formato de email inválido!");
        }
        $this->validarLogin();

    }
    private function validarLogin(){
        $email = $this->dadosSanitizados['email'];
        $senha = $this->dadosSanitizados['senha'];

        $dataTransfer = new DataTransfer();

       if($dataTransfer->verifyData($email, 'usuarios','email') 
        && $dataTransfer->verifyData($senha, 'usuarios','senha') == $senha){
            $_SESSION['usuario'] = $email; 
            $_SESSION['senha'] = $senha; 
            echo "<script> window.location.href = '/MyFinance/home';</script>";

        } else {
            $this->gerarErro("Email ou senha incorretos!");

       }
    }

    private function sanitizeFields($field) {
        return htmlspecialchars(strip_tags(trim($field)));
    }

    private function gerarErro($mensagem) {
        echo "<script>
        sessionStorage.setItem('erroLogin', '$mensagem');
        window.location.href = '/MyFinance/login';
        </script>";
        exit;
    }
}
?>