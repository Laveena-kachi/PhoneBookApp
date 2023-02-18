<!DOCTYPE html>
<html>
   <head>
      <title>User DashboardPage</title>
      <!-- Bootstrap CSS CDN -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
   </head>
   <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="nav navbar-nav ml-auto">
                        @guest
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @else
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/contacts') }}">User Dashboard Page</a>
                        </li>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST">
            {{ csrf_field() }}
    <button type="submit">Logout</button>
</form>
                        @endguest
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
      @yield('content')
    
   </body>
</html>