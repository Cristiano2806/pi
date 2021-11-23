<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Open Unifeob - Vídeos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Rock+Salt&family=Indie+Flower&family=Josefin+Sans:ital,wght@0,300;0,400;1,700&family=Mochiy+Pop+P+One&family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../views/css/videos/videos.css">

    <script src="https://kit.fontawesome.com/847c65a0b9.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <?php include_once "../controllers/navbarController.php" ?>

    </header>

    <section class="videos pt-4 mt-3">
        <?php
        include_once "../models/videosModel.php";
        echo ('<h3>Vídeos sobre ' . $dados_videos_cat[0]['nome_categoria'] . '</h3>
            <div class="content d-flex mt-4">');
            if(!$dados_videos_cat) {
                echo ('<img src="../img/pesquisa-nao-encontrada.png">');
            }
        foreach ($dados_videos_cat as $video) {

            echo ('
                
                <div class="card mb-3 shadow" style="width: 30%">
                    <a href="./video.php?id=' . $video["id_video"] . '">
                        <img class="card-img-top" src="https://img.youtube.com/vi/' . $video["link"] . '/hqdefault.jpg" alt="">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><b>' . $video["titulo"] . '</b></h5>
                        <p class="card-text">' . $video["descricao"] . '</p>
                        <br>
                        <div class="infos">
                            <p class="postagem">Postado em ' . date('d/m/Y', strtotime($video["data_postagem"])) . '</p>
                            <p class="postagem">Autor: ' . $video["nome"] . " " . $video["sobrenome"] . '</p>
                        </div>
                    </div>
                </div>
                ');
        } ?>
        </div>

    </section>


    <?php
    include_once "../controllers/footerController.php"
    ?>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>

    </script>

</body>

</html>