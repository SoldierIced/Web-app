<div class="wrapper ">
    <div class="sidebar" data-color="blue" data-active-color="danger">

      <div class="logo">
        <a href="{{route('home')}}" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('/img/logo.png')}}">
          </div>
        </a>
        <a href="{{route('home')}}" class="simple-text logo-normal">
          Web-App
          <!-- <div class="logo-image-big">
            <img src="{{asset('/img/logo-big.png')}}">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
            <li @if (Route::getCurrentRoute()->uri == 'home' || Route::getCurrentRoute()->uri=="/"  )) class="active " @endif>
                <a href="{{route('home')}}">
                    <i class="nc-icon nc-single-02"></i>
                  <p>Home</p>
                </a>
              </li>
          <li @if (Route::getCurrentRoute()->uri == 'users') class="active " @endif>
            <a href="{{route('users')}}">
                <i class="nc-icon nc-single-02"></i>
              <p>Usuarios</p>
            </a>
          </li>
          <li @if (Route::getCurrentRoute()->uri == 'nacionalidades') class="active " @endif>
            <a href="{{route('nacionalidades')}}">
                <i class="nc-icon nc-single-02"></i>
              <p>Nacionalidades</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">@yield('titulo')</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header">


