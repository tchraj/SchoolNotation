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
                            <li class="scroll-to-section"><a href="#classements">Classements</a></li>
                            <li class="scroll-to-section"><a href="#team">Commentaires</a></li>
                                                     <li class="scroll-to-section">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                            {{-- <li class="scroll-to-section"><a href="{{ route('logout') }}">Logout</a></li> --}}

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
                                    <div class="">
                                        <a href="#"></a>
                                    </div>
                                    <div class="">
                                        <a href="#"></a>
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
                    @foreach ($univs as $item)
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
    {{-- <section class="section classements" id="classements">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Classement des Universités</h6>
                        <h2>Classement des Universités</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                @foreach ($criteres as $critere)
                    <li>
                        <a href="{{ route('classements.index', ['critere_id' => $critere->id]) }}"
                            class="{{ $loop->index == $critere->id ? 'is_active' : '' }}">{{ $critere->libelle }}</a>
                    </li>
                    </li>
                @endforeach
            </ul>
            @php
                $critere_id = null;
                $criteres = App\Models\Critere::all();

                // Si aucun critère n'est spécifié, utilisez l'identifiant du premier critère
                if (!$critere_id && $criteres->isNotEmpty()) {
                    $critere_id = $criteres->first()->id;
                }
                $notations = App\Models\Notation::where('criteria_id', $critere_id)->get();
                $notationsGroupedByUniversity = $notations->groupBy('univ_id');

                // Calculer le total des points pour chaque université
                $classement = [];
                foreach ($notationsGroupedByUniversity as $univId => $notations) {
                    $totalPoints = $notations->sum('score');
                    $classement[$univId] = $totalPoints;
                }

                // Trier les universités en fonction des points de notation
                arsort($classement);
                $universities = [];
                $points = [];

                foreach ($classement as $univId => $totalPoints) {
                    $universite = App\Models\University::find($univId);
                    $universities[] = $universite->univ_name;
                    $points[] = $totalPoints;
                }
            @endphp
            <div class="row event_box">
                @foreach ($classement as $univId => $totalPoints)
                    @php
                        $universite = App\Models\University::find($univId);
                    @endphp
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                        <div class="events_item">
                            <div class="thumb">
                                <a href="#"><img src="{{ asset('img/logos/'.$universite->logo) }}" alt=""></a>
                                <span style="background-color:rgb(49, 68, 240);color:white;" class="category">{{ $totalPoints }} points</span>
                                
                            </div>
                            <div class="down-content">
                                <span class="author">{{ $universite->univ_name }}</span>
                                <h4>{{ $universite->univ_name }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}


    <section class="section classements" id="classements">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>CLASSEMENTS</h6>
                        <h2>Classement des Universités</h2>
                    </div>
                </div>
            </div>
            @php
                $critere_id = null;
                $criteres = App\Models\Critere::all();

                // Si aucun critère n'est spécifié, utilisez l'identifiant du premier critère
                if (!$critere_id && $criteres->isNotEmpty()) {
                    $critere_id = $criteres->first()->id;
                }
                $notations = App\Models\Notation::where('criteria_id', $critere_id)->get();
                $notationsGroupedByUniversity = $notations->groupBy('univ_id');

                // Calculer le total des points pour chaque université
                $classement = [];
                foreach ($notationsGroupedByUniversity as $univId => $notations) {
                    $totalPoints = $notations->sum('score');
                    $classement[$univId] = $totalPoints;
                }

                // Trier les universités en fonction des points de notation
                arsort($classement);
                $universities = [];
                $points = [];

                foreach ($classement as $univId => $totalPoints) {
                    $universite = App\Models\University::find($univId);
                    $universities[] = $universite->univ_name;
                    $points[] = $totalPoints;
                }
            @endphp
            <ul class="event_filter">
                @foreach ($criteres as $critere)
                    <li>
                        <a href="#" class="critere-link {{ $critere->id == $critere_id ? 'is_active' : '' }}"
                            data-critere-id="{{ $critere->id }}">{{ $critere->libelle }}</a>
                    </li>
                @endforeach
            </ul>

            <div id="classement-container">
                @include('classements.partials.classement', [
                    'classement' => $classement,
                    'critereId' => $critere_id,
                ])
            </div>
        </div>
    </section>


    <section class="section classements" id="classements">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>CLASSEMENTS</h6>
                        <h2>Classement des Universités</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                @foreach ($criteres as $critere)
                    <li>
                        <a href="#" class="critere-link {{ $critere->id == $critere_id ? 'is_active' : '' }}"
                            data-critere-id="{{ $critere->id }}">{{ $critere->libelle }}</a>
                    </li>
                @endforeach
            </ul>

            <div id="classement-container">
                @include('classements.partials.classement', [
                    'classement' => $classement,
                    'critereId' => $critere_id,
                ])
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.critere-link').click(function(e) {
                e.preventDefault(); // Empêche le comportement par défaut du lien

                var critereId = $(this).data('critere-id');
                // Effectuez une requête AJAX pour récupérer les données de classement correspondantes
                $.ajax({
                    url: "{{ route('classements.getClassementByCategorie', ':critereId') }}"
                        .replace(':critereId', critereId), // URL de la page d'accueil
                    type: 'GET',
                    data: {
                        critere_id: critereId
                    }, // Paramètres de requête
                    success: function(response) {
                        // Mettez à jour la section de classement avec les données reçues
                        $('#classements').html(response);
                        // Recharge les critères
                        $('.event_filter').load(location.href + ' .event_filter');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

    {{-- <section class="section classements" id="classements">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Latest Courses</h6>
                        <h2>Latest Courses</h2>
                    </div>
                </div>
            </div>
            <ul class="event_filter">
                <li>
                    <a class="is_active" href="#!" data-filter="*">Show All</a>
                </li>
                <li>
                    <a href="#!" data-filter=".design">Webdesign</a>
                </li>
                <li>
                    <a href="#!" data-filter=".development">Development</a>
                </li>
                <li>
                    <a href="#!" data-filter=".wordpress">Wordpress</a>
                </li>
            </ul>
            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-01.jpg" alt=""></a>
                            <span class="category">Webdesign</span>
                            <span class="price">
                                <h6><em>$</em>160</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Learn Web Design</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-02.jpg" alt=""></a>
                            <span class="category">Development</span>
                            <span class="price">
                                <h6><em>$</em>340</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Cindy Walker</span>
                            <h4>Web Development Tips</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-03.jpg" alt=""></a>
                            <span class="category">Wordpress</span>
                            <span class="price">
                                <h6><em>$</em>640</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Latest Web Trends</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-04.jpg" alt=""></a>
                            <span class="category">Development</span>
                            <span class="price">
                                <h6><em>$</em>450</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Stella Blair</span>
                            <h4>Online Learning Steps</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress development">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-05.jpg" alt=""></a>
                            <span class="category">Wordpress</span>
                            <span class="price">
                                <h6><em>$</em>320</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">Sophia Rose</span>
                            <h4>Be a WordPress Master</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 wordpress design">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="assets/images/course-06.jpg" alt=""></a>
                            <span class="category">Webdesign</span>
                            <span class="price">
                                <h6><em>$</em>240</h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">David Hutson</span>
                            <h4>Full Stack Developer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2036 Scholar Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a
                        href="https://templatemo.com" rel="nofollow" target="_blank">TemplateMo</a> Distribution: <a
                        href="https://themewagon.com" rel="nofollow" target="_blank">ThemeWagon</a></p>
            </div>
        </div>
    </footer>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.critere-link').click(function(e) {
            e.preventDefault(); // Empêche le comportement par défaut du lien

            var critereId = $(this).data('critere-id');
            // Effectuez une requête AJAX pour récupérer les données de classement correspondantes
            $.ajax({
                url: "{{ route('classements.getClassementByCategorie', ':critereId') }}"
                            .replace(':critereId', critereId), // URL de la page d'accueil
                type: 'GET',
                data: {
                    critere_id: critereId
                }, // Paramètres de requête
                success: function(response) {
                    // Mettez à jour la section de classement avec les données reçues
                    $('#classements').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script> --}}

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
