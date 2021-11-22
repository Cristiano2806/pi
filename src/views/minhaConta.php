<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Open Unifeob - Minha conta</title>
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
        <?php
        include_once "../controllers/navbarController.php";
        ?>
    </header>
    <h2 class="text-center mb-3">Minha Conta</h2>

    <form class="container col-lg-6 col-xl-5 mt-4">
        <div class="form-row">
            <div class="col-md-5 mb-3">
                <label for="nome" name="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" value="<?php ?>" required>
            </div>
            <div class="col-md-7 mb-3">
                <label for="sobrenome" name="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="Digite seu sobrenome" value="<?php ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="email" name="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="ddd">Telefone (Celular):</label>
                <div class="d-flex">
                    <input type="text" class="form-control" id="ddd" name="ddd" maxlength="2" placeholder="DDD" style="width:60px" >
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" >
                </div>
            </div>
            
        </div>
        <div class="form-row">
        <div class="col-md-6 mb-3">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>

        </div>
        <div class="form-group">
                <label for="select_cat1">Selecione 3 assuntos de seu interesse:</label>
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
                <label for="descricao">Perfil:</label>
                <textarea class="form-control" id="status" name="status" rows="8" maxlength="500" placeholder="Conte aqui um pouco do seu perfil" required><?php echo ($descricao) ?></textarea>
            </div>
            <div class="div-button">
                <button type="submit" class="btn btn-amarelo">Atualizar</button>
            </div>




    </form>



   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>