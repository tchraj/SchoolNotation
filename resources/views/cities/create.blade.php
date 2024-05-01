@extends('layouts.base');
@section('content')
    @php
        $cities = App\Models\City::paginate(5);
        // $items = App\Models\City::paginate(5);
    @endphp
    {{-- <form method="POST" action="{{ route('cities.store') }}">
        @csrf
        <label for="city_name">Nom</label>
        <input type="text" name="city_name" id="city_name">
        <button type="submit">Creer</button>
    </form> --}}

    <form class="w-full md:w-1/2 max-w-sm " method="POST" action="{{ route('cities.store') }}">
        @csrf
        <h4>Ajouter une ville</h4>
        <br>
        <div class="flex items-center border-b border-teal-500 py-2 ml-4 ">
            <input
                class="appearance-none bg-transparent border-none w-full text-gray-500 mr-3 py-1 px-2 leading-tight focus:outline-none text-sm"
                name="city_name" type="text" placeholder="Nom de la ville" aria-label="Nom de la ville" id="city_name">
            <button
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                type="submit">
                Créer
            </button>
            <button
                class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded"
                type="reset">
                Annuler
            </button>
        </div>
    </form>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
    </style>
    <div class="bg-white shadow-md rounded-md p-4 mx-auto max-w-sm mt-16">
        <h2 class="text-xl font-semibold mb-4">Les villes de nos universités</h2>
        {{-- <div class="pagination">
            {{ $cities->links() }}
        </div>         --}}
        <ul>
            @foreach ($cities as $city)
                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                    <div class="flex items-center">
                        <span class="text-lg font-semibold mr-4">{{ $city->id }}</span>
                        <img src="https://via.placeholder.com/48" alt="User Avatar" class="w-8 h-8 rounded-full mr-4">
                        <span class="text-gray-800 font-semibold text-sm">{{ $city->city_name }}</span>
                    </div>
                    <span class="text-green-500 font-semibold text-sm">3 universités</span>
                </li>
            @endforeach
        </ul>
        <div>
            {{ $cities->links() }}
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
    {{-- <h3>Les villes de nos universités</h3>
    <ul>
        @foreach ($cities as $city)
            <li>{{ $city->id }} {{ $city->city_name }}</li>
        @endforeach
    </ul> --}}
@endsection
