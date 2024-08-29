<?php 
    include("conexao.php");

        if (isset($_GET['atualizarid'])) {
            $id = $_GET['atualizarid'];
            $sql = "SELECT * FROM usuarios where id = $id";
            $resultado = mysqli_query($conexao,$sql);
            $linha = mysqli_fetch_assoc($resultado);
            $nome = $linha['nome'];
            $email = $linha['email'];
            $telefone = $linha['telefone'];
    }

    if (isset($_POST['atualizar'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone' WHERE id = $id";

        $resultado = mysqli_query($conexao, $sql);

        if ($resultado) {
            header("location: mostrar.php");
        } else {
            echo"erro ao atualizar";
        }
    }

    mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo "$nome"?>"><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php echo "$email"?>"><br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo "$telefone"?>"><br>
        <input type="submit" name="atualizar" value="Atualizar">
    </form>
</body>
</html>

<?php

?>