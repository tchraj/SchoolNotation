@extends('layouts.base')
@section('content')
    <ul>
        @foreach ($notations as $notation)
            <li>{{ $notation->id }} - {{ $notation->score }}</li>
        @endforeach
    </ul>
@endsection
