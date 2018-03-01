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
				<a href="\owner/owner/sepatool">
					<button type="button" class="btn" style="width: 200px;">Create a new Excell file for Septatool</button>
				</a>
			</p>
			<p>
				<a href="\download/sepatool.xlsx">
					<button type="button" class="btn" style="width: 200px;">Download latest Excell file for Sepatool</button>
				</a>
			</p>

			@include ('layouts.error')

	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
