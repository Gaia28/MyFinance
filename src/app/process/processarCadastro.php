<?php
require_once "../controllers/cadastroController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $confirmarSenha = $_POST['confirmar_senha'] ?? '';

    $cadastroController = new CadastroController();
    $cadastroController->validarCampos($nome, $email, $senha, $confirmarSenha);
}

?>