@extends('adminMaster')


@include('partials.nav');
@include('partials.header')

@section('content')


    <div class="container">

        <h2>Please Log In Here:</h2>

        @include('partials.error')

        <form method="POST" action="/passworepUdate">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" style="width: 40%" value="{{ Auth::user()->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" style="width: 40%" required>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" style="width: 40%" required>
            </div>

            <button type="submit" class="btn btn-danger">Change Password</button>

        </form>

        @include('partials.logout')

    </div>


@endsection