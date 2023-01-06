@section('title', 'Register')
@include('layout.header')

<body>
    <div class="box">
        <div class="box-content">
            <h1>Create an Account</h1>
            <form action="" method="post">
                <div class="form-item">
                    <label for="name">Your Name</label>
                    <input type="text">
                </div>
                <div class="form-item">
                    <label for="email">Your Email</label>
                    <input type="email">
                </div>
                <div class="form-item">
                    <label for="password">Password</label>
                    <input type="password">
                </div>
                <div class="form-item">
                    <label for="confirm">Repeat your Password</label>
                    <input type="password">
                </div>
                <div class="form-item">
                    <label for="address">Your Address</label>
                    <input type="text">
                </div>
                <div class="form-item">
                    <p id="radio-title">Your Gender</p>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="gender" id="male-label">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="gender" id="female">Female</label>
                </div>
                <div class="form-item">
                    <input type="checkbox">
                    <label for="checkbox">I agree all statements in <a href="#">Term of service</a></label>
                </div>
                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>
</body>
