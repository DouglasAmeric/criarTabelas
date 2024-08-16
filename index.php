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
        <label for="row_">Coluna</label>
        <input type="text" name="row_">
        <select name="valor" id="valor">
            <option value="int">int</option>
            <option value="char">char</option>
        </select>
        <button type="submit">Criar tabela</button>
    </form>
</body>
</html>
<?php
include("conex.php");

    $nome = isset($_POST['table_name']) ? trim($_POST['table_name']) : '';
    $coluna = isset($_POST['row_']) ? trim($_POST['row_']) : '';
    $valor = isset($_POST['valor']) ? trim($_POST['valor']) : '';

    var_dump($coluna);
    

    if(preg_match('/^[a-zA-Z0-9_]+$/', $nome) && preg_match('/^[a-zA-Z0-9_]+$/', $coluna)){
        
        $create = "CREATE TABLE `$nome`(
            id INT AUTO_INCREMENT PRIMARY KEY,
            $coluna $valor NOT NULL
            )";

        if(mysqli_query($con,$create)){
            echo "Deu certo";
        }else{
            echo "Erro". mysqli_error($con);
        }
    }else{
        echo "Nome Invalido";
    }
  
?>