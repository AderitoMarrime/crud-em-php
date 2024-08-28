<?php
    include("conexao.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>TELEFONE</th>
                <th>OPERACOES</th>
            </tr>
        </thead>
        <tbody>

        <?php 
            $sql = "SELECT * FROM usuarios";
            $resultado = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_assoc($resultado)) {
                $id = $linha['id'];
                $nome = $linha['nome'];
                $email = $linha['email'];
                $telefone = $linha['telefone'];
                echo '
                    <tr>
                        <td>'.$id.'</td>
                        <td>'.$nome.'</td>
                        <td>'.$email.'</td>
                        <td>'.$telefone.'</td>
                        <td>
                            <button><a href="">Atualizar</a></button>
                            <button><a href="">Deletar</a></button>
                        </td>
                    </tr>
                ';
            }
        ?>
        </tbody>
    </table>
</body>
</html>