@extends ('layouts.layout')

    @section ('content')

    <!-- Count the number of articles with this blogs
    if = 5 show alert PAY -->
    @if(  $num_articles == 5 )
    <div id="blogPage">
      <p>Please put money on your account to upload more than five articles</p>

    </div>
    @else

      <!-- The view to create new blogs/articles -->
      <h1>Create your article</h1>

      <form method="POST" action="/articles">
      {{ csrf_field() }}

        <div id="blogPage">

            <!-- log id from the user that is logged in-->
            <input type="hidden" name="blog_id" id="blog_id" value="{{ $blog_id }}">
            <input type="hidden" name="user_id" id="user_id" value="{{ $userid }}">

            <input type="text" name="title" placeholder="title" id="blogTitle"> <br />

            <!-- Checkboxes for categories WORK IN PROGRESS -->
            <div id="categoryBoxes">

              @foreach($categories as $category)

                <input type="checkbox" id="FireCheckB" name="subscribe[]" value="{{ $category->id }}">
                <label for="subscribeNews">{{ $category->name }}</label>

              @endforeach()

            </div>

            <textarea name="bodytext" id="blogText" placeholder="Type your article"></textarea>

            <br />

            <input type="submit" id="btnSubBlog" align="center" value="submit">

        </div>

        @include('layouts.error')

      </form>

      @endif

    @endsection
