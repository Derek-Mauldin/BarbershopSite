@extends('adminMaster')

@section('content')

    @include('./nav')
    @include('./header')

    <div class="container">

        <h2>Register A New Administrator Here:</h2>

        @include('error')

        <form method="POST" action="/register">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" style="width: 40%" required>
            </div>


            <div class="form-group">
                <label for="shopName">Barbershop</label>
                <select class="form-control" id="shopName" name="shopName" style="width: 40%">
                    <option value="">Choose the shop the new administrator works for</option>
                    @foreach($barberShops as $shop)
                        <option value="{{ $shop->barbershop_name }}">{{ $shop->barbershop_name }}</option>
                    @endforeach
                </select>
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

        @include('./logout')

    </div>

@endsection

