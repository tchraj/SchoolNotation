@extends('layouts.base')
@section('content')
    {{-- <ul>
        
            <li>{{ $comment->content }}</li>
        
    </ul> --}}



    <div class="w-full bg-white rounded-lg border p-2 my-4 mx-6">

        <h3 class="font-bold">Les commentaires</h3>

        <div class="flex flex-col">
            @foreach ($comments as $comment)
                <div class="border rounded-md p-3 ml-3 my-3 flex items-start">
                    <!-- Ajout de la classe flex et items-start pour aligner les éléments à gauche -->
                    <div>
                        <!-- Div contenant l'auteur et le contenu du commentaire -->
                        <div class="flex gap-3 items-center">
                            <img src="https://avatars.githubusercontent.com/u/22263436?v=4"
                                class="object-cover w-8 h-8 rounded-full border-2 border-emerald-400 shadow-emerald-400 mr-2">
                            <h6 class="font-semibold text-sm">
                                @if (auth()->user() == $comment->user)
                                    <span
                                        style="background-color: rgb(215, 241, 215); padding: 7px; border-radius: 25px;">Vous</span>
                                @else
                                    {{ $comment->user->name }}
                                @endif
                            </h6>
                        </div>
                        <p class="text-gray-600 mt-2 text-sm">
                            {{ $comment->content }}
                        </p>
                        {{-- <a href="#" data-toggle="modal" data-target="#exampleModal-{{ $comment->id }}"
                            class="text-blue-500">Ouvrir le modal</a> --}}

                        <a href="#" class="text-blue-500" onclick="openModal({{ $comment->id }})">Voir les
                            détails</a>

                    </div>
                    <div class="ml-3">
                        <!-- Ajout d'une marge à droite pour séparer visuellement la date de l'auteur -->
                        <span class="text-xs text-gray-400">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <!-- Structure du modal -->
                <div class="modal fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50 hidden"
                    id="exampleModal-{{ $comment->id }}">
                    <div class="modal-dialog bg-white w-1/2 rounded-lg shadow-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-gray-200 border-b p-4">
                                <h5 class="modal-title text-gray-800 font-bold">Détails du commentaire</h5>

                            </div>
                            <div class="modal-body p-4">
                                <form action="{{ route('comments.update', $comment->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                                    <label class="text-sm" for="author">Auteur :</label>
                                    <input class="text-sm" type="text" id="author" disabled
                                        value="{{ $comment->user->name }}" /><br />
                                    <label class="text-sm" for="univ">Université :</label>
                                    <input class="text-sm" type="text" id="univ"
                                        value="{{ $comment->university->univ_name }}" /><br />
                                    <label class="text-sm" for="content">Contenu:</label>
                                    <p class="text-sm">{{ $comment->content }}</p>
                                    <p class="text-sm">Date de création : {{ $comment->created_at }}</p>
                                    <label class="text-sm" for="status">Status:</label><span
                                        class="text-sm">{{ $comment->status }}</span><br>
                                    @if (auth()->user()->name != $comment->user->name)
                                        <label class="text-sm" for="status">Modifier</label>
                                        <input type="hidden" name="status"
                                            value="{{ $comment->status == 'Actif' ? 'Actif' : 'Inactif' }}"
                                            id="statusHidden">
                                        <input type="checkbox" id="desactiver" name="status_checkbox"
                                            {{ $comment->status == 'Actif' ? 'checked' : '' }}
                                            onchange="updateStatus(this)">
                                        <button type="submit"
                                            class="bg-green-500 hover:bg-green-700 text-sm text-dark font-bold py-2 px-2">Terminer</button>
                                    @endif



                                </form>

                                <!-- Ajoutez ici d'autres détails du commentaire -->
                            </div>
                            <div class="modal-footer bg-gray-200 border-t p-4">
                                <button type="button"
                                    class="btn btn-secondary bg-blue-500 text-dark py-2 px-4 rounded mr-2"
                                    onclick="closeModal({{ $comment->id }})">Fermer</button>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach





        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modalTrigger = document.querySelector('[data-toggle="modal"]');
                var modal = document.getElementById('exampleModal');

                modalTrigger.addEventListener('click', function() {
                    modal.classList.toggle('hidden');
                });

                modal.addEventListener('click', function(event) {
                    if (event.target === modal) {
                        modal.classList.add('hidden');
                    }
                });

                var closeModalButtons = document.querySelectorAll('[data-dismiss="modal"]');
                closeModalButtons.forEach(function(button) {
                    button.addEventListener('click', function() {
                        modal.classList.add('hidden');
                    });
                });
            });
        </script>
        <script>
            // Fonction pour ouvrir le modal correspondant au commentaire cliqué
            function openModal(commentId) {
                // Sélectionne le modal avec l'ID spécifié
                var modal = document.getElementById('exampleModal-' + commentId);
                // Affiche le modal
                modal.classList.remove('hidden');
            }

            // Fonction pour fermer le modal correspondant au commentaire cliqué
            function closeModal(commentId) {
                // Sélectionne le modal avec l'ID spécifié
                var modal = document.getElementById('exampleModal-' + commentId);
                // Masque le modal
                modal.classList.add('hidden');
            }
        </script>
        <script>
            function updateStatus(checkbox) {
                var statusHidden = document.getElementById('statusHidden');
                if (checkbox.checked) {
                    statusHidden.value = 'Actif';
                } else {
                    statusHidden.value = 'Inactif';
                }
            }
        </script>
    @endsection
