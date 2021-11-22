<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbnome = "open-unifeob";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbnome);

    if(!$conn)
    {
        $erroNumero = mysqli_connect_errno();
        $erro = mysqli_connect_error();
        die("Falha na conexão: $erroNumero => $erro");
    } else {
        // echo("Conexão realizada com sucesso");
    }

?>