<?php

require "../db/conexao.php";
require_once "../libs/functions.php";

$id_categoria = intval($_GET["cat"]);

// query para buscar os dados no banco de dados
$query_videos_cat = "SELECT v.*, u.nome, u.sobrenome, c.nome as 'nome_categoria' FROM video v INNER JOIN usuario u ON (v.video_idUser = u.id_user) INNER JOIN video_has_categoria vhc ON (v.id_video = vhc.id_video) INNER JOIN categoria c ON (c.id_categoria = vhc.id_categoria) WHERE c.id_categoria = $id_categoria AND v.publicado = 1 ORDER BY v.data_postagem DESC";

// busca da query no banco de dados
$resultado_videos_cat = mysqli_query($conn, $query_videos_cat);
$resultado_videos_cat or die("Falha na busca de dados: $query_videos_cat -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_videos_cat = mysqli_fetch_all($resultado_videos_cat, MYSQLI_ASSOC);


mysqli_close($conn);