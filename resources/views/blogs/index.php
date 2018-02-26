
@extends ('layouts.layout')

    @section ('content')

    <!-- The view of the blogs page, view all blog titles (links) and publication dates -->
    <h1> Great Blogs by the best IT bloggers! </h1>

    <div id="blogOverview">

        <ul>

            @foreach ($blogs as $blog)

            	<!-- Links to blog.blade.php view -->
            	@include('blogs.blog')

            @endforeach

        </ul>

    </div>

    @endsection
