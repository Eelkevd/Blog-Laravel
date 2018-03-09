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

		<div class="border">
			<!-- Button to get all bills that are not yet downloaded -->
			<p>
				<a href="\owner/owner/sepatool">
					<button type="button" class="btn" style="width: 200px;">Create a new Excell file for Septatool</button>
				</a>
			</p>
            @include ('layouts.error')
            <a href="\download/sepatool.xlsx">
				<button type="button" class="btn" style="width: 200px;">Download LATEST Excell file for Sepatool</button>
            </a>
		</div>
	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
