@extends ('layouts.layout')

    @section ('content')

        <div>
        	<!-- The view to show individual blogs, their categories and their comment section -->
            <h1>{{ $article -> title }}</h1>
              <p id="demo"></p>

            {{ $article -> bodytext }}

        	<hr>

            <!--Show all comments-->
        	<div class="comments">

        		@foreach ($article->comments as $comment)

        			<li class="list-group-item">

        				{{ $comment->body}}

        			</li>

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

        			@include ('layouts.error')

        		</div>

        	</div>

        </div>
        <script>

          $(document).ready(function() {
            var myVar = setInterval(myTimer, 1000);
            var currentLocation = window.location;

            function myTimer() {
              var d = new Date();
              document.getElementById("demo").innerHTML = d.toLocaleTimeString()
              ;
              if (currentLocation != window.location) {
                var visitedTime = myVar;
                     clearInterval(myVar);
                     alert('Test');

              }
          }
            // document.getElementById("demo").innerHTML = visitedTime.toLocaleTimeString();
          });



        </script>
    @endsection
