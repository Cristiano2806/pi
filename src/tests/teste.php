<?php


$telefone = "(19) 992990279";

function extraiDDD($telefone)
{
    $array_1 = explode(")", $telefone);
    $phone = $array_1[1];
    $array_2 = explode("(", $array_1[0]);
    $ddd = $array_2[1];
    echo("DDD: " . $ddd);
    echo("Telefone: " . $phone);
}

extraiDDD($telefone);

