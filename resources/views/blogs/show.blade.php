
@extends ('layouts.layout')

    @section ('content')

    <div>
    	 <!-- The view to show individual blogs, their categories and their comment section -->
<<<<<<< HEAD

        <h1> {{ $blog -> title }}</h1>
=======
        <h1>{{ $blog -> title }}</h1>
>>>>>>> working index page for Blogfunction

        {{ $blog -> subject }}

    	<hr>
<<<<<<< HEAD
      <div id="blogOverview">
        <ul>
    	     @foreach ($blog->articles as $article)
            <li class="list-group-item">
                {{ $article->title }}
            </li>
        @endforeach
      </ul>
      </div>
=======


>>>>>>> working index page for Blogfunction
    	<hr>


        </div>

    @endsection
