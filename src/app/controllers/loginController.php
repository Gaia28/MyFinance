<?php
class LoginController {

    public function validarCampos($email, $senha) {

        if (empty($email) || empty($senha)) {
            echo "<script>alert('Preencha todos os campos!');</script>";
            return false;

         }elseif (!$this->validarEmail($email)) {
            return false;
            
        }else {

            echo "<script>alert('Login válido!');</script>";
            return true;
        }
    }

    private function validarEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Email inválido!');</script>";
            return false;
        }
        return true;

    }
}

?>

