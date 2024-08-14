<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Criar tabela</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="table_name">Nome da Tabela</label>
        <input type="text" name="table_name">
        <button type="submit">Criar tabela</button>
    </form>
</body>
</html>
<?php
include("conex.php");

    $nome = isset($_POST['table_name']) ? trim($_POST['table_name']) : '';

    
    if(preg_match('/^[a-zA-Z0-9_]+$/', $nome)) {
        
        $create = "CREATE TABLE `$nome`(
            id INT AUTO_INCREMENT PRIMARY KEY)";

        if(mysqli_query($con,$create)){
            echo "Deu certo";
        }else{
            echo "Erro". mysqli_error($con);
        }
    }else{
        echo "Nome Invalido";
    }
  
?>