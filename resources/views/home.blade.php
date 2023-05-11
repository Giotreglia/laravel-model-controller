@extends('layouts.app')

@section('title', 'Home')

@section('content')

<h1 class="text-light">Movies List</h1>

<div class="row">

    <ul class="d-flex gap-3">
        @foreach ($movies as $movie)
            <li>
                <div class="card border-0 ms-card" style="width: 25rem;">
                    <div class="img-wrapper">
                        <img src="{{$movie->img}}" class="card-img-top h-100" alt="...">
                    </div>
                    <div class="card-body d-flex flex-column pb-0">
                      <h3 class="card-title">{{$movie->title}}</h3>
                      <h5>{{$movie->original_title}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item ms-title">{{$movie->nationality}} / Voto: {{$movie->vote}}</li>
                    </ul>
                  </div>
            </li>
        @endforeach
    </ul>

</div>

@endsection