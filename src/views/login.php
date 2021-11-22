<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registro/register.css">
    <title>Login</title>

</head>

<body>
    <main>

        <div class="text-center div-logo">
            <a href="../index.php">
                <img src="../img/Open-unifeob.png" class="logo" alt="logo Open Unifeob" />
            </a>
        </div>
        <div class=" d-flex justify-content-center">
            <?php
            if (isset($_SESSION["erroLogin"])) :
            ?>
                <div class="alert alert-danger w-25 text-center" role="alert"><?php echo $_SESSION["erroLogin"] ?></div>
            <?php
            endif;
            unset($_SESSION["erroLogin"]);
            ?>
        </div>
        <div class="container shadow formulario">
            <h3 class="text-center pt-3 pb-2"> Acesse sua conta</h3>
            <form action="../models/loginModel.php" method="post">
                <div class="form-group pl-5 pr-5">
                    <div class="form-row pt-2">
                        <label for="email ">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Digite seu E-mail" required>
                    </div>
                    <div class="form-row pt-2">
                        <label for="senha" class="w-25 ">Senha</label>
                        <div class="w-75 text-right ">
                            <a href="./recuperaSenha.php">Esqueci a senha</a>
                        </div>
                        <input type="password" class="form-control" id="senha" name="senha" aria-describedby="senha" placeholder="Digite sua senha">
                    </div>
                    <div class="form-row pt-2 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="lembrar">
                        <label class="custom-control-label" for="lembrar">Lembrar senha</label>
                    </div>
                    <div class="form-row pt-3 justify-content-center pb-3">

                        <button type="submit" class="btn btn-amarelo">Acessar</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="text-center">
            <h6>Não possui cadastrado? <a href="cadastro.php">Acesse aqui</a></h6>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>