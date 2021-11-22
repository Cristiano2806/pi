<!doctype html>
<html lang="pt-br">

<head>
    <title>Open Unifeob - Visualizar vídeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/video/video.css">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Rock+Salt&family=Indie+Flower&family=Josefin+Sans:ital,wght@0,300;0,400;1,700&family=Mochiy+Pop+P+One&family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/847c65a0b9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include_once "../controllers/navbarController.php" ?>
    </header>
    <div class="container shadow">
        <?php
        include_once "../models/videoModel.php";
        require_once "../libs/functions.php";

        ?>

        <div class="embed-responsive embed-responsive-16by9 video">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $link ?>" allowfullscreen></iframe>
        </div>
        <div class="infos">
            <div class="data-autor">
                <p><b>Data postagem:</b> <?php echo date('d/m/Y', strtotime($data)) ?></p>
                <p><b>Autor:</b> <?php echo $nome_user ?></p>
                <p><b>Assuntos:</b>
                    <?php
                    foreach ($dados_categoria as $categoria) {
        
                        echo "- " . $categoria['nome'] . " ";
                    }
                    ?>
                </p>
            </div>
            <div class="likes-views">
                <span class="like"><a href="#"><i class="far fa-thumbs-up"></i></a> <?php echo $curtidas ?></span>
                <span><i class="far fa-eye"></i> <?php echo $curtidas ?></span>
            </div>
        </div>
        <div class="conteudo">
        <h2><?php echo $titulo ?></h2>
        <p><?php echo $descricao ?></p>
        </div>
    </div>

    <?php
    include_once "../controllers/footerController.php"
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>