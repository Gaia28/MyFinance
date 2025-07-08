<?php
class LoginController {

   public function validarCamposLogin($email, $senha) {
    if (!$this->validarCampos($email, $senha)) {
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
//adicionar aqui a lógica de autenticação, como verificar o email e senha no banco de dados
    echo "<script> window.location.href = '/MyFinance/home';
    </script>";
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
    
    private function gerarErro($mensagem) {
        echo "<script>
        sessionStorage.setItem('erroLogin', '$mensagem');
        window.location.href = '/MyFinance/login';
        </script>";
        exit;
    }

}
?>
