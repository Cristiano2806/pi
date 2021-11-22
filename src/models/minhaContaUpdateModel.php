<?php

include_once "../db/conexao.php";
require_once "../libs/functions.php";

//  recebe as informações do form
$id_user   = intval($_GET["id"]);
$nome      = mysqli_real_escape_string($conn, $_POST["nome"]);
$sobrenome = mysqli_real_escape_string($conn, $_POST["sobrenome"]);
$email     = mysqli_real_escape_string($conn, $_POST["email"]);
$senha     = password_hash(mysqli_real_escape_string($conn, $_POST["senha"]), PASSWORD_DEFAULT);
$ddd       = mysqli_real_escape_string($conn, $_POST["ddd"]);
$phone     = mysqli_real_escape_string($conn, $_POST["phone"]);
$telefone  = $ddd + $phone;
$email     = mysqli_real_escape_string($conn, $_POST["status"]);


//  montar a instrução do banco para inserir usuário
$query_user = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha', status = ) WHERE id_user = $id_user";

//  mandar o mysqli inserir a query do usuário no banco
if (!mysqli_query($conn, $query_user)) 
{
    die("Falha na conexão: $query_user -> ".mysqli_errno($conn)." => ".mysqli_error($conn));
}

header("location: ../views/principal.php");

mysqli_close($conn);