<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">Badhan</a>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="{{ Request::path()=='events' ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="/events">Events</a>
      </li>
            
      <li class="{{ Request::path()=='contact' ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="/contact">Contact Us</a>
      </li>

      <li class="{{ Request::path()=='search' ? 'nav-item active' : 'nav-item' }}">
        <a class="nav-link" href="/search">Search donor</a>
      </li>

{{--       <li class="nav-item disable">
        <a class="nav-link" href="#">{{Request::path()}}</a>
      </li>
 --}}      
    </ul>
    @if (auth()->check())
      <form class="form-inline mt-2 mt-md-0">
        <a class="nav-link mr-sm-2" href="/{{auth()->user()->id}}" >{{auth()->user()->name}}</a>
        @if(App\Admin::where('user_id', '=', auth()->user()->id)->exists())
          <a class="nav-link mr-sm-2" href="/approvals">Approvals</a>
        @endif
        <a class="nav-link mr-sm-2" href="/logout" ><small>Log out</small></a>
      </form>
      
    @else
      <a class="btn btn-outline-success my-2 my-sm-0" role="button" href="/login">Sign in/Sign up</a>
    @endif
    {{-- <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>