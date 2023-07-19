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
            <li class="nav-item me-2">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
              this.closest('form').submit(); " role="button">
                  <i class="fas fa-sign-out-alt"></i>
                  {{ __('Log Out') }}
                </a>
              </form>
            </li>
          </ul>
        </div>

      </div>
    </nav>

  </header>

  <div class="col-md-8 offset-md-2 mt-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="imagens/oportunidadedeemprego.jpg" class="w-100 d-block" alt="First slide">
        </div>
        <div class="carousel-item">
          <img src="imagens/carousel-2.jpg" class="w-100 d-block" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img src="imagens/carousel-3.jpg" class="w-100 d-block" alt="Third slide">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <br>
  <div class="text-center">
    <a href="" class="btn btn-outline-primary btn-lg">Registre-se agora!</a>
  </div>


  <main>
    <section>
      <section class="mt-5 pt-5 mb-2" data-aos="fade-left">
        <h2 class="sub-titulo mb-5 text-center border-bottom border-5 border-secondary">Nossos Serviços</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-3 m-3 m-md-0 bg-primary p-2 text-white">
              <h3>Maior facilidade</h3>
              <p>
              Com o Currículo em Casa, mandar seu currículo para grandes empresas se tornou mais rapido e prático

              </p>

            </div>
            <div style="background-color:rgb(228, 40, 187);" class="col-md-3 m-3 m-md-0 p-2 text-white">
              <h3>Multiplos empregos disponíveis</h3>
              <p>
              Milhares de empresas esperando você mandar seu currículo!
              </p>

            </div>
            <div class="col-md-3 m-3 m-md-0 bg-primary p-2 text-white">
              <h3>Cadastro simples e rapido</h3>
              <p>
              Com a Currículo em Casa, você faz seu cadastro em menos de 5 minutos, e já começa a enviar seu currículo!!

              </p>

            </div>
            <div style="background-color:rgb(228, 40, 187);" class="col-md-3 m-3 m-md-0 p-2 text-white">
              <h3>Fácil para Empresas</h3>
              <p>
              Cadastre sua empresa e coloque quantos empregos quiser!!

              </p>

            </div>
          </div>
        </div>


        <br>
        <br>
        <br>
        <h2 class="sub-titulo border-5 border-secondary border-bottom mb-3 text-center">
          Alguns empregos disponíveis:
        </h2>

        <div class="container">
          <div class="row">
            <!-- VS CODE: digitar div.col-md-4*3 adiciona 3 divs com a classe col-md-4 -->
            <div class="col-md-4 m-3 m-md-0">
              <div class="card" data-aos="flip-left" data-aos-duration="700">
                <img class="card-img-top" src="imagens/padeiro.jpg" alt="Foto de Maria Eduarda Tomás">
                <div class="card-body">
                  <h4 class="card-title">Padeiro</h4>
                  <p class="card-text">Padaria do seu Zé</p>
                  <p class="card-text">
                    Procuramos padeiro com experiência no ramo
                  </p>
                  <p>
                    Salário médio de R$1.800, 8h/dia
                  </p>
                  <a class="btn btn-secondary w-100" href="registro.html" role="button">Contato</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 m-3 m-md-0">
              <div class="card" data-aos="flip-left" data-aos-duration="700" data-aos-delay="700">
                <img class="card-img-top" src="imagens/caixa.jpg" alt="Foto de Henrique Sanches">
                <div class="card-body">
                  <h4 class="card-title">Caixa</h4>
                  <p class="card-text">Mercado do seu Zé</p>
                  <p class="card-text">
                    Procuramos caixa
                  </p>
                  <p>Salário de R$1.750</p>
                  <a class="btn btn-secondary w-100" href="registro.html" role="button">Contato</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 m-3 m-md-0">
              <div class="card" data-aos="flip-left" data-aos-duration="700" data-aos-delay="1400">
                <img class="card-img-top" src="imagens/motorista.jpg" alt="Foto de Jefferson Souza">
                <div class="card-body">
                  <h4 class="card-title">Motorista de ônibus</h4>
                  <p class="card-text">Zé Viagens</p>
                  <p class="card-text">
                    Motorista de grandes viagens
                  </p>
                  <p>Salário de R$2.300</p>
                  <a class="btn btn-secondary w-100" href="registro.html" role="button">Contato</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <br>
        <div class="text-center">
          <a href="" class="btn btn-outline-primary btn-lg">Ver empregos</a>
        </div>
      </section>




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