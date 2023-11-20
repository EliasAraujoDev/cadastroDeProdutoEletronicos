<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if (!file_exists('data')) {
        mkdir('data');
    }

    $clientesFile = 'data/clientes.csv';


    $clienteData = "$nome,$senha\n";
    file_put_contents($clientesFile, $clienteData, FILE_APPEND);

    echo '<script>alert("Cliente cadastrado com sucesso!"); window.location.href = "index.php";</script>';
    exit(); 
}
?>
