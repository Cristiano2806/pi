<?php

// Validação de tipo de usuario
function validaTipoUser($tipo)
{
    if ($tipo == "on") {
        return 1;
    } else {
        return 0;
    }
}

// Verifica o tipo de usuário
function verificaTipoUser($mentor, $professor)
{
    if ($mentor || $professor) {
        return 1;
    } else {
        return 0;
    }
}

// Extrai o id do vídeo do youtube

function extraiIdVideo($link)
{
    $array_nome = explode("v=", $link);

    if (strpos($array_nome[1], "&") != 0) {
        $codigo = explode("&", $array_nome[1]);
        return $codigo[0];
    } else {
        $codigo[0] = trim($array_nome[1]);
        return $codigo[0];
    }
}
