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
  <title>Ngiclix - Administrator</title>
</head>
<body>
  <div class="container">


    <nav class="navbar is-transparent">
    <div class="navbar-brand">
    <a class="navbar-item" href="{{ URL::to('/') }}">
        <i class="fas fa-video fa-2x"></i>
        &nbsp; &nbsp;&nbsp; <h4 class="subtitle is-5">Ngiclix - Administrator Panel</h4>
      </a>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
            @auth
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="https://bulma.io/documentation/overview/start/">
                 <i class="fas fa-user">&nbsp;&nbsp;</i> {{ Auth::user()->admin_username }} 
                </a>
                <div class="navbar-dropdown is-boxed">
                  <a class="navbar-item" href="{{URL::to('/admin/signout')}}">
                    Signout
                  </a>
                </div>
              </div>
            @endauth
            @guest
            @endguest
            </p>
          </div>
        </div>
      </div>
        
    </div>
    </nav>
    <div class="columns" style="margin-top: 20px;">
    <div class="column is-one-quarter">
      <div class="menu">
        <p class="menu-label">
          General
        </p>
        <ul class="menu-list">
          <li><a href="{{ URL::to('/admin') }}">Dashboard</a></li>
          <li><a href="{{ URL::to('/admin/messages') }}">Messages</a></li>
        </ul>
      </div>
    </div>
    <div class="column">
      @section('content')   
      @show
    </div>
    </div>
  </div>
</body>
</html>