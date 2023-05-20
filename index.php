<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imgs/inconTools.png">
    <link href="style.css" rel="stylesheet">
    <title>Sua caixa de ferramentas na nuvem. | Tools</title>
     <meta name="description" content="Tools, sua caixa de 
     ferramenta na nuvem! Precisou de ferramentas
     e equipamentos? Peça na Tools." data-react-helmet="true">
</head>
<body>
<header>
    <nav>
        <a class="logo" href="./"><img id="logo-img" src="imgs/inconTools.png" alt="logo da página">Tools</a>
        <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
</div>
            <ul class="nav-list">
            <li><a href="">Entrar ou cadastrar</a></li>
            <li><a href="#FerramentasC">Ferramentas</a></li>
            <li><a href="">Comprar</a></li>
            <li><a href="">Sobre</a></li>
</ul>
</nav>
    </header>
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
            <button class="btn3"><a href="">Ver todas as ferramentas e equipamentos</a></button>
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
            <span>2.Selecioneo período de uso</span>
        </div>
        <div class="div-section-3">
            <img src="imagens/lar-doce-lar.png" class="i" alt="Casa com um coração na lateral">
            <span>3.receba em seu lar</span>
        </div>
    </section>
    <section class="section-quaternario">
        <button class="btn4"><a href="">Alugue agora</a></button>
    </section>
    <footer>
        <h3>Entre em contato</h3>
        <img src="" alt="Logo do site">
        <div id="endereco">
            <p></p>
        </div>
    </footer>
    <script src="mobile-navbar.js"></script>
</body>   
</html>