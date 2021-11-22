<?php

require "../db/conexao.php";
require_once "../libs/functions.php";


// query para buscar o video pelo id
$query_videos_recentes = "SELECT v.*, u.nome, u.sobrenome FROM video v INNER JOIN usuario u ON (v.video_idUser = u.id_user) WHERE publicado = 1 ORDER BY v.data_postagem DESC LIMIT 8";

// busca da query no banco de dados
$resultado_videos_recentes = mysqli_query($conn, $query_videos_recentes);
$resultado_videos_recentes or die("Falha na busca de dados: $query_videos_recentes -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_videos_recentes = mysqli_fetch_all($resultado_videos_recentes, MYSQLI_ASSOC);



mysqli_close($conn);