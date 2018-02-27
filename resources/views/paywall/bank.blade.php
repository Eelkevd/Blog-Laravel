@extends ('layouts.layout')

    @section ('content')

    <form method="POST" action="/articles">
    {{ csrf_field() }}

      <div id="blogPage">
        

      </div>
    </form>


    @endsection
