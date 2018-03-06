@extends ('layouts.layout')

    @section ('content')

        <!-- The view of the blogs page, view all blog titles (links) and publication dates -->
        <h1> Read all Articles </h1>


        <div id="blogOverview">

            <ul>

                @foreach ($articles as $article)

                	<!-- Links to article.blade.php view -->
                	@include('articles.article')

                @endforeach

            </ul>

        </div>
        <!-- <script>

          $(document).ready(function() {
            var myVar = setInterval(myTimer, 1000);

            function myTimer() {
              var d = new Date();
              document.getElementById("demo").innerHTML = d.toLocaleTimeString();
          }
            // document.getElementById("demo").innerHTML = visitedTime.toLocaleTimeString();
          });

          $(window).unload(function() {
              var visitedTime = myVar;
                clearInterval(myVar);

             });

        </script> -->

    @endsection
