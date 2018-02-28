@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')

    <!-- The view of the owner page, where the owner can make a backup --> 
 	<h1> Welcome Admin </h1>

 			<!-- Button to make backup -->
			<a href="\owner/owner/backup">
				<button type="button">  Make backup </button>
			</a>

	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
