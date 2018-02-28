@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')
    <!-- The view of the welcome page, not much to do here --> 
 	<h1> Welcome Admin </h1>

			<a href="\owner/owner/backup">

				<button type="button">  Make backup </button>

			</a>

	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif