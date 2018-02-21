
@extends ('layouts.layout')

	@section ('header')

	<h1> WELCOME HOME </h1>

	@endsection
        
    @section ('content')

    

        <ul>

            

            @foreach ($articles as $article)

            	<div>{{$article->title}}</div>
                <div>{{$article->bodytext}}</div>
                <br/>

            @endforeach

        </ul>

    @endsection
