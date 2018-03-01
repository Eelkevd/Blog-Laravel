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

			<!-- Button to get all bills that are not yet downloaded -->
			<a href="\owner/owner/bills">
				<button type="button">  Get all new bills </button>
			</a>

	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
