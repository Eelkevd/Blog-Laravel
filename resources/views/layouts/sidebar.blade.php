<div class="sidebar">
  <div class="sidebar-module">
      <h4>Archives</h4>
        <ol class="list-unstyled">
             @foreach($archives as $year => $months)
                <h6 class="mb-0">
                  <br>
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
