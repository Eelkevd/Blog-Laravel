<div class="sidebar">
  <div class="sidebar-module">

    <ul class="">

        <!-- Authentication Links -->
        @guest
            <li><a class="" href="{{ route('login') }}">Login</a></li>
            <li><a class="k" href="{{ route('register') }}">Register</a></li>
        @else
            <li class=""><em>You are logged in as </em>

                <a href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} </span>
                </a>

                <div>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                </div>
            </li>
        @endguest

    </ul>
  </div>
  <div class="sidebar-module">
      <h4>Archives</h4>
        <ol class="list-unstyled">

             @foreach($archives as $stats)
                <h6 class="mb-0">
                  <li>
                <a href="/articles/?month={{ $stats['month'] }}&year={{ $stats['year']}}">
                  {{ $stats['month'] . ' ' .  $stats['year'] }}
                </a>

            </li>
                </h6>
              @endforeach

        </ol>
    </div>

    <div class="sidebar-module">
      <h4>Check our:</h4>

      <ol class="list-unstyled">

        <li><a href="https://trello.com/b/FlXnsQWy/blog-laravel-week-7" target="_blank">
          Trello</a></li>
        <li><a href="https://sheltered-reef-90572.herokuapp.com/articles/home" target="_blank">
          Heroku</a></li>
        <li><a href="https://github.com/Eelkevd/Blog-Laravel/" target="_blank">
          Github</a></li>

      </ol>
    </div>
</div>
