@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header class="bg-primary text-white text-center">
        <div class="container">
            <img class="img-fluid mb-5 d-block mx-auto" src="{{URL::to('img/welcome/cooperation.png')}}" style="max-width: 20%;" alt="">
            <h1 class="text-uppercase mb-0">Pontos Aqui</h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Programa de Fidelização</h2>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2 class="text-center text-uppercase text-secondary mb-0">Compre, Acumule, Ganhe!</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <!-- Carousel -->
                <div class="container">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <div class="carousel-item col-md-3  active">
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail">
                                        <a href="#" title="image 1" class="thumb">
                                        <img class="img-fluid mx-auto d-block" src="{{URL::to('img/portfolio/cabin.png')}}" alt="slide 1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-3 ">
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail">
                                        <a href="#" title="image 3" class="thumb">
                                        <img class="img-fluid mx-auto d-block" src="{{URL::to('img/portfolio/cake.png')}}" alt="slide 2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-3 ">
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail">
                                        <a href="#" title="image 4" class="thumb">
                                        <img class="img-fluid mx-auto d-block" src="{{URL::to('img/portfolio/game.png')}}" alt="slide 3">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-3 ">
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail">
                                        <a href="#" title="image 5" class="thumb">
                                        <img class="img-fluid mx-auto d-block" src="{{URL::to('img/portfolio/submarine.png')}}" alt="slide 4">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
        <div class="container">
            <h2 class="text-center text-uppercase text-white">Sobre</h2>
            <hr class="star-light mb-5">
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">
                        Esqueça os cartões fidelidade de carimbo e inove com um programa de fidelidade digital.
                    </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">
                        Indique seus amigos e ganhe pontos!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Localização</h4>
                    <p class="lead mb-0">Rio de Janeiro
                    <br>Brasil</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4"></h4>
                    <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fab fa-fw fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fab fa-fw fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fab fa-fw fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fab fa-fw fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                        <i class="fab fa-fw fa-dribbble"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">Pontos Aqui</h4>
                    <p class="lead mb-0">Participe!</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>Copyright &copy; Pontos Aqui 2019</small>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
@endsection


 