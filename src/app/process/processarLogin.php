<?php 
require_once "../controllers/loginController.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $loginController = new LoginController();
    $loginController->validarCamposLogin($email, $senha);

}

?>