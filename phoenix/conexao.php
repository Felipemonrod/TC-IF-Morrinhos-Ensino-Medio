<?php
    $host="localhost";
    $banco="phoenix_project";
    $usuario="root";
    $senha="";

    // Creando a conexao
    $conexao=mysqli_connect($host, $usuario, $senha, $banco);
    mysqli_select_db($conexao, $banco);
?>