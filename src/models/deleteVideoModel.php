<?php

session_start();

require "../db/conexao.php";
require_once "../libs/functions.php";

$id_video = intval($_GET["vid"]);


// query's para deletar os relacionamentos do vídeo e o proóprio vídeo
$querys_delete = [
    "DELETE FROM verificacao_video WHERE id_video = $id_video",
    "DELETE FROM video_has_categoria WHERE id_video = $id_video",
    "DELETE FROM video WHERE id_video = $id_video"
];

for ($i = 0; $i < count($querys_delete); $i++) {

    $resultado_delete = mysqli_query($conn, $querys_delete[$i]);
    $resultado_delete or die("Falha na busca de dados: $querys_delete[$i] -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
}


header("location: ../views/meusVideos.php");

mysqli_close($conn);