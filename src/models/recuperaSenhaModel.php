<?php

include_once "../db/conexao.php";
require_once "../libs/functions.php";

session_start();

// Verifica o usuário na session
$email = isset($_POST["email"]) ? (trim($_POST["email"])) : FALSE;

//  montar a instrução do banco
$query_user = "SELECT email FROM usuario WHERE email = '$email'";

//  mandar o mysqli executar a query e retorna os dados requisitados
$resultado_user = mysqli_query($conn, $query_user);
$resultado_user or die("Falha na busca de dados: $query_user -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_user = mysqli_fetch_assoc($resultado_user);



// Se o usuário digitou login válido, o número de linhas será 1
if ($dados_user) {

    $nova_senha = geraSenhaaleAtoria();

    header("Location: ../views/login.php");
} else {
    $_SESSION["erroLogin"] = "Usuário inexistente";
    echo "<script>alert('Usuário inexistente');</script>";
    header("Location: ../views/recuperaSenha.php");
}

mysqli_close($conn);
