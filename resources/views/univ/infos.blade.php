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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-BYNN3a4ZhIVAXHyMs5R8r1lKXZsK9M54pVk9rBvea5ff5KZ1QHMqg2F+qEtuICrTzkiwqtnWwFd66gk/nGFnqw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/univ.css') }}">
    <!--


    TemplateMo 586 Scholar

    https://templatemo.com/tm-586-scholar

    -->
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        .comments-container {
            margin-right: auto;
            /* Pour aligner à droite */
        }

        .ag-format-container {
            /* width: 1142px; */
            margin: 0 auto;
        }


        /* .ag-courses_box {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;

                padding: 50px 0;
            }

            .ag-courses_item {
                -ms-flex-preferred-size: calc(33.33333% - 30px);
                flex-basis: calc(33.33333% - 30px);
                margin-bottom: 30px;
                border-radius: 28px;
                -ms-flex-align: start;
                align-items: flex-start;
                -ms-flex-wrap: wrap;
                overflow-y: auto;
            } */

        .ag-courses_box {
            display: flex;
            flex-wrap: wrap;
            /* Permet aux éléments de s'aligner sur plusieurs lignes */
            justify-content: space-between;
            /* Pour aligner les éléments sur trois colonnes */
            padding-bottom: 20px;

        }

        .ag-courses_item {
            -ms-flex-preferred-size: calc(33.33333% - 30px);
            flex-basis: calc(33.33333% - 30px);
            margin-bottom: 20px;
            border-radius: 28px;
            /* Ajoute un espacement entre les éléments */
            /* Autres styles... */
        }

        .ag-courses-item_link {
            display: block;
            padding: 10px 20px;
            background-color: #121212;

            overflow: hidden;

            position: relative;
        }

        .ag-courses-item_link:hover,
        .ag-courses-item_link:hover .ag-courses-item_date {
            text-decoration: none;
            color: #FFF;
        }

        .ag-courses-item_link:hover .ag-courses-item_bg {
            -webkit-transform: scale(10);
            -ms-transform: scale(10);
            transform: scale(10);
        }

        .ag-courses-item_title {
            min-height: 87px;
            margin: 0 0 25px;

            overflow: hidden;

            font-weight: bold;
            font-size: 30px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }

        .ag-courses-item_date-box {
            font-size: 18px;
            color: #FFF;

            z-index: 2;
            position: relative;
        }

        .ag-courses-item_date {
            font-weight: bold;
            color: #f9b234;

            -webkit-transition: color .5s ease;
            -o-transition: color .5s ease;
            transition: color .5s ease
        }

        .ag-courses-item_bg {
            height: 128px;
            width: 128px;
            background-color: #952aff;

            z-index: 1;
            position: absolute;
            top: -75px;
            right: -75px;

            border-radius: 50%;

            -webkit-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }

        .ag-courses_item:nth-child(2n) .ag-courses-item_bg {
            background-color: #3ecd5e;
        }

        .ag-courses_item:nth-child(3n) .ag-courses-item_bg {
            background-color: #e44002;
        }

        .ag-courses_item:nth-child(4n) .ag-courses-item_bg {
            background-color: #f9b234;
        }

        .ag-courses_item:nth-child(5n) .ag-courses-item_bg {
            background-color: #cd3e94;
        }

        .ag-courses_item:nth-child(6n) .ag-courses-item_bg {
            background-color: #4c49ea;
        }



        @media only screen and (max-width: 979px) {
            .ag-courses_item {
                -ms-flex-preferred-size: calc(50% - 30px);
                flex-basis: calc(50% - 30px);
            }

            .ag-courses-item_title {
                font-size: 24px;
            }
        }

        @media only screen and (max-width: 767px) {
            .ag-format-container {
                width: 96%;
            }

        }

        @media only screen and (max-width: 639px) {
            .ag-courses_item {
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
            }

            .ag-courses-item_title {
                min-height: 72px;
                line-height: 1;

                font-size: 20px;
            }

            .ag-courses-item_link {
                padding: 22px 40px;
            }

            .ag-courses-item_date-box {
                font-size: 15px;
            }
        }
    </style>
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
                            <li class="scroll-to-section"><a href="{{ route('home') }}#top" class="active">Acceuil</a>
                            </li>
                            <li class="scroll-to-section"><a href="#mesnotations">Mes notations</a></li>
                            <li class="scroll-to-section"><a href="{{ route('home') }}#courses">Universités</a></li>
                            {{-- <li class="scroll-to-section"><a href="#team">Commentaires</a></li> --}}
                            <li class="scroll-to-section"><a href="{{ route('register') }}">S'inscrire</a></li>
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
    @if (session('success'))
        <script>
            // Récupérer le message de succès depuis la variable de session
            var successMessage = '{{ session('success') }}';

            // Créer une boîte de dialogue personnalisée
            var successDialog = document.createElement('div');
            successDialog.classList.add('success-dialog');
            successDialog.innerHTML = '<div class="success-dialog-content">' + successMessage + '</div>';

            // Ajouter la boîte de dialogue au document
            document.body.appendChild(successDialog);

            // Fermer la boîte de dialogue après 3 secondes
            setTimeout(function() {
                document.body.removeChild(successDialog);
            }, 3000);
        </script>

        <style>
            .success-dialog {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #4CAF50;
                color: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
                z-index: 9999;
            }

            .success-dialog-content {
                font-size: 16px;
                font-weight: bold;
            }
        </style>
    @endif

    {{-- <style>
            .success-dialog {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #4CAF50;
                color: white;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
                z-index: 9999;
            }

            .success-dialog-content {
                font-size: 16px;
                font-weight: bold;
            }
        </style> --}}
    <div class="main-banner" style="background-color: #35b69f">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1"
                            style="background-image: url({{ asset('img/logos/' . $univ->logo) }});">
                            <div class="header-text">
                                <span class="category text-base font-bold"
                                    style="font-size:35px;">{{ $univ->univ_name }}</span>
                                <h2 class="text-dark">Vous etes à School Notation</h2>
                                <p>Une plateforme vous permettant de consulter, noter, commenter des universités et bien
                                    d'autres choses !!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display: flex;">
        <section class="container col-md-8 mb-5 mt-5 ml-6" style="overflow-y: auto;">
            <h1 style="font-size: 40px;" class="mb-3 p-3"><strong>{{ $univ->univ_name }}</strong>


            </h1>Type:<span style="background-color: #4c49ea" class="text-sm ml-3">{{ $univ->type }}</span>
            {{-- PARTIE DE NOTATION --}}
            <br><br>

            <button type="button" data-toggle="modal" data-target="#ratingModal-{{ $univ->id }}"
                class="flex items-center justify-between px-2 py-1 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                aria-label="Noter" style="background-color:#f9b234;border-width:0">
                <i class="fas fa-star mr-2"></i> Noter
            </button>
            <!-- Modal -->
            <div class="modal fade" id="ratingModal-{{ $univ->id }}" tabindex="-1" role="dialog"
                aria-labelledby="ratingModalLabel-{{ $univ->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ratingModalLabel-{{ $univ->id }}">Noter
                                l'université</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('notations.store', $univ->id) }}" method="POST"
                                name="notationForm" data-univ-id="{{ $univ->id }}">
                                @csrf
                                @foreach ($criteria as $critere)
                                    <h5>{{ $critere->libelle }} :</h5>
                                    <input type="range" min="0" max="100" step="1"
                                        name="scores[{{ $critere->id }}]"
                                        class="bg-gray-200 appearance-none rounded h-2">
                                @endforeach
                                <input type="hidden" name="univ_id" value="{{ $univ->id }}">
                                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            {{-- <button type="submit" id="monBouton"  >Valider</button> --}}
                            <button type="submit" id="btnValider" class="btn btn-primary"
                                data-dismiss="modal">Valider</button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>


            {{-- FIN NOTATION --}}
            <h1 class="text-base my-2">DESCRIPTION</h1>
            <p>{{ $univ->description }}</p>
            <h1 class="text-base my-2">FORMATIONS</h1>
            <div
                class="block w-full max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white">
                <ul class="w-full">
                    @foreach ($univ->formations as $cle => $format)
                        <li class="w-full border-b-2 border-neutral-100 border-opacity-100 p-4  dark:border-white/10">
                            {{ $format }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <h1>Contacts:</h1>
            <div
                class="block w-full max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white">


                <ul class="w-full">
                    @if (is_array($univ->contacts) && count($univ->contacts) > 0)
                        @foreach ($univ->contacts as $contact)
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 p-4  dark:border-white/10">
                                {{ $contact }}
                            </li>
                        @endforeach
                    @else
                        <p>Aucun contact disponible.</p>
                    @endif
                </ul>
            </div>

            <div class="mb-3">

                <h1>Sites:</h1>

                <div
                    class="block w-full max-w-[18rem] rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white">


                    <ul class="w-full">
                        @foreach ($univ->websites as $site)
                            <li
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 p-4  dark:border-white/10">
                                {{ $site }}
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
            <h1>Mes notations</h1><br>
            <div id="mesnotations" class="mt-10">
                @include('notations.list')
            </div>
        </section>

        <div class="container mt-5 mb-5 col-md-4" style="overflow-y: auto;">

            <div class="row height d-flex align-items-start">

                <div class="comments-container" style="margin-left: auto;">

                    <div class="card">

                        <div class="p-3">

                            <h6>Commentaires</h6>

                        </div>

                        <div class="mt-3 d-flex flex-row align-items-center p-3 form-color">
                            <form action="{{ route('comments.store') }}" method="post">
                                @csrf
                                <textarea name="content" class="form-control" id="" cols="30"
                                    placeholder="Entrez votre commentaire..." rows="5"></textarea>
                                <input type="hidden" name="univ_id" value="{{ $univ_id }}" id="">
                                <button type="submit"
                                    style="background-color: #35b69f;color:white;border-radius:5px;border-width:0;margin-top:10px;">Poster</button>
                            </form>
                            {{-- <img src="https://i.imgur.com/zQZSWrt.jpg" width="50" class="rounded-circle mr-2"> --}}

                        </div>


                        <div class="mt-2">
                            @foreach ($comments as $key => $comment)
                                <div class="d-flex flex-row p-3">

                                    {{-- <img src="https://i.imgur.com/zQZSWrt.jpg" width="40" height="40" --}}
                                    {{-- class="rounded-circle mr-3"> --}}

                                    <div class="w-100">

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex flex-row align-items-center">
                                                <span class="mr-2">
                                                    @php
                                                        $user = Auth::user();
                                                    @endphp
                                                    @if ($user->name == $authors[$key]->name)
                                                        <span style="background-color: rgb(218, 255, 218)">Vous</span>
                                                    @else
                                                        {{ $authors[$key]->name }}
                                                    @endif


                                                </span>
                                                {{-- <small class="c-badge">Top Comment</small> --}}
                                            </div>
                                            <small>{{ $comment->upload_date }}</small>
                                        </div>

                                        <p class="text-justify comment-text mb-0">{{ $comment->content }}</p>
                                        @if ($user->name == $authors[$key]->name)
                                            <div class="d-flex flex-row user-feed">
                                                <form action="{{ route('comments.delete', $comment->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit"
                                                        class="flex bg-red-200 border-0 items-center justify-between text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Delete" style="background-color: red"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">
                                                        Supprimer
                                                    </button>
                                                </form>


                                            </div>
                                        @endif
                                    </div>


                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="{{ asset('js/note.js') }}"></script>
    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/counter.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/univ.js') }}"></script>
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

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            // Soumettre le formulaire via AJAX lorsqu'il est soumis
            $('form[name="notationForm"]').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                var univId = $(this).data('univ-id');
                // Récupérer l'ID de l'université
                console.log(univId);
                $.ajax({
                    url: '/notations/store/' + univId, // Utiliser l'ID de l'université dans l'URL
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        // Afficher un message de succès
                        showSuccessModal('Notation enregistrée avec succès !');
                        // Fermer le modal
                        $('#ratingModal-' + univId).modal('hide');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        alert(
                            'Une erreur est survenue lors de l\'enregistrement de la notation.'
                        );
                    }
                });

            });
        });
    </script>

</body>

</html>
