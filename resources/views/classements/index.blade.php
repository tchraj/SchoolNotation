@extends('layouts.base')
@section('content')
    <h1>Classement des universités</h1>
    <div style="display: flex; align-items:center;justify-content:space-between;list-style:none;">
        <ul>
            @foreach ($criteres as $critere)
                <li style="padding:7px;background-color:rgb(236, 214, 9); "><a style="color:black;" style="text-decoration: none;"
                        href="{{ route('classements.critere', $critere->id) }}" class="critere-link"
                        data-critere-id="{{ $critere->id }}">{{ $critere->libelle }}</a></li>
        </ul>
        @endforeach
    </div>

    <div id="classement">
        @foreach ($classement as $univId => $totalPoints)
            @php
                $universite = App\Models\University::find($univId);
            @endphp
            <li>{{ $universite->univ_name }} - {{ $totalPoints }}</li>
        @endforeach
    </div>
    {{-- A ne pas toucher ca marrrrrrrrcheeeeeeeeee --}}
    {{-- @foreach ($classement as $univId => $totalPoints)
        @php
            $universite = App\Models\University::find($univId);
        @endphp
        <li>{{ $universite->univ_name }} - {{ $totalPoints }}</li>
    @endforeach --}}
@endsection
