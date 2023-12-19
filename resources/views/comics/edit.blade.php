@extends('layouts.app')
@section('content')

<section class="py-5">

    <div class="container">

        <h1>Edit Comic - {{ $comic->title }}</h1>

        <form action="{{ route('comics.update', $comic)}}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title">Title:</label>
                <input type="text" name="title" value="{{ old('title', $comic->title) }}">
            </div>

            <div class="mb-3">
                <label for="description">Description:</label>
                <textarea name="description">{{ old('description', $comic->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb">Thumbnail URL:</label>
                <input type="text" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>

            <div class="mb-3">
                <label for="price">Price:</label>
                <input type="text" name="price" value="{{ old('price', $comic->price) }}">
            </div>

            <div class="mb-3">
                <label for="series">Series:</label>
                <input type="text" name="series" value="{{ old('series', $comic->series) }}">
            </div>

            <div class="mb-3">
                <label for="sale_date">Sale Date:</label>
                <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div class="mb-3">

            <div class="mb-3">
                <label for="type">Type:</label>
                <input type="text" name="type" value="{{ old('type', $comic->type) }}">
            </div>

            <div class="mb-3">
                <button type="submit">Save Changes</button>
            </div>

        </form>
        
    </div>

</section>
@endsection