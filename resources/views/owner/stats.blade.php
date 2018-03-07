@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')
  <div id="blogOverview">
    <!-- The view of the owner page, where the owner can make a backup -->
 	<h1> Statistics </h1>

		<div class="border">
      <table style="border: 1px solid black;">

      @foreach ($lastLoggedActivity as $activity)

      <tr style="margin: 5px;">
        <td style="padding: 15px;">{{ $activity->subject_id }}</td>
        <td style="padding: 15px;">{{ $activity->customProperty }}</td>
        <td style="padding: 15px;">{{ $activity ->description }}</td>
        <td style="padding: 15px;">{{ $activity ->created_at }}</td>
      </tr>

      @endforeach

    </table>
		</div>
</div>



	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
