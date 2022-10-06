@extends('layouts.base')
@section('title', "Game | {$game->name} {$game->year}")
@section('container')

<div id="mainCardSection" style="width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="card" style="width: 18rem;">

        @if($game->img_url != null)
        <img class="card-img-top" src="{{$game->img_url}}" alt="Card image cap">
        @endif
        <div class="card-body" style="display: flex; flex-direction: column; align-items: center;">
            <h5 class="card-title">{{$game->name}}</h5>
            <p class="card-text">Reference: {{$game->reference}} - Year: {{$game->year}}</p>
            @if($game->info_url != null)
            <a target="_blank" href="{{$game->info_url}}" class="btn btn-primary">More Info</a>
            @endif

        </div>
    </div>
</div>

@endsection