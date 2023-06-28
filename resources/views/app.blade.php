<!doctype html>
<html lang="PT-BR">

<head>
    <br>
    <br>
    <title>Currículo em Casa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="front-end/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="pt-5">
    <header>
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top fundo-azul">
            <div class="container-fluid padd-padrao">
                <a class="navbar-brand" href="#">
                    Currículo em Casa
                    <i class="fa-solid fa-clipboard-list"></i>
                    <i class="fa-solid fa-house"></i></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="empregos.html">Empregos</a>
                        </li>
                        <li class="nav-item me-2">
                            <a name="login" id="Login" class="btn btn-outline-light" href="login.html"
                                role="button">Login</a>
                        </li>
                        <li class="nav-item me-2">
                            <a name="login-registro" id="login-registro" class="btn btn-outline-light"
                                href="registro.html" role="button">Registre-se</a>
                        </li>
                        <li class="nav-item me-2"><a name="para-empresas" id="para-empresas"
                                class="btn btn-outline-light" href="empresa.html" role="button">Para
                                Empresas</a>
                        </li>

                        <li class="nav-item me-2">
                            <a name="cadastro-emprego" id="cadastro-emprego" class="btn btn-outline-light"
                                href="cadastro-emprego.html" role="button">Cadastro de empregos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>
        @yield('conteudo')
    </main>
    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>