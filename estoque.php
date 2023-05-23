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

    </header>
    <main>
    <div class="container-estoque">
        <?php
            foreach ($ferramentas as $key => $value) {
                #impressões dos valores
        ?>
        <div class="ferramenta">
            <img src="<?=$value['imagem']?>" alt="<?=$value['nome']?>" class="img-ferramenta"><!--imagem da ferramenta e alternativa ao nome-->
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