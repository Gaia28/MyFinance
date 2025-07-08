<?php

$url = strtolower(trim($_GET['url'] ?? ''));

switch ($url) {
    case 'login':
        require_once __DIR__ . '/src/public/view/telaDeLogin.php';
        break;
    case 'cadastro':
        require_once __DIR__ . '/src/public/view/telaDeCadastro.php';
        break;
    case 'home':
        require_once __DIR__ . '/src/public/view/telaPrincipal.php';
        break;
    default:
        header('Location: /MyFinance/login');
        exit;
}
?>
