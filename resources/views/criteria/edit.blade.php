@extends('layouts.base');
@section('content')
    <form method="POST" action="{{ route('cities.update', $city->id) }}">
        @method('PUT')
        @csrf
        <label for="city_name">Nom</label>
        <input type="text" name="city_name" id="city_name" value="{{ $city->city_name }}" aria-describedby="city_name">
        <button type="submit">Modifier</button>
    </form>
@endsection
