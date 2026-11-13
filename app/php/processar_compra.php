<?php

require_once __DIR__ . "/init.php";

if (!isset($_POST["total"])) {
    exit("[ERRO] - Não foi possível carregar os produtos do carrinho. (<a href='./carrinho.php'>Voltar</a>)");
}

for ($i = 0; $i <= $_POST["total"] - 1; $i ++) {
    $_SESSION["historico"][] = [
        "nome" => $_POST["nome$i"], // Nome
        "quantidade" => $_POST["quantidade$i"], // Quantidade
        "total" => $_POST["total$i"], // Total
        "id" => $_POST["id$i"] // ID
    ];

    $_SESSION["infoSite"]["renda"] += $_POST["total$i"];
}

unset($_SESSION["carrinho"]);
header("Location: ../index.php");
?>