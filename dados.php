<?php
$quantDias = $_GET["quantidadedias"] ?? 0;
#dados das ferramentas
$ferramentas = [
    [
        "nome" => "Lavadora de alta pressão",
        "valor" => 5,
        "imagem" => "imagens/ferramentas/lavadora.png",
        "id" => 100,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Extratora",
        "valor" => 4,
        "imagem" => "imagens/ferramentas/extratora.png",
        "id" => 101
        "total" => "valor" * quantDias, 
    ]
    [
        "nome" => "Furadeira",
        "valor" => 2.5,
        "imagem" => "imagens/ferramentas/furadeira.png",
        "id" => 102
        "total" => "valor" * quantDias, 
    ]
    [
        "nome" => "Esmerilhadeira",
        "valor" => 4,
        "imagem" => "imagens/ferramentas/esmerilhadeira.png",
        "id" => 103
        "total" => "valor" * quantDias, 
    ]
    [
        "nome" => "Aspirador",
        "valor" => 3,
        "imagem" => "imagens/ferramentas/aspirador.png",
        "id" => 104,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Betoneira",
        "valor" => 6,
        "imagem" => "imagens/ferramentas/betoneira.jpg",
        "id" => 105,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Cortadora de concreto",
        "valor" => 3,
        "imagem" => "imagens/ferramentas/cortadora-concreto.jpg",
        "id" => 106,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Extensão elétrica",
        "valor" => 1.67,
        "imagem" => "imagens/ferramentas/extensao-eletrica.jpg",
        "id" => 107,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Lixadeira",
        "valor" => 1.89,
        "imagem" => "imagens/ferramentas/lixadeira.png",
        "id" => 108,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Nylon",
        "valor" => 3,
        "imagem" => "imagens/ferramentas/nylon.png",
        "id" => 109,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Plaina",
        "valor" => 2.56,
        "imagem" => "imagens/ferramentas/plaina.png",
        "id" => 110,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Policorte",
        "valor" => 2.34,
        "imagem" => "imagens/ferramentas/policorte.jpg",
        "id" => 111,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Roçadeira",
        "valor" => 3.79,
        "imagem" => "imagens/ferramentas/rocadeira.jpg",
        "id" => 112,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Serra Circular",
        "valor" => 4.23,
        "imagem" => "imagens/ferramentas/serra-circular.png",
        "id" => 113,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Serra de marmore (Makita)",
        "valor" => 6.78,
        "imagem" => "imagens/ferramentas/serra-marmore.jpg",
        "id" => 114,
        "total" => "valor" * quantDias,
    ]
    [
        "nome" => "Tico Tico",
        "valor" => 6.78,
        "imagem" => "imagens/ferramentas/ticotico.png",
        "id" => 115,
        "total" => "valor" * quantDias,
    ]

];


?>