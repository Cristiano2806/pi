<?php

require "../db/conexao.php";
require_once "../libs/functions.php";

$pesquisa = $_GET["search"];

// query para buscar os dados no banco de dados
$query_pesquisa = "SELECT v.*, u.nome, u.sobrenome, c.nome as 'nome_categoria' FROM video v INNER JOIN usuario u ON (v.video_idUser = u.id_user) INNER JOIN video_has_categoria vhc ON (v.id_video = vhc.id_video) INNER JOIN categoria c ON (c.id_categoria = vhc.id_categoria) WHERE publicado = 1 AND u.nome LIKE '%$pesquisa%' OR u.sobrenome LIKE '%$pesquisa%' OR v.titulo LIKE '%$pesquisa%' OR v.descricao LIKE '%$pesquisa%' OR 'nome_categoria' LIKE '%$pesquisa%' GROUP BY v.id_video ORDER BY v.data_postagem DESC";

// busca da query no banco de dados
$resultado_pesquisa = mysqli_query($conn, $query_pesquisa);
$resultado_pesquisa or die("Falha na busca de dados: $query_pesquisa -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_pesquisa = mysqli_fetch_all($resultado_pesquisa, MYSQLI_ASSOC);


mysqli_close($conn);