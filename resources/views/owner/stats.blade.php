@extends ('layouts.layout')

	@section ('header')

	@endsection

	@section ('content')

    <!-- The view of the owner page, where the owner can make a backup -->
	 	<h1>Sitemaps </h1>
		<p>Do you want to know how often your article has been read? Check out these statistics!</p>
		<p>To boost our SEO, we have made our XML files public. Check them out!</p>
		<br />

		<h3>Click here for the XML files:</h3>
		<table style="border: 1px solid black; margin: 20px auto;">
			<tr style="margin: 5px;"><td style="padding: 15px;">
			<a href="/sitemap">start XML file</a><br>
		</tr></td>
		<tr style="margin: 5px;"><td style="padding: 15px;">
			<a href="/sitemap/articles">XML for all articles</a><br>
		</tr></td>
		<tr style="margin: 5px;"><td style="padding: 15px;">
			<a href="/sitemap/blogs">XML for all blogs</a><br>
		</tr></td>
		<tr style="margin: 5px;"><td style="padding: 15px;">
			<a href="/sitemap/categories">XML for all categories</a>
		</p>
	</tr></td>
</table>
<br />

		<h3>Site statistics</h3>
      <table style="border: 1px solid black; margin: 20px auto;">
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
