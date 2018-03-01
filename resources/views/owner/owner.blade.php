@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')

    <!-- The view of the owner page, where the owner can make a backup -->
 	<h1> Welcome Admin </h1>

 			<!-- Button to make backup -->
			<p>
			<a href="\owner/owner/backup">
				<button type="button" class="btn">  Make backup </button>
			</a>
		</p>

			<!-- Button to get all bills that are not yet downloaded -->
			<p>
				<a href="\owner/owner/bills">
					<button type="button" class="btn">  Get all new bills </button>
				</a>
			</p>

	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
