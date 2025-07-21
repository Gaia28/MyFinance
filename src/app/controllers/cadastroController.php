<?php

class CadastroController{

    public function validarCamposCadastro($nome, $email, $senha, $confirmarSenha){
        $email = trim(filter_var($email, FILTER_SANITIZE_EMAIL));
        
        if (!$this->validarCampos($nome, $email, $senha, $confirmarSenha)) {
            $this->gerarErro("Preencha todos os campos!");
            exit;
        }

        if (!$this->validarEmail($email)) {
            $this->gerarErro("Formato de email inválido!");
            exit;
        }

        if (!$this->validarSenha($senha)) {
            $this->gerarErro("Sua senha deve ter pelo menos 6 caracteres!");
            exit;
        }

        if (!$this->validarConfirmarSenha($senha, $confirmarSenha)) {
            $this->gerarErro("As senhas não coincidem!");
            exit;
        }
        echo var_dump($nome, $email, $senha, $confirmarSenha);

        return true;

    }

    private function validarCampos($nome, $email, $senha, $confirmarSenha) {
        return !empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha);
    }
    private function validarEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    private function validarSenha($senha) {
        $senha = trim($senha);
        return strlen($senha) >= 6;
    }

    private function validarConfirmarSenha($senha, $confirmarSenha) {
        return $senha === $confirmarSenha;
    }

    private function gerarErro($mensagem) {
        echo "<script>
        sessionStorage.setItem('erroCadastro', '$mensagem');
        window.location.href = '/MyFinance/cadastro';
        </script>";
        exit;
    }

}
?>