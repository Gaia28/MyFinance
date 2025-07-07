<?php
class LoginController {

    public function validarCamposLogin($email, $senha) {
        if (
            !$this->validarCampos($email, $senha) || 
            !$this->validarEmail($email) || 
            !$this->validarSenha($senha)
        ){
            return false;
        }
        echo "<script>alert('Campos validados com sucesso!');</script>";
        return true;
    }

    private function validarCampos($email, $senha) {
        if (empty($email) || empty($senha)) {
            echo "<script>alert('Preencha todos os campos!');</script>";
            return false;
        }
        return true;
    }

    private function validarEmail($email) {
        $email = trim(filter_var($email, FILTER_SANITIZE_EMAIL));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Email inválido!');</script>";
            return false;
        }
        return true;
    }

    private function validarSenha($senha) {
        $senha = trim($senha);
        if (strlen($senha) < 6) {
            echo "<script>alert('A senha deve ter pelo menos 6 caracteres!');</script>";
            return false;
        }
        return true;
    }

}
?>
