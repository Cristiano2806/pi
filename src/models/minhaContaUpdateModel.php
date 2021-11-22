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
$telefone  = ("(". $ddd .")". $phone);
$perfil    = mysqli_real_escape_string($conn, $_POST["perfil"]);


//  montar a instrução do banco para inserir usuário
$query_user = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', telefone='$telefone', senha = '$senha', perfil = '$perfil' WHERE id_user = $id_user";

//  mandar o mysqli inserir a query do usuário no banco
if (!mysqli_query($conn, $query_user)) 
{
    die("Falha na conexão: $query_user -> ".mysqli_errno($conn)." => ".mysqli_error($conn));
}

// query para remover os relacionamentos entre o user e as categorias
$query_delete = "DELETE FROM user_has_categoria WHERE id_user = $id_user";

$resultado_delete = mysqli_query($conn, $query_delete);
$resultado_delete or die("Falha na busca de dados: $querys_delete -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");

//inserindo na tabela user_has_categoria o id_user e o id_categoria
for ($i = 1; $i <= 3; $i++) {
    $categoria = $_POST["categoria" . $i];

    if (!is_null($categoria)) {
        intval($categoria);
        $query_categoria = "INSERT INTO user_has_categoria(id_categoria, id_user) VALUES ($categoria, $id_user)";

        if (!mysqli_query($conn, $query_categoria)) {
            die("<p>Falha na conexão: $query_categoria -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</p>");
        }
    }
}


header("location: ../views/minhaConta.php?id=".$id_user);

mysqli_close($conn);