
@extends ('Layouts.layout')

	@section ('header')

	<h1> WELCOME HOME </h1>

	@endsection
        
    @section ('content')

    
    <div id="blogOverview">
        <ul>

            

            @foreach ($articles as $article)

            	@include('articles.article')

            @endforeach

        </ul>
    </div>

    @endsection
