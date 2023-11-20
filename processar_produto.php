<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeProduto = $_POST["nome_produto"];
    $precoProduto = $_POST["preco_produto"];

    if (!file_exists('data')) {
        mkdir('data');
    }

    $produtosFile = 'data/produtos.csv';

    if (!file_exists($produtosFile)) {
        file_put_contents($produtosFile, '');
    }

    $produtoData = "$nomeProduto,$precoProduto\n";

    if (file_put_contents($produtosFile, $produtoData, FILE_APPEND) !== false) {
        echo '<script>alert("Produto cadastrado com sucesso!"); window.location.href = "index.php";</script>';
        exit(); 
    } else {
        echo "Erro ao cadastrar o produto.";
    }
} else {
    echo "Requisição inválida.";
}
?>
