<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/bulma.min.css')}}">
  <link rel="stylesheet" href="{{asset('/font-awesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('/css/bulma-carousel.min.css')}}">
  <script src="{{'/js/jquery-3.4.1.min.js'}}"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ngiclix</title>
</head>
<body>
  <div class="container">


    <nav class="navbar is-transparent">
    <div class="navbar-brand">
    <a class="navbar-item" href="{{ URL::to('/') }}">
        <i class="fas fa-video fa-2x"></i>
        &nbsp; &nbsp;&nbsp; <h4 class="subtitle is-5">Ngiclix</h4>
      </a>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="{{ URL::to('/') }}">
          Home
        </a>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
            Movies
          </a>
          <div class="navbar-dropdown is-boxed">
            <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
              Action
            </a>
            <a class="navbar-item" href="https://bulma.io/documentation/overview/start/">
              Horror
            </a>
          </div>
        </div>
        <a class="navbar-item" href="{{ URL::to('/contact') }}">
          Contact Us
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
            @auth
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
                 <i class="fas fa-user">&nbsp;&nbsp;</i> {{ Auth::user()->users_name }} 
                </a>
                <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" href="{{URL::to('/profile')}}">
                    My Account
                  </a>
                  <a class="navbar-item" href="{{URL::to('/signout')}}">
                    Signout
                  </a>
                </div>
              </div>
            @endauth
            @guest
              <a class="navbar-item" href="{{URL::to('/signin')}}">
                Signin
              </a>
            @endguest
            </p>
          </div>
        </div>
      </div>
        
    </div>
    </nav>
    @section('content')
    @show
  </div>
</body>
</html>