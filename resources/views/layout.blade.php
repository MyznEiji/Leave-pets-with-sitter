<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Space</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="/assets/css/user.css">
    <link rel="stylesheet" href="/assets/css/auth.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">




</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                  <a class="navbar-brand" href=/>
                    <i class="glyphicon glyphicon-camera">
                    </i>
                    <span class="text-title">Rental Space
                    </span>
                  </a>
                  <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                      @if(!Auth::check())
                      <!-- ログインしていない時 -->
                        <li class="active" role="presentation"><a href="/login">Login </a></li>
                        <li role="presentation"><a href="/register">Sign Up </a></li>
                      @else
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li role="presentation"><a href="/users/{{ Auth::user()->id }}">Profile</a></li>
                            <li role="presentation"><a href="/users/{{ Auth::user()->id }}/edit">Profile edit</a></li>
                            <li role="presentation"><a href="/logout">Log Out </a></li>
                          </ul>
                        </li>
                      @endif
                      <li>@include('flash::message')</li>
                    </ul>
                  </div>
              </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <h5>Photography Blog © 2016</h5>
    </footer>


    <!-- bootstrap -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>


    <!-- notification -->
    <!-- If using flash()->important() or flash()->overlay(), you'll need to pull in the JS for Twitter Bootstrap. -->
    <script src="//code.jquery.com/jquery.js"></script>

    <script>
        $('#flash-overlay-modal').modal();
    </script>
    <script>
      $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

</body>

</html>
