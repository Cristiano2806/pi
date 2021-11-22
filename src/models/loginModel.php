<?php

// conexão com o banco de dados
require "../db/conexao.php";
require_once "../libs/functions.php";

// inicia a session
session_start();

// Verifica o usuário na session
$email = isset($_POST["email"]) ? (trim($_POST["email"])) : FALSE;
// Verifica a senha e criptografa
$senha = isset($_POST["senha"]) ? password_hash($senha, PASSWORD_DEFAULT) : FALSE;

//  montar a instrução do banco
$query_user = "SELECT id_user, nome, sobrenome, senha FROM usuario WHERE email = '$email'";

//  mandar o mysqli executar a query e retorna os dados requisitados
$resultado_user = mysqli_query($conn, $query_user);
$resultado_user or die("Falha na busca de dados: $query_user -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_user = mysqli_fetch_assoc($resultado_user);


// Se o usuário digitou login válido, o número de linhas será 1
if ($dados_user) {

    $query_tipo = "SELECT * FROM tipo_user WHERE id_user=" . $dados_user["id_user"];
    $resultado_tipo = mysqli_query($conn, $query_tipo);
    $resultado_tipo or die("Falha na busca de dados: $query_tipo -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
    $dados_tipo = mysqli_fetch_assoc($resultado_tipo);

    $tipo = verificaTipoUser($dados_tipo['mentor'], $dados_tipo["professor"]);


    if (password_verify($_POST["senha"], $dados_user["senha"])) {
        $_SESSION["id_user"] = $dados_user["id_user"];
        $_SESSION["email"] = $dados_user["email"];
        $_SESSION["nome"] = $dados_user["nome"];
        $_SESSION["sobrenome"] = $dados_user["sobrenome"];
        $_SESSION["tipo"] = $tipo;
        header("Location: ../views/principal.php?id=" . $dados_user["id_user"] . "pagina=1");
    } else {
        $_SESSION["erroLogin"] = "Senha incorreta";
        echo "<script>alert('Senha inválida');</script>";
        header("Location: ../views/login.php");
        exit;
    }
} else {
    $_SESSION["erroLogin"] = "Usuário inexistente";
    echo "<script>alert('Usuário inexistente');</script>";
    header("Location: ../views/login.php");
}

mysqli_close($conn);

