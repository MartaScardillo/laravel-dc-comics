@extends('layouts.app')

@section('content')
    <h1>New Comic</h1>
    <ul>
        <li><a href="{{ route('comics.index') }}">Visualizza tutti i comics</a></li>
    </ul>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <label for="title">Description:</label>
        <input type="text" name="description" required>
        <label for="title">Price:</label>
        <input type="text" name="price" required>
        <label for="title">Thumb:</label>
        <input type="text" name="thumb" required>
        <label for="title">Series:</label>
        <input type="text" name="series" required>
        <label for="title">Sale Date:</label>
        <input type="text" name="sale_date" required>
        <label for="title">Type:</label>
        <input type="text" name="type" required>
        <button type="submit">Salva</button>

    </form>
@endsection