<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - MyFinance</title>
    <link rel="stylesheet" href="src/public/styles/styleLogon.css">
</head>
<body>
    <main class="container">

        <section class="welcome-container">
            <h1>Welcome to MyFinance</h1>
            <p>Create your account and log in</p>
            <img src="src/public/assets/CreateAccount.svg" alt="create account image" class="logo">
        </section>

        <section class="login-container">
            <form class="form-content" action="" method="post">
                
                <div class="input-group">
                    <h1>Register</h1>
                    <div id="mensagem-erro" class="erro" style="color: red; text-align: center;"></div>

                    <input type="text" id="nome" name="nome" placeholder="Full Name">
                    <input type="email" id="email" name="email"  placeholder="Email">
                    <input type="password" id="senha" name="senha" placeholder="Password">
                    <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirm Password">

                    <button type="submit">Cadastrar</button>
                <p>Already have an account?<a href="telaDeLogin.php"> Enter</a></p>
                 </div>
                 </form>

        </section>
                
            
       
    </main>

     <script src="src/public/script/erros.js">

    </script>
</body>
</html>