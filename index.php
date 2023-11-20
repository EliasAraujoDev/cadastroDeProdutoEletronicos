<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Loja de Eletrodomésticos</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php

session_start();


function showErrorAndRedirect($message) {
    echo "<script>alert('$message'); window.location.href = 'index.php';</script>";
    exit();
}

if (isset($_SESSION['username'])) {
    echo "<h1>Bem-vindo à Nossa Loja de Eletrodomésticos, {$_SESSION['username']}!</h1>";
    echo "<p><a href='logout.php'>Sair</a></p>";


    echo "<div>";
    echo "<h2>Produtos Disponíveis</h2>";

  
    $produtosFile = 'data/produtos.csv';

  
    if (file_exists($produtosFile)) {
        $produtos = file($produtosFile, FILE_IGNORE_NEW_LINES);

       
        if ($produtos !== false) {
            echo "<ul>";
            foreach ($produtos as $produto) {
                list($nomeProduto, $precoProduto) = explode(",", $produto);
                echo "<li>$nomeProduto - R$ $precoProduto</li>";
            }
            echo "</ul>";
        } else {
            showErrorAndRedirect("Erro ao ler o arquivo de produtos.");
        }
    } else {
        showErrorAndRedirect("Arquivo de produtos não encontrado.");
    }

    echo "</div>";

   
    echo "<div>";
    echo "<h2>Cadastro de Produtos</h2>";
    echo "<p><a href='cadastro_produtos.php'>Cadastrar Novo Produto</a></p>";
    echo "</div>";
} else {
   
    echo "<h1>Bem-vindo à Nossa Loja de Eletrodomésticos</h1>";
    echo "<div>";
    echo "<h2>Login</h2>";
    echo "<form action='login.php' method='post'>";
    echo "Usuário: <input type='text' name='username' required><br>";
    echo "Senha: <input type='password' name='password' required><br>";
    echo "<input type='submit' value='Login'>";
    echo "</form>";
    echo "</div>";
    echo "<div>";
    echo "<h2>Cadastro de Clientes</h2>";
    echo "<p><a href='cadastro_clientes.php'>Cadastrar Novo Cliente</a></p>";
    echo "</div>";
}
?>

</body>
</html>
