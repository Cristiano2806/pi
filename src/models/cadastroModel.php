<?php

include_once "../db/conexao.php";
require_once "../libs/functions.php";

date_default_timezone_set('America/Sao_Paulo');

//  recebe as informações do form
$nome = mysqli_real_escape_string($conn, $_POST["nome"]);
$sobrenome = mysqli_real_escape_string($conn, $_POST["sobrenome"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$senha = password_hash(mysqli_real_escape_string($conn, $_POST["senha"]), PASSWORD_DEFAULT);
$aluno = validaTipoUser($_POST["aluno"]);
$professor = validaTipoUser($_POST["professor"]);
$mentor = validaTipoUser($_POST["mentor"]);
$data = date("Y-m-d", time());


echo "<p>Dados do usuário: $nome $sobrenome $email $senha $aluno $professor $mentor</p>";


//  montar a instrução do banco para inserir usuário
$query_user = "INSERT INTO usuario(nome, sobrenome, email, senha, data_cadastro) VALUES ('$nome', '$sobrenome', '$email', '$senha', '$data')";

//  mandar o mysqli inserir a query do usuário no banco
if (!mysqli_query($conn, $query_user)) 
{
    die("Falha na conexão: $query_user -> ".mysqli_errno($conn)." => ".mysqli_error($conn));
}

//  capturar o id do usuario inserido
$id = mysqli_insert_id($conn);
echo "<p>ID inserido: $id</p>";

//  inserção no relacionamento na tabela tipo_user a partir do id inserido
$query_tipo = "INSERT INTO tipo_user(mentor, professor, aluno, id_user) VALUES ('$mentor', '$professor', '$aluno', $id)";

//  mandar o mysqli inserir a query de tipo_user no banco
if (!mysqli_query($conn, $query_tipo)) 
{
    die("<p>Falha na conexão: $query_tipo -> ".mysqli_errno($conn)." => ".mysqli_error($conn)."</p>");
}

header("location: ../views/login");

mysqli_close($conn);

