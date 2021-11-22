<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Open Unifeob - Welcome!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Rock+Salt&family=Indie+Flower&family=Josefin+Sans:ital,wght@0,300;0,400;1,700&family=Mochiy+Pop+P+One&family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../views/css/principal/principal.css">

    <script src="https://kit.fontawesome.com/847c65a0b9.js" crossorigin="anonymous"></script>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand nav-item ativo logo-nav" id="logo-nav" href="./principal.php"><img src="../img/Open-unifeob.png" alt="logo Open Unifeob" class="logo-nav"></a>
            <button class="navbar-toggler btn-hamburguer" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink-assuntos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-list-ul"></i>&nbsp assuntos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-videos">
                            <?php
                            include_once "../models/categoriasModel.php";

                            foreach ($dados_categorias as $categoria) {
                                echo ('
                                        <a class="dropdown-item" href="./videos.php?cat=' . $categoria["id_categoria"] . '"><i class="fas fa-arrow-right"></i>&nbsp ' . $categoria["nome"] . '</a>
                                        ');
                            }
                            ?>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink-videos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-video"></i>&nbsp meus vídeos</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-videos">
                            <a class="dropdown-item" href="../views/meusVideos.php"><i class="fas fa-eye"></i>&nbsp ver meus vídeos</a>
                            <a class="dropdown-item" href="../views/upload.php"><i class="fas fa-upload"></i>&nbsp postar</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/analiseVideos.php"><i class="fas fa-search"></i>&nbsp analisar vídeos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdownMenuLink-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> <?php echo $_SESSION["nome"] . " " . $_SESSION["sobrenome"] ?> </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="dropdownMenuLink-user">
                            <a class="dropdown-item" href="./minhaConta.php?id=<?php echo $_SESSION["id_user"]?>">Minha conta</a>
                            <a class="dropdown-item" href="../controllers/logoutController.php"> Sair <i class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="introducao pt-5 pb-5">
        <h1><img src="../img/Open-unifeob.png" alt="logo openunifeob"></h1>

        <br>
        <h2>Aqui você aprende e ensina</h2>
    </section>

    <section class="recentes pt-4 mt-3">
        <h3>Postagens recentes</h3>
        <div class="content mt-4 col-sm-12 d-flex flex-wrap">
            <?php
            include_once "../models/principalModel.php";

            foreach ($dados_videos_recentes as $video) {

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