<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyFinance</title>
    <link rel="stylesheet" href="../styles/styleLogon.css">
</head>
<body>
    <main class="container">

        <div class="welcome-container">
            <h1>Bem-vindo ao MyFinance</h1>
            <p>Gerencie suas finanças de forma simples e eficiente</p>
        </div>

       <div class="form-container">

             <form class="form-content" action="../controller/loginController.php" method="POST">

            <h1>Login</h1>
            <div class="input-group">
                <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
            </div>
            
            <div class="input-group">
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>

            <button type="submit">Entrar</button>
            <p>Não tem uma conta? <a href="../view/telaDeCadastro.php">Cadastre-se</a></p>

        </form>
       </div>
    </main>
</body>
</html>