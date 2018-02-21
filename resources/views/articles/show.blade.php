
@extends ('layouts.layout')

    @section ('content')

    <div>

        <h1>{{ $article -> title }}</h1>

        {{ $article -> bodytext }}

    </div>

    @endsection
