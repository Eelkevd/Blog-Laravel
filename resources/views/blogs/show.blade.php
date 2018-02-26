
@extends ('layouts.layout')

    @section ('content')

    <div>
    	 <!-- The view to show individual blogs, their categories and their comment section -->

        <h1> {{ $blog -> title }}</h1>

        {{ $blog -> subject }}

    	<hr>
      <div id="blogOverview">
        <ul>
    	     @foreach ($blog->articles as $article)
            <li class="list-group-item">
                {{ $article->title }}
            </li>
        @endforeach
      </ul>
      </div>
    	<hr>


        </div>

    @endsection
