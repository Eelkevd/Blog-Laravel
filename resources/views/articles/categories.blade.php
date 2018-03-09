@extends ('layouts.layout')
	@section ('header')
	@endsection

	@section ('content')
	    <!-- The view of the category page, view all categories -->
	 	<h1> Choose category </h1>
				@foreach ($categories as $category)
	            	<!-- Links to article.blade.php view -->
	            	@include('articles.category')
	            @endforeach
	@endsection

        