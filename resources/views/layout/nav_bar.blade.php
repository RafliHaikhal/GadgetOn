<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="">
            <a class="navbar-brand fw-semibold" href="/">
                <span class="navbar-text text-black">Gadget</span><span class="navbar-text text-danger">On</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">

                @if(Auth::check() && Auth::user()->role == 'Admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Manage Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('add_page') }}">Add Product</a></li>
                            <li><a class="dropdown-item" href="#">Manage Product</a></li>
                        </ul>
                    </li>
                @elseif(Auth::check() && Auth::user()->role == 'Member')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('cart') }}">My Cart</a>
                    </li>
                @elseif(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index_login') }}">My Cart</a>
                    </li>
                @endif

                <li class="nav-item">
                    <form class="d-flex" action="{{ route('product_search') }}" role="search" method="get">
                        <input class="form-control ms-3" type="search" name="search" placeholder="Search" aria-label="Search" style="width: 72vw;" value="@if(isset($query)) {{$query}} @endif" autocomplete="off">
                        <button class="btn btn-outline-primary ms-3" type="submit">Search</button>
                    </form>
                </li>
                @if(!Auth::check())
                    <div class="d-flex ms-5">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/auth/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/auth/register">Register</a>
                        </li>
                    </div>

                @elseif(Auth::check())
                    <li class="nav-item dropdown ms-5">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            {{ $user->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">View Profile</a></li>
                            @if(Auth::user()->role == 'Member')
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
