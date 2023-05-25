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