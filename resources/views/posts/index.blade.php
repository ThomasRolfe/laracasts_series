@extends('layout')

@section('content')

    <div class="col-sm-8">
        @foreach($posts as $post)
            @include('posts/post')
        @endforeach
    </div>

@endsection
