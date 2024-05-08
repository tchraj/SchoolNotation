@extends('layouts.base')
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @foreach ($notations->groupBy('univ_id') as $univId => $univNotations)
        @php
            $universityName = \App\Models\University::find($univId)->univ_name;
        @endphp
        <div class="university">
            <h3>Université: {{ $universityName }}</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Critère</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($univNotations as $notation)
                        <tr>
                            <td>{{ $notation->criteria->libelle }}</td>
                            <td>{{ $notation->score }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
@endsection
