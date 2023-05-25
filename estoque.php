<?php
    require "dados.php";#importando arquivo de dados
?>
<!DOCTYPE html>
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
    <main class="mainstock">
    <h1 id="stock">Ferramentas e equipamentos</h1>
    <div class="container-estoque">
        <?php
            foreach ($ferramentas as $key => $value) {
                #impressões dos valores
        ?>
        <div class="ferramenta">
            <a href="alugar.php?i=<?=$key?>"><img src="<?=$value['imagem']?>" alt="<?=$value['nome']?>" class="img-ferramenta"></a><!--imagem da ferramenta e alternativa ao nome-->
            <h4 class="nome-ferramenta"><a href="alugar.php?i=<?=$key?>"><?=$value['nome']?></a></h4><!--nome da ferramenta-->
        </div>
        <?php } ?><!--fechamento php-->
    </div>
    <div class="container-button">
        <button>Ver mais</button>
    </div>
    </main>
    <footer>

    </footer>
</body>
</html>