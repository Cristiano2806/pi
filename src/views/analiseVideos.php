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
    <link rel="stylesheet" href="../views/css/analise/analise.css">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Rock+Salt&family=Indie+Flower&family=Josefin+Sans:ital,wght@0,300;0,400;1,700&family=Mochiy+Pop+P+One&family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/847c65a0b9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <?php include_once "../controllers/navbarController.php" ?>
    </header>
    <div class="container-fluid content">
        <h2 class="display-4 text-center mt-3 mb-4">Análise de vídeos</h2>
        <ul class="list-videos">
            <?php
            include_once "../models/analiseVideosModel.php";
            require "../db/conexao.php";

            foreach ($dados_videos as $video) {
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
                            
                            <p><b>Usuário:</b><br> ' . pegaUserVideo($conn, $video["video_idUser"]) . '</p>
                            <p><b>Assuntos:</b> 
                            ');
                        $dados_categorias = pegaCategoriaVideo($conn, $video["id_video"]);
                        foreach ($dados_categorias as $categoria) {
                            echo "<br>";
                            echo ("- ".$categoria["nome"]);
                        }

                        echo ('</p>
                        
                        </div>

                        <div class="col-md-2 text-center">
                            <a target="_blank" class="btn bg-dark text-white d-block" href="./video.php?id=' . $video["id_video"] . '"><i class="fas fa-eye"></i> Assistir vídeo</a>

                            <div class="botoes">
                                <button type="button" class="btn btn-danger mt-2" data-toggle="modal" data-target="#verificacao" data-verificacao="reprovar" data-digito="0" data-contador="' . $video["id_video"] . '" ><i class="fas fa-thumbs-down"></i> Reprovar</button>

                            
                                <button type="button" class="btn btn-success mt-2" data-toggle="modal" data-target="#verificacao" data-verificacao="aprovar" data-digito="1" data-contador="' . $video["id_video"] . '" ><i class="fas fa-thumbs-up"></i> Aprovar</button>


                            </div>
                        </div>
                    </form>
                
                </li>
            ');
            } ?>
        </ul>

        <div class="modal fade" id="verificacao" tabindex="-1" role="dialog" aria-labelledby="modal-verificacao" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-verificacao">Tem certeza que deseja <b></b> o vídeo?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post">
                            <div class="form-group">
                                <label for="feedback" class="col-form-label">Deixe seu feedback ao autor do vídeo:</label>
                                <textarea class="form-control" id="feedback" rows="6" name="feedback" maxlength="500" placeholder="máximo de 500 caracteres" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary confirmar">Confirmar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $('#verificacao').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var verificacao = button.data('verificacao')
            var digito = button.data('digito')
            var video = button.data('contador')

            var modal = $(this)
            modal.find('.modal-title b').text(verificacao)
            modal.find('.modal-footer button.confirmar').attr('formaction', '../models/verificacao?ver=' + digito + '&video=' + video)

            if (verificacao == "aprovar") {
                modal.find('.modal-body label').text("Deixe abaixo um feedback para o autor do vídeo:")
            } else {
                modal.find('.modal-body label').text("Por favor, explique abaixo porque o vídeo não foi aprovado:")
            }
        })
    </script>
</body>

</html>