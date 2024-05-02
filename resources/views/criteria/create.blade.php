@extends('layouts.base');
@section('content')
    <form class="w-full md:w-1/2 max-w-sm " method="POST" action="{{ route('criteria.store') }}">
        @csrf
        <h4>Ajouter un critere</h4>
        <br>
        <div class="flex items-center border-b border-teal-500 py-2 ml-4 ">
            <input
                class="appearance-none bg-transparent border-none w-full text-gray-500 mr-3 py-1 px-2 leading-tight focus:outline-none text-sm"
                name="libelle" type="text" placeholder="Nom du critere" aria-label="Nom du critere" id="libelle">
            
            <button
                class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                type="reset">
                Annuler
            </button>
        </div>
        <div class="flex items-center border-b border-teal-500 py-2 ml-4 ">
            <input
                class="appearance-none bg-transparent border-none w-full text-gray-500 mr-3 py-1 px-2 leading-tight focus:outline-none text-sm"
                name="description" type="text" placeholder="description" aria-label="Description" id="description">
            
            <button
                class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                type="reset">
                Annuler
            </button>
        </div>
        <button
                class=" bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-base border-4 text-white py-2 px-4 ml-4 rounded"
                type="submit">
                Créer
            </button>
    </form>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
    </style>
    <div class="bg-white shadow-md rounded-md p-4 mx-auto max-w-sm mt-2">
        <h2 class="text-xl font-semibold mb-4">Les criteres de notation</h2>
        {{-- <div class="pagination">
            {{ $criteria->links() }}
        </div>         --}}
        <ul>
            @foreach ($criteria as $critere)
                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                    <div class="flex items-center">
                        <span class="text-lg font-semibold mr-4">{{ $critere->id }}</span>
                        <img src="https://via.placeholder.com/48" alt="User Avatar" class="w-8 h-8 rounded-full mr-4">
                        <span class="text-gray-800 font-semibold text-sm">{{ $critere->libelle }}</span>
                    </div>
                    <span class="text-green-500 font-semibold text-sm">{{ $critere->description }}</span>
                </li>
            @endforeach
        </ul>
        <div>
            {{ $criteria->links() }}
        </div>



    </div>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }
    </script>
@endsection
