<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/registro/register.css">
    <title>Cadastro</title>

</head>

<body>
    <main>
        <form action="../models/cadastroModel.php" method="post">
            <div class="text-center div-logo">
                <a href="../index.php">
                    <img src="../img/Open-unifeob.png" class="logo" alt="logo Open Unifeob" />
                </a>
            </div>
            <div class="container shadow formulario">
                <h3 class="text-center pt-3 pb-2"> Crie sua Conta</h3>
                <div class="form-group pl-5 pr-5">
                    <div class="form-row ">
                        <label for="nome ">Nome</label>
                        <input type="text " class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="Digite seu Nome" required>
                    </div>
                    <div class="form-row pt-2 ">
                        <label for="sobrenome ">Sobrenome</label>
                        <input type="text" class="form-control" id="Sobrenome" name="sobrenome" aria-describedby="sobrenome " placeholder="Digite se Sobrenome" required>
                    </div>
                    <div class="form-row pt-2">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Digite seu E-mail" required>
                    </div>
                    <div class="form-row pt-2">
                        <label for="senha" class="w-25">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" aria-describedby="senha" placeholder="Crie uma senha" required>
                    </div>
                    <div class="form-row pt-2">
                        <label for="select_cat1">Selecione 3 assuntos de interesse (1 obrigatório):</label>
                        <div class="d-flex div-select">
                            <select class="form-control" id="select_cat1" name="categoria1" required>
                                <option selected disabled>1º assunto...</option>
                                <?php
                                include_once "../models/categoriasModel.php";
                                foreach ($dados_categorias as $categoria) {
                                    echo ('
                    <option value="' . $categoria["id_categoria"] . '">' . ucfirst($categoria["nome"]) . '</option>
                    ');
                                }
                                ?>
                            </select>
                            <select class="form-control ml-1" id="select_cat2" name="categoria2">
                                <option selected disabled>2º assunto...</option>
                                <?php
                                include_once "../models/categoriasModel.php";
                                foreach ($dados_categorias as $categoria) {
                                    echo ('
                      <option value="' . $categoria["id_categoria"] . '">' . ucfirst($categoria["nome"]) . '</option>
                                ');
                                }
                                ?>
                            </select>
                            <select class="form-control ml-1" id="select_cat3" name="categoria3">
                                <option selected disabled>3º assunto...</option>
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
                    <div class="form-row pt-2">
                        <label>Identifique o tipo de usuário:</label>
                    </div>
                    <div class="div-checkbox">
                        <div class="form-row custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input" id="aluno" name="aluno">
                            <label class="custom-control-label" for="aluno">aluno</label>
                        </div>

                        <div class="form-row custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input" id="professor" name="professor">
                            <label class="custom-control-label" for="professor">professor</label>
                        </div>

                        <div class="form-row custom-control custom-checkbox ">
                            <input type="checkbox" class="custom-control-input" id="mentor" name="mentor">
                            <label class="custom-control-label" for="mentor">mentor</label>
                        </div>
                    </div>

                    <div class="form-row pt-3 justify-content-center pb-3">
                        <button type="submit" class="btn btn-amarelo">Cadastrar</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center">
            <h6>Já possui cadastrado? <a href="login.php">Acesse aqui</a></h6>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>