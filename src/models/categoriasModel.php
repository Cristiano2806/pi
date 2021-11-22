<?php

include_once "../db/conexao.php";
require_once "../libs/functions.php";

$query_categorias = "SELECT * from categoria ORDER BY nome";

$resultado_categorias = mysqli_query($conn, $query_categorias);
$resultado_categorias or die("Falha na busca de dados: $query_categorias -> " . mysqli_errno($conn) . " => " . mysqli_error($conn) . "</pre>");
$dados_categorias = mysqli_fetch_all($resultado_categorias, MYSQLI_ASSOC);

