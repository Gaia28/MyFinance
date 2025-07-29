<?php 
require_once __DIR__ . '/../../../vendor/autoload.php';
use App\controllers\loginController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $loginController = new LoginController();
    $loginController->validarCamposLogin($email, $senha);

}

?>