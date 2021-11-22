<?php

require "../db/conexao.php";
require_once "../libs/functions.php";

// pegando o id na url e transforma em integer
$id_video = intval($_GET["id"]);

// query para buscar o video pelo id
$query_video = "SELECT * FROM video WHERE id_video = $id_video";

// busca da query no banco de dados
$resultado_video = mysqli_query($conn, $query_video);
$resultado_video or die("Falha na busca de dados: $query_video -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_video = mysqli_fetch_assoc($resultado_video);

// atribuindo variáveis aos atributos do vídeo
$titulo        = $dados_video["titulo"];
$link          = $dados_video["link"];
$descricao     = $dados_video["descricao"];
$link          = $dados_video["link"];
$curtidas      = $dados_video["curtidas"];
$visualizacoes = $dados_video["visuzalizacoes"];
$data          = $dados_video["data_postagem"];
$id_user_video = $dados_video["video_idUser"];


// query para selecionar o usuário que postou o vídeo
$query_user = "SELECT nome, sobrenome FROM usuario WHERE id_user = $id_user_video";

// buscando os dados do usuario que postou o vídeo
$resultado_user = mysqli_query($conn, $query_user);
$resultado_user or die("Falha na busca de dados: $query_user -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_user = mysqli_fetch_assoc($resultado_user);

// atribuindo variáveis aos atributos do usuario
$nome_user = $dados_user["nome"] . " " . $dados_user["sobrenome"];

// query para selecionar as categorias relacionadas ao vídeo
$query_categoria = "SELECT c.nome FROM categoria c INNER JOIN video_has_categoria vhc ON (c.id_categoria = vhc.id_categoria) WHERE vhc.id_video = $id_video ORDER BY 1";

// buscando os dados das categorias relacionadas ao vídeo
$resultado_categoria = mysqli_query($conn, $query_categoria);
$resultado_categoria or die("Falha na busca de dados: $query_categoria -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_categoria = mysqli_fetch_all($resultado_categoria, MYSQLI_ASSOC);

// atribuindo variáveis aos atributos do usuario

mysqli_close($conn);
