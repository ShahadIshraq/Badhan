<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">Badhan</a>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">{{-- "nav-item active" --}}
        <a class="nav-link" href="/">Home{{--  <span class="sr-only">(current)</span> --}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> --}}
    </ul>
    @if (auth()->check())
      <a class="nav-link ml-auto" href="#" >{{auth()->user()->name}}</a>
    @else
      <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="/login">Sign in/Sign up</a>
    @endif
    {{-- <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>