<?php
    include ("conexao.php");

    if (isset($_GET['deletarid'])) {
        $id = $_GET['deletarid'];

        $sql = "DELETE FROM usuarios where id = $id";
            $resultado = mysqli_query($conexao,$sql);
            if ($resultado) {
                header("location: mostrar.php");
            } else {
                echo "mysqli_error($conexao)";
            }

    }

    mysqli_close($conexao);
?>