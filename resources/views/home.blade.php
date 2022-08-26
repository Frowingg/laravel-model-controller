@extends('layout.app')

@section('main_content')
    <h1>FILM</h1>

    @foreach ($movies as $movie)
        <div class="card">
            <h1>{{$movie->title}}</h1>
            <h2>{{$movie->description}}</h2>
            <h4>{{$movie->year}}</h4>
        </div>
    @endforeach

@endsection