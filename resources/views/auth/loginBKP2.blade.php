<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>Currículo em Casa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
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
                        <li class="nav-item me-2"><a name="para-empresas" id="para-empresas" class="btn btn-outline-light" href="{{route('cadastro_empresa')}}" role="button">Para
                                Empresas</a>
                        </li>

                        <li class="nav-item me-2">
                            <a name="cadastro-emprego" id="cadastro-emprego" class="btn btn-outline-light" href="{{route('cadastro_emprego')}}" role="button">Cadastro de empregos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" class="formLogin" action="{{ route('login') }}">
            @csrf
            <div>
                <h1>Login
                    <i class="fa-solid fa-clipboard-list"></i>
                    <i class="fa-solid fa-house"></i>
                </h1>
            </div>
            <p>Digite os seus dados de acesso no campo abaixo:</p>
            <div>
                <label for="email" value="{{ __('Email') }}"> Email:
                    <input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus autocomplete="username" />
            </div>
            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}">Senha:
                    <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
                @endif
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-outline-primary btn-lg" value="Acessar">
            </div>

            <br>
            <div class="text-center">
                <a href="" class="btn btn-outline-primary btn-lg">
                    <h6 class="text-center">Login de Empresa</h6>
                </a>
            </div>
        </form>


    </header>



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