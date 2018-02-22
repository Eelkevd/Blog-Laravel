
@extends ('layouts.layout')

    @section ('content')

    <div>

        <h1>{{ $article -> title }}</h1>
        {{ $article -> bodytext }}


        <hr> 
        	<!--Show comments-->
            <div class="categories">
    		@foreach ($article->categories as $category)

    			<li class="list-group-item">
    				{{ $category->category}}
    			</li>
    		@endforeach
    		</div>

    	<hr>
    		<!--Show comments-->
    		<div class="comments">
    		@foreach ($article->comments as $comment)

    			<li class="list-group-item">
    				{{ $comment->body}}
    			</li>
    		@endforeach
    		</div>

    		<!--Add a comment-->
    		<hr>

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
    				@include ('layouts.error')
    			</div>
    		</div>	
    </div>

    @endsection
