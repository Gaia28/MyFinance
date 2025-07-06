<?php
class LoginController {

   public function validarCamposLogin($email, $senha) {
    if (!$this->validarCampos($email, $senha)) {
     echo "<script>
        sessionStorage.setItem('erroLogin', 'preencha todos os campos!');
        window.location.href = '/MyFinance/login';
        </script>";
        exit;
    }

    if (!$this->validarEmail($email)) {
        echo "<script>
        sessionStorage.setItem('erroLogin', 'Utilize um E-mail válido');
        window.location.href = '/MyFinance/login';
        </script>";
        exit;
    }

    if (!$this->validarSenha($senha)) {
       echo "<script>
        sessionStorage.setItem('erroLogin', 'Sua senha deve ter no mínimo 6 caracteres!');
        window.location.href = '/MyFinance/login';
        </script>";
        exit;
    }
//adicionar aqui a lógica de autenticação, como verificar o email e senha no banco de dados
    return true;
}


    private function validarCampos($email, $senha) {
        return !empty($email) && !empty($senha);
    }

    private function validarEmail($email) {
        $email = trim(filter_var($email, FILTER_SANITIZE_EMAIL));
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function validarSenha($senha) {
        $senha = trim($senha);
        return strlen($senha) >= 6;
    }

}
?>
