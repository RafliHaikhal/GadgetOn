<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<<<<<<< HEAD
    <title>GadgetOn - @yield('title')</title>
    <link rel="stylesheet" href="/css/register.css">
=======
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/header.css">
>>>>>>> 3576b785f3c1886c4321fe07e7a0c68fbe8b436e
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/login.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/home.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/mycart.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/viewproduct.css">
    <title>@yield('title')</title>
</head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand fw-semibold" href="/home">
        <span class="navbar-text text-black">Gadget</span><span class="navbar-text text-danger">On</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mycart">My Cart</a>
          </li>
          <li class="nav-item">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
              </form>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Register</a>
          </li>
        </ul>
      </div>
    </div>
</nav>