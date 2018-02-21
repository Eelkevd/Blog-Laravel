<div>
	<h2 class="article-title">

		<a href="/articles/{{ $article->id }}">

			{{ $article -> title }}

		</a>

	</h2>

	<p class="article-text">

		{{ $article -> created_at -> toFormattedDateString() }}

	</p> 


</div>