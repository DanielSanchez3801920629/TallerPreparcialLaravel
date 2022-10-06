@extends('layouts.base')
@section('title', 'Insert a new game')
@section('container')
<main class="container">
    <h1 class="alert alert-success text-center"><i class="fa-solid fa-users"></i> &nbsp;Create a new game</h1>
    <form method="POST" action="{{route('game.store')}}">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="reference" class="form-label">Reference</label>
                    <input type="text" class="form-control" name="reference" id="reference" aria-describedby="reference" value="{{old('reference')}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{old('name')}}">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="text" class="form-control" name="year" id="year" aria-describedby="year" value="{{old('year')}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="img_url" class="form-label">Image Url</label>
                    <input type="text" class="form-control" name="img_url" id="img_url" aria-describedby="img_url" value="{{old('img_url')}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="info_url" class="form-label">Info Url</label>
                    <input type="text" class="form-control" name="info_url" id="info_url" aria-describedby="info_url" value="{{old('info_url')}}">
                </div>
            </div>
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>
</main>
@endsection