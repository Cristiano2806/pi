<?php

$querys_delete = [
    "DELETE FROM verificacao_video WHERE id_video = $id",
    "DELETE FROM video_has_categoria WHERE id_video = $id",
    "DELETE FROM video WHERE id_video = $id"
];

for ($i = 0; $i <= count($querys_delete); $i++) {

    print_r($querys_delete[$i]);
};