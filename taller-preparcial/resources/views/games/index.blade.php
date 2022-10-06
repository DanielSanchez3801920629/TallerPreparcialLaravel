@extends('layouts.base')
@section('title', 'Games List')
@section('container')
<main class="container">
    <h1 class="alert bg-secondary center">Games List</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Reference</th>
                <th scope="col">Name</th>
                <th scope="col">Year</th>
                <th scope="col">Details</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <th scope="row">{{$game->id}}</th>
                <td>{{$game->reference}}</td>
                <td>{{$game->name}}</td>
                <td>{{$game->year}}</td>
                <td><a href="{{route('game.show', $game)}}" class="btn btn-info">Show</a></td>
                <td> <a href="{{route('game.edit', $game)}}" class="btn btn-secondary">Edit</a></td>
                <td>
                    <form action="{{route('game.destroy', $game)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Delete {{$game->name}}')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col d-grid">
            <a href="/game/create" class="btn bg-secondary">Insert a new game!</a>
        </div>
    </div>
</main>

@endsection