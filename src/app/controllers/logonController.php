<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $camposLogon = [
        $email => $_POST['email'],
        $senha => $_POST['senha'],
    ];

}

 foreach ($camposLogon as $campo => $valor) {
        if (empty($valor)) {
            echo "O campo $campo não pode estar vazio.";
            exit;
        }
    }

?>