@extends ('layouts.layout')

    @section ('content')

               <h1>Create a Post</h1>

               <form method="POST" action="/articles">

				{{ csrf_field() }}

                <div id="blogPage">
					 <input type="text" name="title" placeholder="title" id="blogTitle"> <br />
					 <!--<div id="categoryBoxes">
						<input type="checkbox" id="sportsCheckB" name="subscribe" value="sports">
	    				<label for="subscribeNews">Sports</label>
	    				<input type="checkbox" id="natureCheckB" name="subscribe" value="nature">
	    				<label for="subscribeNews">Nature</label>
	    				<input type="checkbox" id="politicsCheckB" name="subscribe" value="politics">
	    				<label for="subscribeNews">Politics</label>
					 </div>-->
					 <textarea name="bodytext" id="blogText" placeholder="Type your article"></textarea>
					 <br />
					 <input type="submit" id="btnSubBlog" align="center" value="submit">
				</div>

				@include('layouts.error')

			</form>

    @endsection
