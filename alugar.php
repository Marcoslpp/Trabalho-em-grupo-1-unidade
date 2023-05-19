<!DOCTYPE html>
<!-- essa é uma página de venda(aluguel) nota: Lauanda-->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo/style.css" rel="stylesheet">
    <title>ToolsApp</title>
</head>
<body>
    <header>

    </header>
    <main id="caixa">
        <div class="principal">
            <section class="caixa-filha1">
                <img src="imagens/ferramentas/lavadora.png" id="produto">
            </section>
            <form action="script.php" method="get" class="caixa-filha2">
                <h4 class="nome-produto">Lavadora de alta pressão</h4>
                <div class="caixinha">
                    <div>
                        <label>Período de dias
                            <input type="number" name="quantidadedias" min="1" class="dias" required>
                        </label>
                    </div>
                    <div>
                        <h4>Total:</h4>
                        <h5 class="valor">19.99 R$</h5>
                    </div>
                </div>
                <p class="descricao">
                    <input type="checkbox" style="display: inline;" required> Ao clicar em alugar você está ciente do comprometimento e a política de privacidade da "ToolsApp" com seus dados
                </p>
            <div class="bts">
                <button class="btn5">Adicionar ao carrinho</button>
                <button class="btn6">Alugar</button>
            </div>
                
        </form>
        </div>
    </main>
</body>
</html>