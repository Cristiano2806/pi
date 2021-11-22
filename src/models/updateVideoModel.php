<?php

include_once "../db/conexao.php";
require_once "../libs/functions.php";

session_start();

date_default_timezone_set('America/Sao_Paulo');

//  recebe as informações do form e define os outros atributos
$id_video      = intval($_GET["id"]);
$titulo        = mysqli_real_escape_string($conn, $_POST["titulo"]);
$linkCompleto  = mysqli_real_escape_string($conn, $_POST["link"]);
$descricao     = mysqli_real_escape_string($conn, $_POST["descricao"]);
$data_postagem = date("Y-m-d", time());
$id_user       = $_SESSION["id_user"];

// retirando o id do video do youtube
$link = extraiIdVideo($linkCompleto);


//  montar a instrução do banco para atualizar video
$query_att_video = "UPDATE video SET titulo = '$titulo', link = '$link', descricao = '$descricao', data_postagem = '$data_postagem', publicado = 0, video_idUser = $id_user, recusado = 0 WHERE id_video = $id_video";

//  mandar o mysqli executar a query da atualização no banco
if (!mysqli_query($conn, $query_att_video)) {
    die("Falha na conexão: $query_att_video -> " . mysqli_errno($conn) . " => " . mysqli_error($conn));
}

// query para remover os relacionamentos entre o vídeo e as categorias
$querys_delete = [
    "DELETE FROM verificacao_video WHERE id_video = $id_video",
    "DELETE FROM video_has_categoria WHERE id_video = $id_video",
    ];

//  mandar o mysqli executar a query da exclusão no banco
for ($i = 0; $i < count($querys_delete); $i++) {

    $resultado_delete = mysqli_query($conn, $querys_delete[$i]);
    $resultado_delete or die("Falha na busca de dados: $querys_delete[$i] -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
}

//inserindo na tabela video_has_categoria o id_video e o id_categoria das novas categorias
for ($i = 1; $i <= 3; $i++) {
    $categoria = $_POST["categoria" . $i];

    if (!is_null($categoria)) {
        intval($categoria);
        $query_categoria = "INSERT INTO video_has_categoria(id_categoria, id_video) VALUES ($categoria, $id_video)";

        if (!mysqli_query($conn, $query_categoria)) {
            die("<p>Falha na conexão: $query_categoria -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</p>");
        }
    }
}

header("location: ../views/video.php?id=" . $id_video);

mysqli_close($conn);
