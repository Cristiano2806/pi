<?php

session_start();

echo ('

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
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-videos">');
                
                include_once "../models/categoriasModel.php";

                foreach ($dados_categoria as $categoria) {
                    echo ('
                            <a class="dropdown-item" href="./videos.php?cat=' . $categoria["id_categoria"] . '"><i class="fas fa-arrow-right"></i>&nbsp ' . $categoria["nome"] . '</a>
                            ');
                }
        echo('
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink-videos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-video"></i>&nbsp meus vídeos</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-videos">
                <a class="dropdown-item" href="#"><i class="fas fa-eye"></i>&nbsp ver publicados</a>
                <a class="dropdown-item" href="../views/upload.php"><i class="fas fa-upload"></i>&nbsp postar</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../views/analiseVideos.php"><i class="fas fa-search"></i>&nbsp analisar vídeos</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenuLink-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>' . " ".$_SESSION["nome"] . " " . $_SESSION["sobrenome"] . '</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="dropdownMenuLink-user">
                            <a class="dropdown-item" href="#">Minha conta</a>
                            <a class="dropdown-item" href="#"> Sair <i class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
');