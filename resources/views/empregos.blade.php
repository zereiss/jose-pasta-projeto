<!doctype html>
<html lang="PT-BR">

<head>
    <title>Currículo em Casa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="front-end/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="pt-5">
    <header>
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top fundo-azul">
            <div class="container-fluid padd-padrao">
                <a class="navbar-brand" href="#">
                    Currículo em Casa
                    <i class="fa-solid fa-clipboard-list"></i>
                    <i class="fa-solid fa-house"></i></a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('/')}}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('empregos')}}">Empregos</a>
                        </li>
                        <li class="nav-item me-2">
                            <a name="login" id="Login" class="btn btn-outline-light" href="{{route('login')}}" role="button">Login</a>
                        </li>
                        <li class="nav-item me-2">
                            <a name="login-registro" id="login-registro" class="btn btn-outline-light" href="{{route('register')}}" role="button">Registre-se</a>
                        </li>
                        <li class="nav-item me-2"><a name="para-empresas" id="para-empresas" class="btn btn-outline-light" href="{{route('login')}}" role="button">Para
                                Empresas</a>
                        </li>

                        <li class="nav-item me-2">
                            <a name="cadastro-emprego" id="cadastro-emprego" class="btn btn-outline-light" href="{{route('cadastro_emprego')}}" role="button">Cadastro de empregos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <br>
        <br>
        <h2 class="sub-titulo border-5 border-secondary border-bottom mb-3">
            Alguns dos empregos disponíveis:
        </h2>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <!-- VS CODE: digitar div.col-md-4*3 adiciona 3 divs com a classe col-md-4 -->
                <div class="col-md-4 m-3 m-md-0">
                    <div class="card" data-aos="flip-left" data-aos-duration="700">
                        <img class="card-img-top" src="imagens/padeiro.jpg" alt="Foto de Maria Eduarda Tomás">
                        <div class="card-body">
                            <h3 class="card-title">Padeiro</h3>
                            <p class="card-text">Padaria do seu Zé</p>
                            <p class="card-text">
                                Procuramos padeiro com experiência no ramo
                            </p>
                            <p>Salário médio de R$1.800, 8h/dia</p>
                            <a class="btn btn-secondary w-100" href="#" role="button">Enviar currículo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-3 m-md-0">
                    <div class="card" data-aos="flip-left" data-aos-duration="700" data-aos-delay="700">
                        <img class="card-img-top" src="imagens/caixa.jpg" alt="Foto de Henrique Sanches">
                        <div class="card-body">
                            <h3 class="card-title">Caixa</h3>
                            <p class="card-text">Mercado do seu Zé</p>
                            <p class="card-text">
                                Procuramos caixa
                            </p>
                            <p>Salário de R$1.750</p>
                            <a class="btn btn-secondary w-100" href="#" role="button">Enviar currículo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-3 m-md-0">
                    <div class="card" data-aos="flip-left" data-aos-duration="700" data-aos-delay="700">
                        <img class="card-img-top" src="imagens/pescador.jpg" alt="Foto de Henrique Sanches">
                        <div class="card-body">
                            <h3 class="card-title">Pescador profissional</h3>
                            <p class="card-text">Pescaria do seu Zé</p>
                            <p class="card-text">
                                Procuramos pescador profissional
                            </p>
                            <p>Salário de R$2.000</p>
                            <a class="btn btn-secondary w-100" href="#" role="button">Enviar currículo</a>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="col-md-4 m-3 m-md-0">
                    <div class="card" data-aos="flip-left" data-aos-duration="700" data-aos-delay="1400">
                        <img class="card-img-top" src="imagens/contador.jpg" alt="Foto de Jefferson Souza">
                        <div class="card-body">
                            <h3 class="card-title">Contador</h3>
                            <p class="card-text">Empresa do seu Zé</p>
                            <p class="card-text">
                                Contador disponível para trabalho remoto
                            </p>
                            <p>Salário de R$4.800 </p>
                            <a class="btn btn-secondary w-100" href="#" role="button">Enviar currículo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-3 m-md-0">
                    <div class="card" data-aos="flip-left" data-aos-duration="700" data-aos-delay="700">
                        <img class="card-img-top" src="imagens/banco.jpg" alt="Foto de Henrique Sanches">
                        <div class="card-body">
                            <h3 class="card-title">Gerente de banco</h3>
                            <p class="card-text">Banco do seu Zé</p>
                            <p class="card-text">
                                Buscamos bancario com experiência
                            </p>
                            <p>Salário de R$12.300</p>
                            <a class="btn btn-secondary w-100" href="#" role="button">Enviar currículo</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-3 m-md-0">
                    <div class="card" data-aos="flip-left" data-aos-duration="700" data-aos-delay="700">
                        <img class="card-img-top" src="imagens/motorista.jpg" alt="Foto de Henrique Sanches">
                        <div class="card-body">
                            <h3 class="card-title">Motorista de ônibus</h3>
                            <p class="card-text">Zé Viagens</p>
                            <p class="card-text">
                                Motorista de grandes viagens
                            </p>
                            <p>Salário de R$2.300</p>
                            <a class="btn btn-secondary w-100" href="#" role="button">Enviar currículo</a>
                        </div>
                    </div>
                </div>
                <p></p>

            </div>
        </div>

        <br>
        <br>
        <br>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>