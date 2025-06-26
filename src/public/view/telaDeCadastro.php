<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - MyFinance</title>
    <link rel="stylesheet" href="../styles/styleLogon.css">
</head>
<body>
    <main class="container">
        <section class="welcome-container">
            <h1>Crie sua conta no MyFinance</h1>
            <p>Gerencie suas finanças de forma simples e eficiente.</p>
            <p>Preencha os dados para se cadastrar.</p>
        </section>
        <section class="login-container">
            <form action="" method="post">
                <h1>Cadastro</h1>
                <div class="input-group">
                    <input type="text" id="nome" name="nome" required placeholder="Nome completo">
                    <input type="email" id="email" name="email" required placeholder="Email">
                    <input type="password" id="senha" name="senha" required placeholder="Senha">
                    <input type="password" id="confirmar_senha" name="confirmar_senha" required placeholder="Confirmar senha">
                </div>
                <button type="submit">Cadastrar</button>
                <a href="telaDeLogin.php">Já tem conta? Entrar</a>
            </form>
        </section>
    </main>
</body>
</html>