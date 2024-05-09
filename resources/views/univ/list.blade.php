@extends('layouts.base');
@section('content')
    @php
        // $univ = App\Models\University::find(1);
    @endphp
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;

        .rating button {
            font-size: 24px;
            /* Taille des étoiles */
        }

        .modal {
            display: none;
            position: absolute;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    @if (session('success'))
        <div id="success-message" class="text-blue-900 text-sm bg-blue-700 p-4 rounded shadow-md">
            {{ session('success') }}
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 5000); // Masquer le message après 5 secondes
                }
            });
        </script>
    @endif

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
    <button class="text-white bg-blue-500 rounded-2 p-2 ml-80 flex-end">
        <a href="{{ route('univs.create') }}">Nouvelle université</a>


    </button>
    <h1 class="mb-4 font-bold ">
        Nos universités
    </h1>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Nom</th>
                        <th class="px-4 py-3">Type</th>
                        {{-- <th class="px-4 py-3">Adresse</th> --}}
                        <th class="px-4 py-3">Ville</th>
                        <th class="px-4 py-3">Actions</th>
                        {{-- <th class="px-4 py-3">Comm</th> --}}
                        {{-- <th class="px-4 py-3">Evaluer</th> --}}


                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($univers as $item)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="{{ asset('img/logos/' . $item->logo) }}" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $item->univ_name }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $item->type }}
                            </td>
                            {{-- <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{ $item->address }}
                                </span>
                            </td> --}}
                            <td class="px-4 py-3 text-sm">
                                {{ $item->city->city_name }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('univs.edit', [$item->id]) }}">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                    </a>
                                    <form action="{{ route('univs.delete', [$item->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')"">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                {{-- <button type="button" data-toggle="modal" data-target="#exampleModalCenter"
                                    style="background-color: rgb(251, 255, 13)"
                                    class="flex items-center justify-between px-2 py-1 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Comment">
                                    <i class="fas fa-comment">...</i>
                                    <dd>{{ var_dump($item->id) }}</dd>

                                </button> --}}
                                <button type="button" data-toggle="modal"
                                    data-target="#exampleModalCenter-{{ $item->id }}"
                                    style="background-color: rgb(251, 255, 13)"
                                    class="flex items-center justify-between px-2 py-1 text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Comment">
                                    <i class="fas fa-comment">...</i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter-{{ $item->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 style="font-size: 25px" class="modal-title" id="exampleModalLongTitle">
                                                    Commentaire
                                                </h1>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <form id="commentForm-{{ $item->id }}"
                                                    action="{{ route('comments.store') }}" method="post"
                                                    class="max-w-md mx-auto my-10">
                                                    @csrf
                                                    <input type="hidden" name="univ_id" value="{{ $item->id }}">
                                                    <label for="content"
                                                        class="block text-sm mt-4 font-medium text-gray-700">Votre
                                                        commentaire :</label>
                                                    <textarea name="content" rows="5" required
                                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Fermer</button>
                                                <button type="submit" form="commentForm-{{ $item->id }}"
                                                    class="btn btn-primary">Envoyer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                            {{-- <td>
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
                                                <form action="{{ route('notations.store') }}" method="POST">
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
                                                <button type="submit" class="btn btn-primary">Valider</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </td> --}}
                            {{-- <td class="px-4 py-3">
                                <form action="{{ route('notations.store') }}" method="POST">
                                    @csrf
                                    @foreach ($criteria as $critere)
                                        <h5>{{ $critere->libelle }} :</h5>
                                        <input type="range" min="0" max="100" step="1"
                                            name="scores[{{ $critere->id }}]"
                                            class="bg-gray-200 appearance-none rounded h-2">
                                    @endforeach
                                    <input type="hidden" name="univ_id" value="{{ $item->id }}">
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                                    <button type="submit" class="text-green-500 hover:text-green-700">
                                        <i class="fas fa-check-circle mr-2"></i> Valider
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
                {{-- <div>
                    {{ $univers->links() }}
                </div> --}}
            </table>



            {{-- <div id="successModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-center justify-center min-h-screen">
                    <div class="bg-white p-6 rounded-lg shadow-xl">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold">Succès !</h2>
                            <button @click="showSuccessModal = false"
                                class="text-gray-500 hover:text-gray-700 focus:outline-none">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <p id="successMessage" class="text-gray-700"></p>
                    </div>
                </div>
            </div> --}}






            <script>
                $(document).ready(function() {
                    // Soumettre le formulaire via AJAX lorsqu'il est soumis
                    $('form[id^="commentForm-"]').submit(function(e) {
                        e.preventDefault();
                        var formData = $(this).serialize();
                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: formData,
                            success: function(data) {
                                // Afficher un message de succès
                                alert('Commentaire ajouté avec succès !');
                                // Effacer le contenu du champ de commentaire
                                $(this).find('textarea[name="content"]').val('');
                                // Fermer le modal
                                $(this).closest('.modal').modal('hide');
                            },
                            console.log(data);
                            error: function(xhr, status, error) {
                                console.error(error);
                                alert('Une erreur est survenue lors de l\'ajout du commentaire.');
                            }
                        });
                    });
                });
            </script>
        @endsection
