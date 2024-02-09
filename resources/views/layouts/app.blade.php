<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">
@auth
        <div class="container-fluid">
          <!-- Links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('dashboard')}}">Products</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link text-light" href="{{route('profile.create')}}">Add Profile</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('profile.show')}}">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('users.index')}}">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{route('password.change')}}">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="{{ route('logout') }}" onclick="return confirm('Do you really want to logout?')">Logout</a> 
            </li>
          </ul>
        </div>
        @endauth
      </nav>
      {{-- <div class="container-fluid">
          <div class="text-align-right">
            <a class="text-dark" href="#">Change Password</a>
          </div>
      </div> --}}
      @if(session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
      @endif
      @if(session('error'))
      <div class="alert alert-danger" role="alert">
          {{ session('error') }}
      </div>
       @endif
    @yield('main') 
{{-- main --}}


    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif --}}
</body>
</html>