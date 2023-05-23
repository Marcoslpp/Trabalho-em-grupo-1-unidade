<?php
    require "dados.php";#importando dados.php

    $i = $_GET["i"];
    $indice = $ferramentas[$i];
?>
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
                <?php
                    if(isset($indice)){#se o indice for passado, mostre as informações
                ?>
            <section class="caixa-filha1">
                <img src="<?=$indice["imagem"]?>" id="produto">
            </section>
            <div class="caixa-filha2">
                <h4 class="nome-produto"><?=$indice["nome"]?></h4>
                <div class="caixinha">
                    <div>
                        <label>Período de dias
                            <input type="number" value="1" name="quantidadedias" min="1" class="dias" required>
                        </label>
                    </div>
                    <div>
                        <h4>Valor diario:</h4>
                        <h5 class="valor" ><?=$indice["valor"]?> R$</h5>
                    </div>
                </div>
                <p class="descricao">
                    <input type="checkbox" style="display: inline;" required> Ao clicar em alugar você está ciente do comprometimento e a política de privacidade da "ToolsApp" com seus dados
                </p>
                <div class="bts">
                    <button class="btn5">Adicionar ao carrinho</button>
                    <button class="btn6"><a href="index.php">Alugar<a/></button>
                </div>  
                <?php }else{
                    echo "<h3>ferramenta não encontrada</h3>";
                } ?>
            </div>
        </div>
    </main>
</body>
</html>