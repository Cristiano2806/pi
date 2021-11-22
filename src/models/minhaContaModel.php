<?php

require "../db/conexao.php";
require_once "../libs/functions.php";

// pegando o id na url e transforma em integer
$id_user = intval($_SESSION["id_user"]);

// query para buscar o usuario pelo id
$query_user = "SELECT * FROM usuario WHERE id_user = $id_user";

// busca da query no banco de dados
$resultado_user = mysqli_query($conn, $query_user);
$resultado_user or die("Falha na busca de dados: $query_user -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_user = mysqli_fetch_assoc($resultado_user);

// atribuindo variáveis aos atributos do vídeo
$nome             = $dados_user["nome"];
$sobrenome        = $dados_user["sobrenome"];
$email            = $dados_user["email"];
$link             = $dados_user["link"];
$telefoneCompleto = $dados_user["telefone"];
$perfil           = $dados_user["perfil"];
$ddd              = extraiDDD($telefoneCompleto);
$telefone         = extraiTelefone($telefoneCompleto);


mysqli_close($conn);
