<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/public/styles/stylePrincipal.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>home</title>
</head>
<body>
     <header>
        <a href="home">MyFinance</a> 
        <div class="perfil">
                <div class="foto-perfil">  
                   
                </div>
                <p>nome</p>

            </div>           
    </header>

    <main class="container">

        <section class="barra-lateral">
            
            <div class="opcao">
                <a href="registrarganhos"> Registrar ganhos</a> 
            </div>

            <div class="opcao">
                <p>Registrar ganhos</p>
            </div>

            <div class="opcao">
                <p>Registrar ganhos</p>
            </div>
            <div class="opcao" id="sair">
                <p>Sair</p>

        </section>

        <section class="itens-container">
           
            <div class="itens-grid">
                <div class="item-ganhos">
                    <p>Meus ganhos</p>
                    <h1>R$000.00</h1>
                </div>
                <div class="item-despesas">
                    <p>Minhas despesas</p>
                    <h1>R$000.00</h1>
                </div>

                <div class="grafico">
                    <p>Gráfico de despesas</p>
                    <canvas id="meuGrafico"></canvas>
                    <script src="src/public/script/chartJS.js"></script>

                </div>

                <div class="despesas-futuras">
                    <p>Minhas despesas futuras</p>
                    <h1>R$000.00</h1>

                </div>
            </div>
        </section>
    </main>
    
</body>
</html>