<!DOCTYPE html>
<html lang="PT-BR">

<head>
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
              <a class="nav-link active" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('empregos')}}">Empregos</a>
            </li>
            <li class="nav-item me-2">
              <a name="login" id="Login" class="btn btn-outline-light" href="{{route('login')}}" role="button">Login</a>
            </li>
            <li class="nav-item me-2">
              <a name="login-registro" id="login-registro" class="btn btn-outline-light" href="{{route('register')}}"
                role="button">Registre-se</a>
            </li>
            <li class="nav-item me-2"><a name="para-empresas" id="para-empresas" class="btn btn-outline-light"
                href="{{route('login')}}" role="button">Para
                Empresas</a>
            </li>

            <li class="nav-item me-2">
              <a name="cadastro-emprego" id="cadastro-emprego" class="btn btn-outline-light"
                href="{{route('cadastro_emprego')}}" role="button">Cadastro de empregos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <div class="col-md-8 offset-md-2 mt-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="First slide"></li>
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
    <a href="registro.html" class="btn btn-outline-primary btn-lg">Registre-se agora!</a>
  </div>


  <main>
    <section>
      <section class="mt-5 pt-5 mb-2" data-aos="fade-left">
        <h2 class="sub-titulo mb-5 text-center border-bottom border-5 border-secondary">Nossos Serviços</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-3 m-3 m-md-0 bg-primary p-2 text-white">
              <h3>Design</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dolores corrupti
                tenetur, error recusandae tempora possimus labore sed perferendis, cum molestias deleniti
                nihil consequuntur sunt consequatur iure unde ut suscipit.
              </p>

            </div>
            <div style="background-color:rgb(228, 40, 187);" class="col-md-3 m-3 m-md-0 p-2 text-white">
              <h3>Nossa Marca</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla perferendis mollitia quidem
                omnis quas. Ab suscipit accusantium nulla earum facilis quia omnis. Nihil doloribus vel
                repellendus ut aperiam totam id!
              </p>

            </div>
            <div class="col-md-3 m-3 m-md-0 bg-primary p-2 text-white">
              <h3>Consultoria</h3>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima excepturi quisquam
                voluptate sit dolores odio quae at? Odio ex eveniet non voluptas exercitationem, similique
                laudantium suscipit ullam voluptates ratione fugiat.
              </p>

            </div>
            <div style="background-color:rgb(228, 40, 187);" class="col-md-3 m-3 m-md-0 p-2 text-white">
              <h3>Compromisso</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, officia? Suscipit, facilis
                fugiat. Sed nihil quibusdam eligendi veritatis eos exercitationem, optio totam fugiat
                impedit facilis. Voluptates deserunt odio quos nostrum.
              </p>

            </div>
          </div>
        </div>


        <br>
        <br>
        <br>
        <div id="mapa">
          <h1 class="text-center">Empresas perto de você:</h1>
          <iframe class="col-md-8 offset-md-2 mt-5"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.7474781337714!2d-45.86033172756582!3d-23.18271088484264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc96c8e4b37%3A0x961089d48d0b5240!2sSenac%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos!5e0!3m2!1spt-BR!2sbr!4v1680631055061!5m2!1spt-BR!2sbr"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          <h4 class="text-center">Selecione sua cidade:
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2 text-center lh-lg" type="search" placeholder="Pesquisar"
                aria-label="Pesquisar">
              <br>
              <button class="btn btn-primary my-2 my-sm-0 " type="submit">Pesquisar</button>
            </form>
          </h4>
        </div>
      </section>




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