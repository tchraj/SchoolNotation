@extends('layouts.base');
@section('content')
    @php
        // $univ = App\Models\University::find(1);
    @endphp
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
                        <th class="px-4 py-3">Adresse</th>
                        <th class="px-4 py-3">Ville</th>
                        <th class="px-4 py-3">Actions</th>
                        <th class="px-4 py-3">Evaluer</th>

                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach ($univs as $item)
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
                            <td class="px-4 py-3 text-xs">
                                <span
                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    {{ $item->address }}
                                </span>
                            </td>
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
                                    <a href="{{ route('univs.delete', [$item->id]) }}">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <button @click="openModal"
                                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                        Noter
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
                            <!-- Modal -->
                            <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
                                x-transition:enter-start="opacity-0 transform translate-y-1/2"
                                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
                                @keydown.escape="closeModal"
                                class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                                role="dialog" id="modal">
                                <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
                                <header class="flex justify-end">
                                    <button
                                        class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                                        aria-label="close" @click="closeModal">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img"
                                            aria-hidden="true">
                                            <path
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </header>
                                <!-- Modal body -->
                                <div class="mt-4 mb-6">
                                    <!-- Modal title -->
                                    <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                                        Noter l'université {{ $item->univ_name }}
                                    </p>
                                    <!-- Modal description -->
                                    <form action="#" method="POST">
                                        @csrf
                                        @foreach ($criteria as $critere)
                                            <div class="mb-4">
                                                <label for="{{ $critere->libelle }}"
                                                    class="block text-sm font-medium text-gray-700">{{ $critere->libelle }}</label>
                                                <!-- Champ de notation (par exemple une échelle de notation) -->
                                                <input type="range" name="notes[{{ $critere->id }}]"
                                                    id="{{ $critere->id }}" min="0" max="10" step="1">
                                                <!-- Vous pouvez également ajouter une zone de texte pour des commentaires supplémentaires -->
                                                <textarea name="commentaires[{{ $critere->id }}]" rows="3"
                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-400 focus:ring focus:ring-purple-400 focus:ring-opacity-50"
                                                    placeholder="Commentaire"></textarea>
                                            </div>
                                        @endforeach
                                        {{-- <!-- Champs du formulaire -->
                                        <div class="mb-4">
                                            <label for="note" class="block text-sm font-medium text-gray-700">Note :</label>
                                            <input type="number" name="note" id="note" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-400 focus:ring focus:ring-purple-400 focus:ring-opacity-50">
                                        </div>
                                        <!-- Autres champs de formulaire ici -->
                                        <!-- Bouton de soumission --> --}}
                                        <div class="flex justify-end">
                                            <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">
                                                Soumettre
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <footer
                                    class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                                    <button
                                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                                        Cancel
                                    </button>
                                    <button @click="closeModal"
                                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                        Fermer
                                    </button>
                                </footer>
                            </div>
                        </div>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{-- <div
            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                Showing 21-30 of 100
            </span>
            <span class="col-span-2"></span>
            {{-- <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Previous">
                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                    <path
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                1
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                2
                            </button>
                        </li>
                        <li>
                            <button
                                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                                3
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                4
                            </button>
                        </li>
                        <li>
                            <span class="px-3 py-1">...</span>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                8
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                                9
                            </button>
                        </li>
                        <li>
                            <button class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next">
                                <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                    <path
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </nav>
            </span> 
        </div> --}}
    </div>
@endsection
