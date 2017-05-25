@extends('adminMaster')

<div class="container">
    <nav class="navbar navbar-light text-right">
        <a class="navbar-brand" href="/">Back to Check In</a>
    </nav>
</div>

@include('./header')

@section('content')


    <div class="container">

        <h2>Please Log In Here:</h2>

        <form method="POST" action="/login">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" style="width: 40%" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" style="width: 40%" required>
            </div>

            <button type="submit" class="btn btn-info">Log In</button>

        </form>

       @include('error')

    </div>


@endsection