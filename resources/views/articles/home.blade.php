
@extends ('layouts.layout')

	@section ('header')

	<h1> WELCOME HOME </h1>

	@endsection
        
    @section ('content')

    

        <ul>

            

            @foreach ($articles as $article)

            	@include('articles.article')

            @endforeach

        </ul>

    @endsection
