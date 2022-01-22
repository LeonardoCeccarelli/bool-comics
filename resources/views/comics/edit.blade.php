@extends('layouts.default')

@section('page_title', 'Edit')

@section('header_content')
    <h1>Header Edit</h1>
@endsection

@section('main_content')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Titolo</label>
            <input type="text" name='title' value='{{ old($comic->title) ?? $comic->title }}' id="name">
        </div>

        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" rows="5" value="{{ old($comic->description) ?? $comic->description }}"></textarea>
        </div>

        <div>
            <label for="thumb">Immagine</label>
            <input type="text" name="thumb" id="thumb" value="{{ old($comic->thumb) ?? $comic->thumb }}">
        </div>
        <div>
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" value='{{ old($comic->price) ?? $comic->price }}'>
        </div>
        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" value='{{ old($comic->series) ?? $comic->series }}'>
        </div>
        <div>
            <label for="sale_date">Sale Date</label>
            <input type="text" name="sale_date" id="sale_date" value='{{ old($comic->sale_date) ?? $comic->sale_date }}'>
        </div>
        <div>
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type" value='{{ old($comic->type) ?? $comic->type }}'>
        </div>
        {{-- thumb, price series sale_date type --}}

        <input type="submit" value="Modifica">


    </form>
@endsection

@section(' footer_content') <h1>contenuto del footer</h1>
@endsection
