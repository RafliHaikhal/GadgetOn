@section('css', '/css/view_profile.css')
@section('title', 'Profile')
@include('layout.header')

<body>

    <div class="box">
        <div class="box-content">
            <img src="#" alt="profile-img">
            <form action="" method="post">
                @csrf
                <div class="form-item">
                    <label for="name">Profile Name</label>
                    <input type="text" name="name" id="name" value="{{ $user->name }}" disabled>
                </div>
                <div class="form-item">
                    <label for="email">Profile Email</label>
                    <input type="email" name="email" id="email" value="{{ $user->email }}" disabled>
                </div>
                <div class="form-item">
                    <label for="address">Profile Address</label>
                    <input type="text" name="address" id="address" value="{{ $user->address }}" disabled>
                </div>
                <button class="view_profile" type="submit">Edit Profile</button>
            </form>
        </div>
    </div>

</body>
