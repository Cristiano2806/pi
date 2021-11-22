<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
  <title>Open Unifeob - Enviar vídeo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../views/css/upload/upload.css">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&family=Rock+Salt&family=Indie+Flower&family=Josefin+Sans:ital,wght@0,300;0,400;1,700&family=Mochiy+Pop+P+One&family=Orbitron:wght@400;500&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/847c65a0b9.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <?php include_once "../controllers/navbarController.php" ?>
  </header>
  <h2 class="text-center mb-3">Compartilhe seu vídeo</h2>
  <div class="container col-lg-6 col-xl-5 mt-5">
    <form action="../models/uploadVideoModel.php" method="post" class="shadow">
      <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite aqui o título do vídeo" required>
      </div>
      <div class="form-group">
        <label for="link">Link do Youtube:</label>
        <input type="text" class="form-control" id="link" name="link" placeholder="Cole aqui o link do vídeo do Youtube" required>
      </div>

      <div class="form-group">
        <label for="select_cat1">Selecione 3 assuntos relacionados ao seu vídeo (obrigatório 1):</label>
        <div class="d-flex div-select">
          <select class="form-control" id="select_cat1" name="categoria1" required>
            <option selected disabled>Selecione o 1º assunto...</option>
            <?php
            include_once "../models/categoriasModel.php";
            foreach ($dados_categorias as $categoria) {
              echo ('
                    <option value="' . $categoria["id_categoria"] . '">' . ucfirst($categoria["nome"]) . '</option>
                    ');
            }
            ?>
          </select>
          <select class="form-control" id="select_cat2" name="categoria2">
            <option selected disabled>Selecione o 2º assunto...</option>
            <?php
            include_once "../models/categoriasModel.php";
            foreach ($dados_categorias as $categoria) {
              echo ('
                      <option value="' . $categoria["id_categoria"] . '">' . ucfirst($categoria["nome"]) . '</option>
                                ');
            }
            ?>
          </select>
          <select class="form-control" id="select_cat3" name="categoria3">
            <option selected disabled>Selecione o 3º assunto...</option>
            <?php
            include_once "../models/categoriasModel.php";
            foreach ($dados_categorias as $categoria) {
              echo ('
                      <option value="' . $categoria["id_categoria"] . '">' . ucfirst($categoria["nome"]) . '</option>
                                ');
            }
            ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="descricao">Descrição:</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="8" maxlength="500" placeholder="Digite aqui a descrição do vídeo (limite de 500 caracteres)" required></textarea>
      </div>
      <div class="div-button">
        <button type="submit" class="btn btn-amarelo">Enviar vídeo</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>