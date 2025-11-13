@extends('layouts.main')

@section('title')
Netflix
@endsection

@section('content')
<div class="row row-cols-1 row-cols-md-5 g-4 p-4">
  @foreach($movies as $movie)
    <div class="col">
        <div class="card h-100">
            <img src="{{ $movie->poster_url }}" class="card-img-top" alt="Movie Poster">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->description }}</p>
                <div class='d-inline-flex p-2 gap-1 align-items-center justify-items-center'>
                    <img src="{{ asset('images/icons/star.png') }}" alt="" style="width:12px; height: 12px;">
                    <p class="card-text text-warning fw-semibold  ">{{ $movie->rating }}</p>
                </div>
            </div>
        </div>
    </div>
  @endforeach
</div>
@endsection