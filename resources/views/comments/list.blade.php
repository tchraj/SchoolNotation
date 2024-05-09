@extends('layouts.base')
@section('content')
    {{-- <ul>
        
            <li>{{ $comment->content }}</li>
        
    </ul> --}}

<!-- Lien déclencheur du modal -->
<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-blue-500">Ouvrir le modal</a>

<!-- Structure du modal -->
<div class="modal fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-900 bg-opacity-50" id="exampleModal">
  <div class="modal-dialog bg-white w-1/2 rounded-lg shadow-lg">
    <div class="modal-content">
      <div class="modal-header bg-gray-200 border-b p-4">
        <h5 class="modal-title text-gray-800 font-bold">Titre du modal</h5>
        <button type="button" class="close text-gray-600" data-dismiss="modal" aria-label="Fermer">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-4">
        Contenu du modal
      </div>
      <div class="modal-footer bg-gray-200 border-t p-4">
        <button type="button" class="btn btn-secondary bg-gray-400 hover:bg-gray-500 text-white py-2 px-4 rounded mr-2" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Enregistrer</button>
      </div>
    </div>
  </div>
</div>


    <div class="w-full bg-white rounded-lg border p-2 my-4 mx-6">

        <h3 class="font-bold">Les commentaires</h3>

        <div class="flex flex-col">
            @foreach ($comments as $comment)
                <a href="#" data-comment-id="{{ $comment->id }}">
                    <div class="border rounded-md p-3 ml-3 my-3 flex items-start">
                        <!-- Ajout de la classe flex et items-start pour aligner les éléments à gauche -->

                        <div> <!-- Div contenant l'auteur et le contenu du commentaire -->
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
                        </div>
                        <div class="ml-3">
                            <!-- Ajout d'une marge à droite pour séparer visuellement la date de l'auteur -->
                            <span class="text-xs text-gray-400">{{ $comment->created_at->diffForHumans() }}</span>
                            <!-- Affichage de la date de manière conviviale -->
                        </div>
                        <div class="ml-3">
                            <!-- Ajout d'une marge à droite pour séparer visuellement la date de l'auteur -->
                            <span class="text-xs text-gray-400">Modérer</span>
                            <!-- Affichage de la date de manière conviviale -->
                        </div>
                    </div>
                </a>
            @endforeach
        </div>



    </div>
@endsection
