@extends('layout')

@section('content')

    <div class="col-md-8">
        <h1>sign In</h1>
    </div>

    <form method="POST" action="/login">
        @csrf
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Sign In</button>
        </div>

        @include('layouts.errors')

    </form>

@endsection
