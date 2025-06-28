<?php 
require_once "../controllers/logonController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $loginController = new LoginController();
    $loginController->validarCampos($email, $senha);

}

?>