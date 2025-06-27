<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MyFinance</title>
    <link rel="stylesheet" href="../../public/styles/styleLogon.css">
</head>
<body>
    <main class="container">
        <section class="welcome-container">
            <h1>Welcome to MyFinance</h1>
            <p>Manage your finances simply and efficiently.</p>
            <img src="../assets/logo.svg" alt="" class="logo">

        </section>
        <section class="login-container">
            <div class="form-content">
                <form action="../../app/controllers/logonController.php" method="post">
                    
                    <div class="input-group">
                        <h1>Login</h1>
                        <input type="email" id="email" name="email" placeholder="Email">
                        <input type="password" id="senha" name="senha" placeholder="Senha">
                          <button type="submit">Entrar</button>
                    <p>Don't have an account? <a href="telaDeCadastro.php"> Register</a></p> 
                    </div>
                  
                </form>

            </div>

        </section>

    </main>
    
</body>
</html>