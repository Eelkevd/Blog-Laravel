@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')
    <!-- The view of the welcome page, not much to do here --> 
 	<h1> Create category </h1>

    <form method="POST" action="/articles/createcategory">
    	
	{{ csrf_field() }}

	    <div id="blogPage">

			<input type="text" name="name" placeholder="category name" id="blogTitle"> <br />

			<br />

			<input type="submit" id="btnSubBlog" align="center" value="submit">

		</div>

	@include('layouts.error')

	</form>

    @endsection