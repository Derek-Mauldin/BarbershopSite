@extends('adminMaster')


@include('partials.nav')
@include('partials.header')

@section('content')


    <div class="container">

        <h2>Add new Barbershop:</h2>

        @include('partials.error')


        <form method="POST" action="/addShop">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="barberShopName">Name of new Barbershop</label>
                <input type="text" class="form-control" id="barberShopName" name="barberShopName" style="width: 40%" required>
            </div>


            <button type="submit" class="btn btn-info">Submit</button>

        </form>

    </div>

    @include('partials.logout')

@endsection