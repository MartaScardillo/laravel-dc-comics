@extends('layouts.app')

@section('title', 'Comics List')

@section('content')
    <h1>Comics</h1>
    <ul>
        <li><a href="{{ route('comics.create') }}">Crea un nuovo comic</a></li>
    </ul>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection