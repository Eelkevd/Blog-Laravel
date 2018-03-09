@extends ('layouts.layout')
    @section ('content')
        <!-- The view of the blogs page, view all blog titles (links) and publication dates -->
        <h1> Great Blogs by the best IT bloggers. </h1>
        <p><em> Choose your favorite blogger to read his or hers articles! </em>
        <br /> Click on the title of the blog that spikes your interest. </p>
        <div id="blogOverview">
            <ul>
                @foreach ($blogs as $blog)

                	<!-- Links to blog.blade.php view -->
                	@include('blogs.blog')
                @endforeach
            </ul>
        </div>
    @endsection
