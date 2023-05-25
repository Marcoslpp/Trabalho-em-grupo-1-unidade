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
        <nav class="nav1">
                <div class="logomarca">
                    <img src="imagens/inconTools.png" style="width:20px;"><h4 class="logo">Tools</h4>
                </div>
                    <div class="boxpesquisa"><!--A intenção é criar um "formulário" de pesquisa com a tag form -->
                    <input type="text" name="areapesquisa" placeholder="Pesquisar por ferramentas" class="areapesquisa">
                    <button class="btn7"><img src="imagens/lupa.png" class="lupa"></button>
                </div>
        </nav>
        <nav class="nav2">
            <img src="imagens/carrinho-de-compras.png" class="car"><p class="spa">(0)</p>
            <div>
                <div class="a"></div>
                <div class="b"></div>
                <div class="c"></div>
            </div>
        </nav>
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
                <h6 class="id">id-[<?=$indice["id"]?>]</h6>
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
                    <button class="btn6"><a href="index.php">Alugar</a></button>
                </div>  
                <?php }else{
                    echo "<h3>ferramenta não encontrada</h3>";
                } ?>
            </div>
        </div>
    </main>
    <!--Rodapé da página/ Sobre a Empresa, Social e Contato-->
    <footer name="SobreDados" id="#SobreDado">
        <div class="footer__flex">
            <ul>
                <li>
                    <h1>Entre em contato</h1>
                    <h2><img src="./imagens/inconTools.png" alt=""> Tools</h2>
                </li>
            </ul>
            <ul>
                <li><h3>Endereço</h3></li>
                <li><p>Rua qualquer, 123</p></li>
                <li><p>Qualquer cidade,</p></li>
                <li><p>Estado, País</p></li>
                <li><p>(00) 00000-0000</p></li>
                <li><p class="pmargin"><b>Tools@sitetools.com.br</b></p></li>
            </ul>
            <ul>
                <li><h3>Mídias Sociais</h3></li>
                <li><p><a> Facebook</a></p></li>
                <li><p><a>Instagram</a></p></li>
                <li><p><a>Twitter</a></p></li>
            </ul>
        </div>   
        <div class="last">
            <p>Todos os direitos reservados à Tools<br />locação de ferramenta e equipamentos web<br /> CNPJ: 00.000.000/0000-00</p>
        </div> 
    </footer>
    <script src="mobile-navbar.js"></script>
</body>
</html>