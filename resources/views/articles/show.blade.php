@extends ('layouts.layout')
    @section ('content')
        <div>
        	<!-- The view to show individual blogs, their categories and their comment section -->
            <h1>{{ $article -> title }}</h1>
            <p>{!! nl2br(e($article -> bodytext))!!}</p>
        	<hr>
            <div id="articleRating">
                @foreach ($article->ratings as $index => $rating)
                    @if($index==0)
                    <h4>
                    Rating: {{ $article -> average_rating }}
                    </h4>
                    @endif
                @endforeach
            </div>
            <hr>
            
            <!--Show all comments-->
            <h3>Comment section</h3>
        	<div class="comments">
        		@foreach ($article->comments as $comment)
        			<li class="list-group-item" >
        				<p class="commentSection">Comment: {{ $comment->body}} </p>
        			</li>
        		@endforeach
        	</div>
            <hr>
        	<hr>
            
    		<!--Add a comment-->
        	<div class="card">
        		<div class="card-block">
        			<form method="POST" action="/articles/{{ $article->id }}/comments">
        				{{ csrf_field() }}
        				<div class="form-group">
        					<textarea name="body" placeholder="Write your comment!" class="form=control" required></textarea>
        				</div>
        				<div class="form-group">
        				    <button type="submit" id="btnSubComment" align="center" class="btn btn-primary"> Submit </button>
                        </div>
        			</form>

                    <form method="POST" action="/articles/{{ $article->id }}/ratings">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="number" name="rating" placeholder="give your rating 0-9" class="form=control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="btnSubComment" align="center" class="btn btn-primary"> Rate the article </button> 
                        </div>
                    </form>

                    @include ('layouts.error')
                </div>
        	</div>
        </div>
    @endsection
