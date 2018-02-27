@extends ('layouts.layout')

    @section ('content')

    <!-- Count the number of articles with this blogs
          if = 5 show alert PAY -->


    <!-- The view to create new blogs/articles -->
    <h1>Create your article</h1>

    <form method="POST" action="/articles">
	{{ csrf_field() }}

  <!-- hidden hardcoded blog_id
        Needs to be the blog id from the user that is logged in-->
    <input type="hidden" name="blog_id" id="blog_id" value="{{ $userid }}">
    <input type="hidden" name="user_id" id="user_id" value="{{ $userid }}">

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
