<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/public/styles/stylePrincipal.css">
    <title>Ganhos</title>
</head>
<body>
    <header>
        <a href="home">MyFinance</a>
        <div class="perfil">
            <div class="foto-perfil"></div>
            <p>nome</p>
        </div>
    </header>
    <main class="container">
        <section class="itens-container">

            <div class="itens-grid">
                <div class="item-ganhos">
                    <p>Ganhos Totais</p>
                    <h1>R$000.00</h1>
                </div>
                <div class="item-despesas" id="registrar-ganho">
                    <button class="button-ganho" id="btModalGanhos" type="button">
                    <p>novo ganho</p>    
                    <h2>+</h2>
                    </button>
                </div>
            </div>
            <dialog id="ganho-modal">
                <form method="dialog">
                    <p id="btsair">x</p>
                    <h2>Registrar Ganho</h2>
                    <label for="descricao">Descrição:</label>
                    <input type="text" id="descricao" name="descricao" required>
                    <label for="valor">Valor:</label>
                    <input type="number" id="valor" name="valor" required>
                    <button type="submit">Registrar</button>
                </form>
            </dialog>
        </section>
    </main>
    <script src="src/public/script/modal.js"></script>
</body>
</html>