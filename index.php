<!DOCTYPE html>
<html lang="pt-br">
<head>
     <!--Cabeça da Página/ Texto e título-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagens/inconTools.png"><!--Incon da aba do site-->
    <link href="estilo/style.css" rel="stylesheet">
    <title>Sua caixa de ferramentas na nuvem. | Tools</title>
    <meta name="description" content="Tools, sua caixa de 
    ferramenta na nuvem! Precisou de ferramentas
    e equipamentos? Peça na Tools." data-react-helmet="true"> <!--Mensagem que aparece abaixo do nome do site-->
</head>
<body>
    <!--Cabeçalho da página/ Links, logo, área de Pesquisa-->
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
        <nav class="nav2 navbar">
            <img src="imagens/carrinho-de-compras.png" class="car"><p class="spa">(0)</p>
            <div class="MenuIcon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navlinks">
                <li><a href="entrar.php">Entrar ou Cadastrar</a></li>
                <li><a href="alugar.php">Alugar ou Comprar</a></li>
                <li><a href="estoque.php">Estoque</a></li>
                <li><a href="">Sobre</a></li>
            </ul>
        </nav>
        
    </header>
    <!--Conteúdo da página-->
    <main class="principal-main">
        <!-- Esse é o main principal -->
        <div class="box1">
            <h1>Aluguel de <br>ferramentas</h1>
            <div class="box-btn">
                <button class="btn-estilo1">Alugue agora</button>
                <button class="btn-estilo2">Nos contate</button>
            </div>
        </div>
        <div class="box2">
            <img src="imagens/painel.png" id="painel" alt="iamgem de pessoas trabalhando">
        </div>
    </main>
    <section id="section1">
        <div id="cabSection1">
            <h2>O que você precisa?</h2>
        </div>
        <div class="container" name="FerramentasC">
            <div class="card">
                <img src="imagens/jardinagem.jpg" alt="Imagem de jardinagem" class="img-section">
                <span>Jardinagem</span>
            </div>
            <div class="card">
                <img src="imagens/construcao.jpg" alt="Imagem de construcao" class="img-section">
                <span>construção</span>
            </div>
            <div class="card">
                <img src="imagens/limpeza.jpg" alt="Imagem de limpeza" class="img-section">
                <span>Limpeza</span>
            </div>
            <div class="card">
                <img src="imagens/ferramentas2.jpg" alt="Imagem com ferramentas" class="img-section">
                <span>Faça você mesmo</span>
            </div>
        </div>
    </section>
    <section class="section-secundario">
            <button class="btn3"><a href="estoque.php">Ver todas as ferramentas e equipamentos</a></button>
    </section>
    <h3>Como funciona a Tools?</h3>
    <section class="section-terciario">
        
        <div class="div-section-1">
            <img src="imagens/ferramentas.png" class="i" alt="Ferramentas">
            <span>1.Escolha a ferramenta</span>
        </div>
        <div class="div-section-2">
            <img src="imagens/relogio.png" class="i" alt="Relógio">
            <span>2.Selecione o período de uso</span>
        </div>
        <div class="div-section-3">
            <img src="imagens/lar-doce-lar.png" class="i" alt="Casa com um coração na lateral">
            <span>3.receba em seu lar</span>
        </div>
    </section>
    <section class="section-quaternario">
        <button class="btn4"><a href="">Alugue agora</a></button>
    </section>
    <a id="bt-top" href="#">&#9650;</a>
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
</body>   
</html>