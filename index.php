<?php 
    include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"><br>
        <input type="submit" name="registar" value="Registar">
    </form>
</body>
</html>