<?php
    try {
        $conexao =mysqli_connect("localhost", "root", "", "crud");
    }
    catch(mysqli_sql_exception) {
        echo"Falha ao tentar conectar a base de dados";
    }
?>