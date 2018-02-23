@extends ('layouts.layout')

    @section ('content')
    
    <!-- The view to create new blogs/articles -->
    <h1>Create a Post</h1>

    <form method="POST" action="/articles">
	{{ csrf_field() }}

    <div id="blogPage">

		<input type="text" name="title" placeholder="title" id="blogTitle"> <br />

		<!-- Checkboxes for categories WORK IN PROGRESS -->
		<div id="categoryBoxes">

			@foreach($categories as $category)

				<input type="checkbox" id="FireCheckB" name="subscribe[]" value="{{ $category->id }}">
				<label for="subscribeNews">{{ $category->name }}</label>

			@endforeach()

		</div>

		<textarea name="bodytext" id="blogText" placeholder="Type your article"></textarea>

		<br />

		<input type="submit" id="btnSubBlog" align="center" value="submit">
		
	</div>

	@include('layouts.error')

	</form>

    @endsection
