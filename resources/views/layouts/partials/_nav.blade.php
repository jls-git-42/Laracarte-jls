<!-- Fixed navbar 
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home_path') }}">{{ config('app.name') }}</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li class="{{ Set_Active_Route('home_path') }}"><a href="{{ route('home_path') }}">Home</a></li>
          <li class="{{ Set_Active_Route('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
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
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li> -->
            <!--</ul>
          </li>
          <li class="{{ Set_Active_Route('contact_create') }}"><a href="{{ route('contact_create') }}">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">Login</a></li>
          <li><a href="#contact">Register</a></li>
        </ul>
      </div>
    </div>
  </nav> -->

  <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home_path') }}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ Set_Active_Route('home_path') }}">
            <a class="nav-link" href="{{ route('home_path') }} ">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{ Set_Active_Route('about_path') }}">
            <a class="nav-link" href="{{route('about_path') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="Planet-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
            <div class="dropdown-menu" aria-labelledby="Planet-dropdown">
              <a class="dropdown-item" href="https://laravel.com">Laravel.com</a>
              <a class="dropdown-item" href="https://laravel.io">Laravel.io</a>
              <a class="dropdown-item" href="https://Laracasts.com">Laracasts</a>
              <a class="dropdown-item" href="https://Larajobs.com">Lara Jobs</a>
              <a class="dropdown-item" href="https://Laravel-news.com">Laravel News</a>
              <a class="dropdown-item" href="https://Larachat.co">Larachat</a>
            </div>
          </li>
          <li class="nav-item {{ Set_Active_Route('contact_create') }}">
            <a class="nav-link " href="{{ route('contact_create') }}">Contacts</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
