<?php
$quantDias = $_GET["quantidadedias"] ?? 0;

$ferramentas = [
    [
        "nome" => "Lavadora de alta pressão",
        "valor" => 5,
        "imagem" => "imagens/ferramentas/lavadora.png",
        "id" => 100
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



];


?>