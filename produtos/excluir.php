<?php
    require_once "../src/funcoes-produtos.php";
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

    excluirProduto($conexao, $id);
    header("location:listar.php");
    // A idéia aqui é excluir direto (sem mensagens)