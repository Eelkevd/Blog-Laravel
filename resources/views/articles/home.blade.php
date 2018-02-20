
@extends ('layouts.layout')
        
    @section ('content')

        <ul>

            @foreach ($articles as $article)

                <li>{{$article->bodytext}}</li>

            @endforeach 

        </ul>

    @endsection
