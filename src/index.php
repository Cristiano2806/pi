<!doctype html>
<html lang="pt-br">

<head>
    <title>OPEN UNIFEOB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark h-sm-25" id="nav-bar">
            <a class="navbar-brand nav-item ativo logo-nav" id="logo-nav" href="#inicio" style="display: none"><img src="./img/Open-unifeob.png" alt="logo Open Unifeob" class="logo-nav"></a>
            <button class="navbar-toggler btn-hamburguer" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto topnav text-center mb-4 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#surgimento">Apresentação<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plataforma">Plataforma</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#conteudo">Conteúdo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                    <li>
                        <a class="btn btn-primary mt-3 mt-lg-0 ml-lg-4" type="button" href="./views/login.php">Entrar</a>
                    </li>
                    <li>
                        <a class="btn btn-outline-primary mt-3 mt-lg-0 ml-lg-3" type="button" href="./views/cadastro.php">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section id="inicio" class="inicio container col-12">
            <div class="text-center">
                <img src="./img/Open-unifeob.png" class="logo" alt="logo Open Unifeob" />
                <h3 class="pt-2">Aqui o aluno aprende e ensina!</h3>
            </div>
            <div class="row justify-content-center">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./img/conteudo.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/compartilhe.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./img/cadastre.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </section>
        <section id="surgimento" class="surgimento container col-11">
            <div class="row justify-content-center">
                <div class="media div-ideia">
                    <div class="media-body pl-5 div-surgimento">
                        <h4>Como surgiu a ideia?</h4>
                        <div class="yellow-bar mb-4"></div>
                        <p>
                            Em maio de 2020, logo após o ínicio da pandemia da COVID-19, a UNIFEOB reuniu dois grupos de alunos de variados cursos para discutir sobre o futuro da educação.
                        </p>
                        <p>
                            Depois de muitos debates e trocas de ideias, ambos os grupos idealizaram uma plataforma para disponibilizar aos alunos conteúdos extracurriculares, produzidos pelos próprios alunos, como forma de compartilhar, complementar e ampliar o aprendizado.
                        </p>
                        <p>
                            A proposta é fazer do aluno o protagonista, pois acreditamos que a melhor forma de aprender é ensinando!
                        </p>
                        <p>
                            No 2º semestre de 2021 surgiu a oportunidade do projeto sair do papel. A Escola de Negócios da UNIFEOB propôs aos alunos do 4º semestre de Análise e Desenvolvimento de Sistemas dar início no desenvolvimento da plataforma.
                        </p>

                    </div>
                    <img class="align-self-center ml-3 mr-5 mt-2 img-ideia d-none d-md-block" src="./img/ideia2.png" alt="imagem de lâmpada relacionado a ideia">
                </div>
                <div class="container video mt-4 mb-5 ">
                    <p><b>Pitch de apresentação do projeto:</b></p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://drive.google.com/file/d/117OCpisHyi5OmVm002DQ-Ar4eUafsdcS/preview" allowfullscreen></iframe>
                    </div>
        </section>
        <section class="plataforma" id="plataforma">
            <div class="container">
                <div class="text-center">
                    <h4 id='titulo-plataforma'>Plataforma</h4>
                    <div class="white-bar mb-4 mx-auto"></div>
                </div>
                <div class="d-md-flex justify-content-center">
                    <div class="card card-plat card-plat1 shadow m-2 col-md-4 text-center w-100" style="width: 18rem;">
                        <img class="card-img-top img-card align-self-center pt-3" src="./img/world-grid-amarelo.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text card-texto">Plataforma online, totalmente gratuita para alunos e ex-alunos UNIFEOB.</p>
                        </div>
                    </div>
                    <div class="card card-plat card-plat2 shadow m-2 col-md-4 text-center w-100" style="width: 18rem;">
                        <img class="card-img-top img-card align-self-center pt-3" src="./img/responsive-amarelo.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text card-texto"><b>Multiplataforma:</b> acesse do seu computador, tablet ou celular.</p>
                        </div>
                    </div>
                    <div class="card card-plat card-plat3 shadow m-2 col-md-4 text-center w-100" style="width: 18rem;">
                        <img class="card-img-top img-card align-self-center pt-3" src="./img/cloud-computing-amarelo.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text card-texto"><b>Diponível também offline:</b> faça o download dos vídeos para assistir quando e onde quiser.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="conteudo container" id="conteudo">
            <div class="container-fluid">
                <div class="text-center">
                    <h4>Conteúdo</h4>
                    <div class="blue-bar mb-4 mx-auto"></div>
                </div>
            </div>
            <div class="container-fluid d-md-flex col-md-12 justify-content-around">
                <div class="d-flex col-md-6 pr-0 pl-0 justify-content-around">
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-um pt-3" src="./img/students.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Produzido pelos próprios alunos UNIFEOB.</p>
                        </div>
                    </div>
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-dois pt-1" src="./img/alunos.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Linguagem simples e de fácil compreensão.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-md-6 pl-0 pr-0 justify-content-around">
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-tres pt-3" src="./img/spyware.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Material revisado pelos professores e mentores.</p>
                        </div>
                    </div>
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-quatro pt-3" src="./img/estude.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Grande diversidade de áreas e assuntos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-md-flex col-md-12 justify-content-around">
                <div class="d-flex col-md-6 pr-0 pl-0 justify-content-around">
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-cinco pt-3" src="./img/chat.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Fóruns de discussão, com comunidade ativa para ajudar os alunos.</p>
                        </div>
                    </div>
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-seis pt-3" src="./img/caderno.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Material de apoio para auxiliar nos estudos*.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-md-6 pl-0 pr-0 justify-content-around">
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-sete pt-3" src="./img/technology-podcast.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Podcasts com temas atuais.</p>
                        </div>
                    </div>
                    <div class="card-cont col-md-5 text-center">
                        <img class="card-img-top img-card-oito pt-3" src="./img/video-playlist.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Criação de playlists com seus planos de estudo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contato container col-12 pb-5" id="contato">
            <div class="row justify-content-center justify-content-md-center">
                <div class="d-lg-flex d-md-block ml-md-4">
                    <div class="col-md-4 justify-content-around div-contato">
                        <h4>Contato</h4>
                        <div class="yellow-bar mb-5"></div>
                        <p class="pt-3">Ajude-nos a melhorar. Preencha o formulário com suas sugestões, crítcas e melhorias que entender necessárias.</p>
                        <p>Sua opinião é muito importante para nós!</p>
                    </div>
                    <div class="d-md-flex col-md-7 ml-md-5 formulario">
                        <div class="form-group w-100">
                            <div class="form-row pt-2 d-block">
                                <label for="nome ">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite seu nome completo">
                            </div>
                            <div class="form-row pt-2 d-block">
                                <label for="email ">E-mail</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu E-mail">
                            </div>
                            <div class="form-row pt-2">
                                <label for="text-area">Escreva aqui sua opinião:</label>
                                <textarea class="form-control" id="text-area" rows="5"></textarea>
                            </div>
                            <div class="form-row pt-2 custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check-aluno" required>
                                <label class="custom-control-label" for="check-aluno">Sou aluno UNIFEOB</label>
                            </div>
                            <div class="form-row pt-3 pb-3">
                                <button type="submit" class="btn btn-primary btn-enviar">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <button type="button" class="btn btn-floating btn-lg btn-top" id="btn-back-to-top">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                <path fill-rule="evenodd" d="M3.47 7.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L9 4.81v7.44a.75.75 0 01-1.5 0V4.81L4.53 7.78a.75.75 0 01-1.06 0z"></path>
            </svg>
        </button>
    </main>
    <footer>
        <nav class="rodape container col-12 d-block sm-flex-column">
            <div class="pl-3 d-sm-block d-md-flex text-center-sm">
                <div class="pt-sm-3 w-100">
                    <p><b>UNIFEOB - CENTRO UNIVERSITÁRIO FUNDAÇÃO DE ENSINO OCTÁVIO BASTOS</b></p>
                    <p>CAMPUS II - Mantiqueira</p>
                    <p>Av. Dr. Octávio da Silva Bastos, 2439 - Jardim Nova São João</p>
                    <p>São João da Boa Vista - SP</p>
                    <br />
                </div>
                <div class="div-social align-self-center pb-sm-2 w-100">
                    <div>
                        <p style="font-size:16px !important">ACOMPANHE NAS REDES SOCIAIS</p>
                    </div>
                    <div class="div-icones-sociais">
                        
                        <a class="icone icone-facebook" href="https://www.facebook.com/unifeob" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
                        <a class="icone icone-instagram" href="https://www.instagram.com/unifeob_oficial/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                        <a class="icone icone-linkedin" href="https://www.linkedin.com/school/unifeob" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                        <a class="icone icone-twitter" href="https://www.facebook.com/unifeob" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                        <a class="icone icone-youtube" href="https://www.youtube.com/user/unifeob" target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <p><b>© UNIFEOB 2021.</b> Todos os direitos reservados. <a href="https://unifeob.edu.br/politica-de-privacidade/" target="_blank" class="politica">Poltíca de Privacidade.<a></p>
                <br>
            </div>
        </nav>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</body>

<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction();
        scrollFunctionLogo();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // Quando clica no botão, scrola até o topo
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    //Logo se tornando visível
    let mylogo = document.getElementById("logo-nav");

    function scrollFunctionLogo() {
        if (
            document.body.scrollTop > 250 ||
            document.documentElement.scrollTop > 250
        ) {
            mylogo.style.display = "block";
        } else {
            mylogo.style.display = "none";
        }
    }

    // Adicionando classe active
    var header = document.getElementById("nav-bar");
    var btns = header.getElementsByClassName("nav-item");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("ativo");
            current[0].className = current[0].className.replace(" ativo", "");
            this.className += " ativo";
        });
    }

    var aparecerAbaixo = {
        distance: '200px',
        duration: 2000,
        origin: 'bottom',
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        opacity: 0,
        viewFactor: 0.3
    };

    var aparecerAcima = {
        distance: '100px',
        duration: 2000,
        origin: 'top',
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        opacity: 0
    };

    var aparecerEsquerda = {
        distance: '50px',
        duration: 2000,
        origin: 'left',
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        opacity: 0
    };

    var aparecerDireita = {
        distance: '50px',
        duration: 2000,
        origin: 'right',
        easing: 'cubic-bezier(0.5, 0, 0, 1)',
        opacity: 0
    };

    var imagemIdeia = {
        // distance: '200px',
        duration: 1000,
        // origin: 'right',
        easing: 'ease-in',
        opacity: 0,
        viewFactor: 0.8
    }

    ScrollReveal().reveal('.card-cont', aparecerAbaixo);
    ScrollReveal().reveal('.card-plat2', aparecerAcima);
    ScrollReveal().reveal('.card-plat1', aparecerEsquerda);
    ScrollReveal().reveal('.card-plat3', aparecerDireita);
    ScrollReveal().reveal('.img-ideia', imagemIdeia);
    ScrollReveal().reveal('yellow-bar', {
        viewFactor: 0.1
    });
</script>

</html>