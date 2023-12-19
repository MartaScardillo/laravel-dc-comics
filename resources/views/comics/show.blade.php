@extends('layouts.app')

@section('content')
    <ul>
        <li><a href="{{ route('comics.create') }}">Crea un nuovo comic</a></li>
        <li><a href="{{ route('comics.index') }}">Visualizza tutti i comics</a></li>
        <li><a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a></li>
    </ul>
    <h1>{{ $comic->title }}</h1>
    <p><strong>Description:</strong> {{ $comic->description }}</p>
    <p><strong>Price:</strong> {{ $comic->price }}</p>
    <p><strong>Series:</strong> {{ $comic->series }}</p>
    <p><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
    <p><strong>Type:</strong> {{ $comic->type }}</p>
@endsection