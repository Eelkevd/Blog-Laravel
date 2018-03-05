@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')

	    <!-- The view of the welcome page, not much to do here -->
	 	<h1> Create event </h1>
	<div id="blogOverview">
	    <form method="POST" action="/event/create">

			{{ csrf_field() }}

		    <div id="eventPage">

				<a href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} </span>
                    </a>
                    <input type="text" name="title" placeholder="event name" id="eventTitle"> <br />

				<br />

				Event starts at:<br>
				<input type="date" name="start_date" min="2018-01-02"><br><br>
				Event ends at:<br>
				<input type="date" name="end_date" min="2018-01-02"><br><br>

				<input type="submit" id="btnSubBlog" align="center" value="submit">

			</div>
			<a href="/event">Return</a></li>

		@include('layouts.error')

		</form>
</div>
    @endsection
