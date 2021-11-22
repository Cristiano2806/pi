<?php

include_once "../db/conexao.php";
require_once "../libs/functions.php";

session_start();

date_default_timezone_set('America/Sao_Paulo');

$feedback         = mysqli_real_escape_string($conn, $_POST["feedback"]);
$id_user          = $_SESSION["id_user"];
$id_video         = intval($_GET["video"]);
$data_verificacao = date("Y-m-d", time());
$verificacao      = $_GET["ver"];

// query para inserir os dados da aprovacao na tabela verificação_video
$query_verificacao = "INSERT INTO verificacao_video(feedback, id_user, id_video, data_verificacao) VALUES ('$feedback', $id_user, $id_video, '$data_verificacao')";

//  inserindo na tabela verificacao_video os dados a avaliação
if (!mysqli_query($conn, $query_verificacao)) {
    die("Falha na conexão: $query_verificacao -> " . mysqli_errno($conn) . " => " . mysqli_error($conn));
}

if ($verificacao == "1") {

    // query para atualizar o vídeo apos aprovação
    $query_aprovar = "UPDATE video SET publicado = 1 WHERE id_video = $id_video";
    //  atualizando a tabela video para o vídeo ser publicado
    if (!mysqli_query($conn, $query_aprovar)) {
        die("Falha na conexão: $query_aprovar -> " . mysqli_errno($conn) . " => " . mysqli_error($conn));
    }
} else {

    // query para reprovar o vídeo apro reprovação
    $query_reprovado = "UPDATE video SET recusado = 1 WHERE id_video = $id_video";
    //  atualizando a tabela video para o vídeo ser reprovado
    if (!mysqli_query($conn, $query_reprovado)) {
        die("Falha na conexão: $query_reprovado -> " . mysqli_errno($conn) . " => " . mysqli_error($conn));
    }
    
}

header("location: ../views/analiseVideos.php");
