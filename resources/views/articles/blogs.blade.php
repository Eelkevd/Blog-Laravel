
@extends ('layouts.layout')
        
    @section ('content')

    <h1> Read all blogs </h1>

    <div id="blogOverview">
        <ul>

            
            @foreach ($articles as $article)

            	@include('articles.article')

            @endforeach

        </ul>
    </div>

    @endsection
