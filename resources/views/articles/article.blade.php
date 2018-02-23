<div>

	<!-- The view to show the article titles (links) and publishing dates at the blogs view page -->
	<h2 class="article-title">

		<a href="/articles/{{ $article->id }}">

			{{ $article -> title }}
		
		</a>

	</h2>

	<p class="article-text">

		{{ $article -> created_at -> toFormattedDateString() }}
		
	</p> 

</div>