@section('css', 'css/header.css')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GadgetOn - @yield('title')</title>
    <link rel="stylesheet" href="@yield('css')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand fw-semibold" href="/">
        <span class="navbar-text text-black">Gadget</span><span class="navbar-text text-danger">On</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

<<<<<<< HEAD
          @if(Auth::check() && Auth::user()->role == 'Member')
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index_login') }}">My Cart</a>
          </li>
          @endif

          @if(!Auth::check())
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index_login') }}">My Cart</a>
          </li>
          @endif

=======
>>>>>>> e25d30b285f3bda6a606c38565753f7a934f9c09
          @if(Auth::check() && Auth::user()->role == 'Admin')
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Manage Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/addproduct">Add Product</a></li>
              <li><a class="dropdown-item" href="#">Manage Product</a></li>
            </ul>
          </li>
          @elseif(Auth::check())
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mycart">My Cart</a>
          </li>
          @elseif(!Auth::check())
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/auth/login">My Cart</a>
          </li>
          @endif

          <li class="nav-item">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
          </li>
          @if(!Auth::check())
          <div class="row position-absolute top-50 end-0 translate-middle-y">
            div.col
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/auth/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/auth/register">Register</a>
            </li>
          </div>
          
          @elseif(Auth::check())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{-- {{ $user->name }} --}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/profile">View Profile</a></li>
              @if(Auth::user()->role == 'Admin')
              <li><a class="dropdown-item" href="/trasactionhistory">Purchase History</a></li>
              @endif
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger">Logout</button>
            </form>
            </ul>
          </li>
                  
          @endif
        </ul>
      </div>
    </div>
</nav>
