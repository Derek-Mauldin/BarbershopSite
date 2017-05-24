@extends('./admin')

@section('content')

    @include('nav')
    @include('header')
    @include('success')

    <div class="container text-center">

        <h2>Admin Menu</h2>
        <hr>

        <div>
            <h3><a href="/queue">Review and upadate your shops queue</a></h3>
        </div>

        <div>
            <h3><a href="/register">Register a new administrator</a></h3>
        </div>

        <div>
            <h3><a href="/addShop">Add a new shop</a></h3>
        </div>

        <div>
            <h3><a href="/updateProfile">Update your profile</a></h3>
        </div>

        <div>
            <h3><a href="/passwordReset">Reset Your Password</a></h3>
        </div>

    </div>

    @include('logout')


@endsection