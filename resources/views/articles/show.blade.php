@extends ('layouts.layout')

    @section ('content')

        <div>
        	<!-- The view to show individual blogs, their categories and their comment section -->
            <h1>{{ $article -> title }}</h1>
              <p id="demo"></p>

            {{ $article -> bodytext }}

        	<hr>

            <!--Show all comments-->

            <h3>Comment section</h3>

        	<div class="comments">

        		@foreach ($article->comments as $comment)

        			<li class="list-group-item">

        				{{ $comment->body}}

        			</li>

        		@endforeach

        	</div>

            <hr>

            <h3>Average rating</h3>
            <div id="articleRating">

                @foreach ($article->ratings as $index => $rating)
                    @if($index==0)
                    <li class="list-group-item">

                    Average rating is: {{ $article -> average_rating }}

                    </li>
                    @endif
                @endforeach
                


            </div>

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

                            <textarea name="rating" placeholder="give your rating 0-9" class="form=control" required></textarea>

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
