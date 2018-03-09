@extends ('layouts.layout')
    @section ('content')
	    <!-- Count the number of articles of the blog
	    if = 5 show alert PAY -->
	    @if( $num_articles < 5 OR $payed == '1' )
	    	<!-- The view to create new blogs/articles -->
	      	<h1>Create your article</h1>
	      	<div id="blogOverview">
	        <form method="POST" action="/articles">
	          	{{ csrf_field() }}

	            <!-- log id from the user that is logged in -->
	            <input type="hidden" name="blog_id" id="blog_id" value="{{ $blog_id }}">
	            <input type="hidden" name="user_id" id="user_id" value="{{ $userid }}">
	            <input type="text" name="title" placeholder="title" id="blogTitle"> <br />

	            <!-- Checkboxes for categories -->
	            <div id="categoryBoxes">
	            @foreach($categories as $category)
	                <input type="checkbox" id="FireCheckB" name="subscribe[]" value="{{ $category->id }}">
	                <label for="subscribeNews">{{ $category->name }}</label>
	            @endforeach()
	            </div>
	            <textarea name="bodytext" id="blogText" placeholder="Type your article"></textarea>
	            <br />
	            <input type="submit" id="btnSubBlog" align="center" value="submit">
            </form>
	       	</div>

	        @include('layouts.error')

	    @elseif ( $num_articles == 5 AND $payed == '0')
	     	@include ('paywall.bank')	
	    @endif
    @endsection
