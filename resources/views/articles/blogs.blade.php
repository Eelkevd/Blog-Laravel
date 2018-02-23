
@extends ('layouts.layout')
        
    @section ('content')

    <!-- The view of the blogs page, view all blog titles (links) and publication dates --> 
    <h1> Read all blogs </h1>

    <div id="blogOverview">

        <ul>

            @foreach ($articles as $article)

            	<!-- Links to article.blade.php view -->
            	@include('articles.article')

            @endforeach

        </ul>
        
    </div>

    @endsection
