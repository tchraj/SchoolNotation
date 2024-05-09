@extends('layouts.base')
@section('content')
    <h1 style="font-size: 40px"> <strong>Classement des universités</strong></h1>
    <div style="display: flex; align-items:center;justify-content:space-between;list-style:none;">
        <ul>
            @foreach ($criteres as $critere)
                <li style="padding:7px;background-color:rgb(236, 214, 9);">
                    <a style="color:{{ $loop->index == $critere->id ? 'red' : 'black' }}; text-decoration:none;"
                        href="{{ route('classements.critere', $critere->id) }}" class="critere-link"
                        data-critere-id="{{ $critere->id }}">
                        {{ $critere->libelle }}
                    </a>
                </li>
        </ul>
        @endforeach

    </div>

    <div id="classement">
        @foreach ($classement as $univId => $totalPoints)
            @php
                $universite = App\Models\University::find($univId);
            @endphp
            {{-- <div
                class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $universite->univ_name }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $universite->city->city_name }}</p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-dark bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{ $totalPoints }}
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div> --}}


            <a href="#"
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                    src="{{ asset('img/logos/'.$universite->logo) }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$universite->univ_name}} <span class="ml-6 bg-blue-100">
                        {{ $totalPoints }}points</span></h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$universite->description}}</p>
                </div>
            </a>
        @endforeach
    </div>


















    <div id="classement">
        <canvas id="barChart" width="800" height="400"></canvas>
    </div>

    {{-- Inclure le script pour initialiser le graphique --}}
    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    @foreach ($classement as $univId => $totalPoints)
                        "{{ $universites->find($univId)->univ_name }}",
                    @endforeach
                ],
                datasets: [{
                    label: 'Points',
                    data: [
                        @foreach ($classement as $totalPoints)
                            {{ $totalPoints }},
                        @endforeach
                    ],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <!-- Inclure Chart.js dans votre vue -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    {{-- A ne pas toucher ca marrrrrrrrcheeeeeeeeee --}}
    {{-- @foreach ($classement as $univId => $totalPoints)
        @php
            $universite = App\Models\University::find($univId);
        @endphp
        <li>{{ $universite->univ_name }} - {{ $totalPoints }}</li>
    @endforeach --}}
@endsection
