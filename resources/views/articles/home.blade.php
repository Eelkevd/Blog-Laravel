
@extends ('layouts.layout')
        
    @section ('content')

    <h1> WELCOME HOME </h1>

        <ul>

            

            @foreach ($articles as $article)

            	<div>{{$article->title}}</div>
                <div>{{$article->bodytext}}</div>
                <br/>

            @endforeach

        </ul>

    @endsection
