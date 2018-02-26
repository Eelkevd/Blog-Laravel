
@extends ('layouts.layout')

    @section ('content')

    <div  id="blogOverview">
    	 <!-- The view to show the articles within a blog-->
        <h1>{{ $blog -> title }}</h1>

        <div>
    	<hr>
        </div>

          {{ $blog -> subject }}

      </div>
    </div>
<hr>
    @endsection
