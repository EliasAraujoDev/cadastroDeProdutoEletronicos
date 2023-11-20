<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <h2>Cadastro de Clientes</h2>

    <form action="processar_cliente.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Cadastrar Cliente">
    </form>

    <p><a href="index.php">Voltar para a Página Inicial</a></p>
</body>
</html>
