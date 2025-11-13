@extends('layouts.main')

@section('title')
Movies
@endsection

@section('content')
<div class="row row-cols-1 row-cols-md-5 g-4 m-4">
    @foreach ($movies as @movie)
        <div class="card" style="width: 18rem;">
            <img src="{{ $movie->poster_url }}" class="card-img-top" alt="Movie Poster">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->description }}</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    @endforeach
</div>
@endsection