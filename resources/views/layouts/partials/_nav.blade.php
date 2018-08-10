<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Home</a></li>
            <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
            <li class="{{ set_active_route('services_path') }}"><a href="{{ route('services_path') }}">Services</a></li>
            <li class="{{ set_active_route('salers_path') }}"><a href="{{ route('salers_path') }}">Salers</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
              aria-haspopup="true" aria-expanded="false">Articles <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li class="{{ set_active_route('contact_path') }}"><a href="{{ route('contact_path') }}">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#salers">Login</a></li>
              <li><a href="#salers">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
