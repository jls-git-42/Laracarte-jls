<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home_path') }}">LaraCarte</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li class="active"><a href="{{ route('home_path') }}">Home</a></li>
          <li><a href="{{ route('about_path') }}">About</a></li>
          <li><a href="#contact">Artisans</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planet <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="https://laravel.com">Laravel.com</a></li>
              <li><a href="https://laravel.io">Laravel.io</a></li>
              <li><a href="https://Laracasts.com">Laracasts</a></li>
              <li><a href="https://Larajobs.com">Lara Jobs</a></li>
              <li><a href="https://Laravel-news.com">Laravel News</a></li>
              <li><a href="https://Larachat.co">Larachat</a></li>
              <!--<li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li> -->
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">Login</a></li>
          <li><a href="#contact">Register</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>