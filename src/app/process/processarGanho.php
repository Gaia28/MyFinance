<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
use App\controllers\ganhosController;


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $ganhosController = new ganhosController();
    $ganhosController->salvarGanho('ganhos',$descricao, $valor);
}


?>
