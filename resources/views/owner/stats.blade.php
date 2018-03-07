@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')

    <!-- The view of the owner page, where the owner can make a backup -->
 	<h1> Statistics </h1>

      <table style="border: 1px solid black;">
        <tr style="border-bottom: 1px solid black;">
          <th>article</th>
          <th>path</th>
          <th>type</th>
          <th>time</th>
        </tr>

      @foreach ($lastLoggedActivity as $activity)

      <tr style="margin: 5px;">
        <td style="padding: 15px;">{{ $activity->subject_id }}</td>
        <td style="padding: 15px;">{{ $activity->properties }}</td>
        <td style="padding: 15px;">{{ $activity ->description }}</td>
        <td style="padding: 15px;">{{ $activity ->created_at }}</td>
      </tr>

      @endforeach

    </table>




	@endsection

	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
	@endif
