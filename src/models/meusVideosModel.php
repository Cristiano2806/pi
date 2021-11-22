<?php

session_start();

require "../db/conexao.php";
require_once "../libs/functions.php";

$id_user = intval($_SESSION["id_user"]);

// query para buscar os dados no banco de dados
$query_videos_user = "SELECT v.*, u.nome, u.sobrenome FROM video v INNER JOIN usuario u ON (v.video_idUser = u.id_user) WHERE v.video_idUser = $id_user ORDER BY v.data_postagem DESC";

// busca da query no banco de dados
$resultado_videos_user = mysqli_query($conn, $query_videos_user);
$resultado_videos_user or die("Falha na busca de dados: $query_videos_user -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_videos_user = mysqli_fetch_all($resultado_videos_user, MYSQLI_ASSOC);

function pegaCategoriaVideo($conn, $id)
{
    $query_categoria = "SELECT c.nome FROM categoria c INNER JOIN video_has_categoria vhc ON (c.id_categoria = vhc.id_categoria) WHERE vhc.id_video = $id ORDER BY 1";

    // buscando os dados das categorias relacionadas ao vídeo
    $resultado_categoria = mysqli_query($conn, $query_categoria);
    $resultado_categoria or die("Falha na busca de dados: $query_categoria -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
    $dados_categoria = mysqli_fetch_all($resultado_categoria, MYSQLI_ASSOC);

    return $dados_categoria;
}

function pegaFeedback($conn, $id)
{
    $query_feedback = "SELECT vv.feedback, u.nome, u.sobrenome FROM verificacao_video vv INNER JOIN usuario u ON (vv.id_user = u.id_user) WHERE vv.id_video = $id";

    $resultado_feedback = mysqli_query($conn, $query_feedback);
    $resultado_feedback or die("Falha na busca de dados: $query_feedback -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
    $dados_feedback = mysqli_fetch_assoc($resultado_feedback);

    return $dados_feedback;
}

mysqli_close($conn);
