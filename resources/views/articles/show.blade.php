
@extends ('layouts.layout')

    @section ('content')

    <div>

        <h1>{{ $article -> title }}</h1>

        {{ $article -> bodytext }}

        <br/>

        <a href= \articles/home>Cancel</a>

    </div>

    @endsection
