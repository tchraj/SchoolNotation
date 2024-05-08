{{-- <div class="container">
    HI
    <button>
        <a href="{{ route('login') }}">Se connecter</a>
    </button>
    <button>
        <a href="{{ route('register') }}">S'inscrire</a>
    </button>
</div> --}}
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <title>School Notation</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h1>School Notation</h1>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Serach Start ***** -->
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Acceuil</a></li>
                            <li class="scroll-to-section"><a href="#services">Infos</a></li>
                            <li class="scroll-to-section"><a href="#courses">Universités</a></li>
                            {{-- <li class="scroll-to-section"><a href="#team">Commentaires</a></li> --}}
                            <li class="scroll-to-section"><a href="{{ route('register') }}">S'inscrire</a></li>
                            <li class="scroll-to-section"><a href="{{ route('login') }}">Connectez vous!</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Où suis-je ?</span>
                                <h2>Vous etes à School Notation</h2>
                                <p>Une plateforme vous permettant de consulter, noter, commenter des universités et bien
                                    d'autres choses !!!</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Découvrir</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Best Result</span>
                                <h2>Get the best result out of your effort</h2>
                                <p>You are allowed to use this template for any educational or commercial purpose. You
                                    are not allowed to re-distribute the template ZIP file on any other website.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category">Online Learning</span>
                                <h2>Online Learning helps you save the time</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporious
                                    incididunt ut labore et dolore magna aliqua suspendisse.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('images/service-01.png') }}" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Consultez les universités du Togo et notez les</h4>
                            <p>Découvrez les universités de notre cher pays le Togo et approfondissez vos connaissances.
                            </p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('images/service-02.png') }}" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Notez et commentez ces universités</h4>
                            <p>Evaluer les universités à travers des notes et donnez votre avis par des commentaires</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('images/service-03.png') }}" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Visualisez vos notations</h4>
                            <p>Vous pouvez voir la liste des notations que vous avez attribué aux différentes
                                universités</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Nos universités</h6>
                        <h2>Nos universités</h2>
                    </div>
                </div>
            </div>

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($universities as $item)
                        <div class="swiper-slide">
                            <div class="events_item">
                                <div class="thumb">
                                    <a href="{{ route('univs.details', $item->id) }}"><img
                                            src="{{ asset('img/logos/' . $item->logo) }}" alt=""></a>
                                    <span class="category">{{ $item->city->city_name }}</span>
                                    <span class="price">
                                        <h6 style="font-size: 18px;">{{ $item->type }}</h6>
                                    </span>
                                </div>
                                <div class="down-content">
                                    <span class="author">{{ $item->univ_name }}</span>
                                    <div class="main-button">
                                        <a href="{{ route('univs.details', $item->id) }}">Consulter</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a
                        href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a> Distribution: <a
                        href="https://themewagon.com" rel="nofollow" target="_blank">ThemeWagon</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // Paramètres de la responsive
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>

</body>

</html>
