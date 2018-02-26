
@extends ('layouts.layout')

    @section ('content')

=======
    <div  id="blogOverview">
    	 <!-- The view to show the articles within a blog-->
        <h1>{{ $blog -> title }}</h1>
>>>>>>> working index page for Blogfunction

        <div>



    	<hr>


        </div>
=======
          {{ $blog -> subject }}

      </div>

>>>>>>> Working landingspage for Blogs. New Blog Model, Controller and Migration.

    </div>
<hr>
    @endsection
