<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!file_exists('data')) {
        mkdir('data');
    }

    $clientesFile = 'data/clientes.csv';

    if (!file_exists($clientesFile)) {
        file_put_contents($clientesFile, '');
    }

    $clientes = file($clientesFile, FILE_IGNORE_NEW_LINES);

    if ($clientes !== false) {
        foreach ($clientes as $cliente) {
            list($nome, $senha) = explode(",", $cliente);

            if ($nome === $username && $senha === $password) {
                session_start();

                $_SESSION['username'] = $username;

            
                header("Location: index.php");
                exit();
            }
        }
    } else {
        echo "Erro ao ler o arquivo de clientes.";
    }

    
    echo "Login falhou. Usuário ou senha incorretos.";
}
?>
