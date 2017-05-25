@extends('adminMaster')

@section('content')

    @include('./nav')
    @include('./header')

    <div class="container">

        <h2>Register A New Administrator Here:</h2>

        <form method="POST" action="/register">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" style="width: 40%" required>
            </div>


            <div class="form-group">
                <label for="barbershop_name">Barbershop Name</label>
                <input type="text" class="form-control" id="barbershop_name" name="barbershop_name" style="width: 40%" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" style="width: 40%" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" style="width: 40%" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" style="width: 40%" required>
            </div>

            <button type="submit" class="btn btn-info">Register</button>

        </form>

        @include('error')
        @include('./logout')

    </div>

@endsection

