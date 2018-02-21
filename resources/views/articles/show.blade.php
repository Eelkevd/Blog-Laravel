
@extends ('layouts.layout')

    @section ('content')

    <div>

        <h1>{{ $article -> title }}</h1>

        {{ $article -> bodytext }}


          <hr> 

          <div class="categories">
    		@foreach ($article->categories as $category)

    			<li class="list-group-item">
    				{{ $category->category}}
    			</li>
    		@endforeach
    		</div>

        <br/>

    </div>

    @endsection
