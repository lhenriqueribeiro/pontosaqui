<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PontosAqui | Home</title>
  

  <!-- Bootstrap core CSS -->
  <link href="{{URL::to('grayscale/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{URL::to('grayscale/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{URL::to('grayscale/css/grayscale.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <img src="{{URL::to('img/logo-2.png')}}" class="img-fluid" alt="" style="width:2%">
      <p></p>
      <p></p>
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PontosAqui</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Promo&ccedil;&otilde;es</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contato</a>
          </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('cadastro') }}">{{ __('Cadastrar') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Pontos Aqui</h1>
        <img src="{{URL::to('img/logo-2.png')}}" class="img-fluid" alt="" style="width:50%">
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Clientes e Lojistas de mãos dadas.</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Faça Parte</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Compre -> Cadastre -> Troque !!!</h2>
          <p class="text-white-50">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
          text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five 
          centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
          sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </p>
          <div class="col-lg-12 mx-auto">
            <img class="img-fluid mb-3 mb-lg-0 float-left" src="{{URL::to('img/communication.png')}}" style="width: 150px;" alt="">
            <img class="img-fluid mb-3 mb-lg-0 float-none" src="{{URL::to('img/puzzle.png')}}" style="width: 150px;" alt="">
            <img class="img-fluid mb-3 mb-lg-0 float-right" src="{{URL::to('img/friendship.png')}}" style="width: 150px;" alt="" >
          </div>
          <p></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section --> 
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <h2 class="text-white mb-4">CompreTroque</h2>
          <img class="img-fluid mb-3 mb-lg-0" src="{{URL::to('img/relacionamentos-2.png')}}"  alt="" >
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="{{URL::to('img/marketing-1.jpg')}}" style="width:110%" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">O que é o Lorem Ipsum?</h4>
                <p class="mb-0 text-white-50">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="{{URL::to('img/marketing-2.jpg')}}"  alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">De onde é que ele vem?</h4>
                <p class="mb-0 text-white-50">Ao contrário da crença popular, o Lorem Ipsum não é simplesmente texto aleatório. Tem raízes numa peça de literatura clássica em Latim, de 45 AC, tornando-o com mais de 2000 anos. Richard McClintock.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+1 (555) 902-8832</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{URL::to('grayscale/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('grayscale/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{URL::to('grayscale/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{URL::to('grayscale/js/grayscale.min.js')}}"></script>

  
</body>

</html>
