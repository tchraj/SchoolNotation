@extends('layouts.base')
@section('content')
    <ul>
        @foreach ($comments as $comment)
            <li>{{ $comment->content }}</li>
        @endforeach
    </ul>
@endsection
