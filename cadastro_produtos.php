<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
  
    <h2>Cadastro de Produtos</h2>

    <form action="processar_produto.php" method="post">
        <label for="nome_produto">Nome do Produto:</label>
        <input type="text" id="nome_produto" name="nome_produto" required><br>

        <label for="preco_produto">Preço:</label>
        <input type="text" id="preco_produto" name="preco_produto" required><br>

        <input type="submit" value="Cadastrar Produto">
    </form>

    <p><a href="index.php">Voltar para a Página Inicial</a></p>
</body>
</html>
