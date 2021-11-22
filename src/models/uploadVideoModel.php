<?php

include_once "../db/conexao.php";
require_once "../libs/functions.php";

session_start();

date_default_timezone_set('America/Sao_Paulo');

//  recebe as informações do form e define os outros atributos
$titulo        = mysqli_real_escape_string($conn, $_POST["titulo"]);
$linkCompleto  = mysqli_real_escape_string($conn, $_POST["link"]);
$descricao     = mysqli_real_escape_string($conn, $_POST["descricao"]);
$data_postagem = date("Y-m-d", time());
$id_user       = $_SESSION["id_user"];

// retirando o id do video do youtube
$link = extraiIdVideo($linkCompleto);


//  montar a instrução do banco para inserir video
$query_video = "INSERT INTO video(titulo, link, descricao, data_postagem, publicado, video_idUser) VALUES ('$titulo', '$link', '$descricao', '$data_postagem', 0, '$id_user')";

//  mandar o mysqli inserir a query do video no banco
if (!mysqli_query($conn, $query_video)) {
    die("Falha na conexão: $query_video -> " . mysqli_errno($conn) . " => " . mysqli_error($conn));
}

//  capturar o id do vídeo inserido
$id_video = mysqli_insert_id($conn);

//inserindo na tabela video_has_categoria o id_video e o id_categoria
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

header("location: ../views/video.php?id=".$id_video);

mysqli_close($conn);
