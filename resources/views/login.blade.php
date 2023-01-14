@section('css', '/css/login.css')
@section('title', 'Login')
@include('layout.header')


<body>
    <div class="login-body-container py-5">
        <div class="login-body-content">
            <div class="row">
                <div class="col login-body-rightside">
            
                </div>
                <div class="col login-body-leftside py-5">
                    <div class="login-gadgeton-text mb-3">
                        <h1><span class="navbar-text text-black">Gadget</span><span class="navbar-text text-danger">On</span></h1>
                    </div>
                    <h5 class="login-signin-text mb-4">Sign in to your account</h5>
                    <form action="" method="post">
                    @csrf
                    <div class="form-item">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" value="">
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form-item">
                        <input type="checkbox" name="remember" value ="0" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    </form>
                <button class="btn login-button"type="submit">
                    Login
                </button>
                <p>Don't have an account? <a class="login-registernow"href="/register">Register here</a></p>
                </div>
            </div>
            

        </div>
    </div>
</body>
</html>