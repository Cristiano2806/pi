<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Open Unifeob - Aprovação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/meusVideos/meusVideos.css">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Rock+Salt&family=Indie+Flower&family=Josefin+Sans:ital,wght@0,300;0,400;1,700&family=Mochiy+Pop+P+One&family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/847c65a0b9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include_once "../controllers/navbarController.php" ?>
    </header>
    <div class="container-fluid content">
        <h2 class="display-4 text-center mt-3 mb-4">Meus vídeos</h2>
        <ul class="list-videos">
            <?php
            include_once "../models/meusVideosModel.php";
            require "../db/conexao.php";
            foreach ($dados_videos_user as $video) {
                $dados_feedback = pegaFeedback($conn, $video["id_video"]);
                echo ('
                <li class="p-3 shadow mb-4">
                
                    <form class="d-flex mb-3 mt-3" method="post">
                        <div class="col-md-3">
                            <img class="w-100" src="https://img.youtube.com/vi/' . $video["link"] . '/hqdefault.jpg" alt="">
                        </div>
                        <div class="col-md-5 pt-3">
                        <h5><b>' . $video["titulo"] . '</b></h5> <br>
                        <p><b>Descrição:</b><br>' . $video["descricao"] . '</p>
                    </div>
                        <div class="col-md-2 pt-3">
                        
                            <p><b>Data de postagem:</b><br> ' . date("d/m/Y", strtotime($video["data_postagem"])) . '</p>
                            
                            <p><b>Usuário:</b><br> ' . $video["nome"] . '</p>
                            <p><b>Assuntos:</b> 
                            ');
                $dados_categorias = pegaCategoriaVideo($conn, $video["id_video"]);
                foreach ($dados_categorias as $categoria) {
                    echo "<br>";
                    echo ("- " . $categoria["nome"]);
                }

                echo ('</p>
                        
                        </div>

                        <div class="col-md-2 pt-3">
                        <span><b>Status:</b>
                        ');
                if ($video["publicado"]) {
                    echo ('<p class="aprovado"><b>APROVADO</b></p>');
                } elseif ($video["recusado"]) {
                    echo ('<p class="reprovado"><b>RECUSADO</b></p>');
                } else {
                    echo ('<p class="em-analise"><b>Em análise</b></p>');
                }
                echo ('     
                <p> por: '.$dados_feedback["nome"]. " ".$dados_feedback["sobrenome"]. '</p>
                </span>
                            
                            <button type="button" class="btn btn-secondary mt-2" data-toggle="modal" data-target="#feedback" data-feedback="' . $dados_feedback["feedback"] . '"><i class="fas fa-comments"></i> Feedback</button>

                            <div class="botoes">
                                <a target="_blank" class="btn bg-dark text-white d-block" href="./video.php?id=' . $video["id_video"] . '"><i class="fas fa-eye"></i> Ver vídeo</a>

                                <a type="button" class="btn btn-danger mt-2" href="../models/deleteVideoModel.php?vid=' . $video["id_video"] . '" onclick="javascript:return confirm(`Tem certeza que deseja excluir o vídeo?`)"><i class="fas fa-trash"></i> Deletar</a>

                                <a type="button" class="btn bg-info text-white mt-2" href="./editarVideo.php?id=' . $video["id_video"] . '" onclick="javascript:return confirm(`Tem certeza que deseja editar o vídeo?`)"><i class="fas fa-edit"></i> Editar</a>

                            </div>
                        </div>
                    </form>
                
                </li>
            ');
            } ?>
        </ul>

        <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="modal-feedback" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="feedback" class="col-form-label">Esse foi o feedback do analisador do vídeo:</label>
                                <textarea class="form-control" id="feedback" rows="6" name="feedback" disabled></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            $('#feedback').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget)
                var feedback = button.data('feedback')

                var modal = $(this)
                modal.find('.modal-body textarea').text(feedback)
            })
        </script>
</body>

</html>