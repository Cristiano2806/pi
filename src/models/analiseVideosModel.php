<?php

require "../db/conexao.php";
require_once "../libs/functions.php";

// query para buscar o video pelo id
$query_videos = "SELECT * FROM video WHERE publicado = 0 AND recusado = 0 ORDER BY data_postagem";

// busca da query no banco de dados dos videos não publicados
$resultado_videos = mysqli_query($conn, $query_videos);
$resultado_videos or die("Falha na busca de dados: $query_videos -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_videos = mysqli_fetch_all($resultado_videos, MYSQLI_ASSOC);


function pegaUserVideo($conn, $id)
{
    $query_user = "SELECT nome, sobrenome FROM usuario WHERE id_user = $id";

    // buscando os dados do usuario que postou o vídeo
    $resultado_user = mysqli_query($conn, $query_user);
    $resultado_user or die("Falha na busca de dados: $query_user -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
    $dados_user = mysqli_fetch_assoc($resultado_user);

    // atribuindo variáveis aos atributos do usuario
    return $dados_user["nome"] . " " . $dados_user["sobrenome"];
}

function pegaCategoriaVideo($conn, $id)
{
    $query_categoria = "SELECT c.nome FROM categoria c INNER JOIN video_has_categoria vhc ON (c.id_categoria = vhc.id_categoria) WHERE vhc.id_video = $id ORDER BY 1";

    // buscando os dados das categorias relacionadas ao vídeo
    $resultado_categoria = mysqli_query($conn, $query_categoria);
    $resultado_categoria or die("Falha na busca de dados: $query_categoria -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
    $dados_categoria = mysqli_fetch_all($resultado_categoria, MYSQLI_ASSOC);
    
    return $dados_categoria;
}


mysqli_close($conn);
