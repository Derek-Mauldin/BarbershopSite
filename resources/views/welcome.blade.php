<!doctype html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Check In</title>

        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    </head>


    <body>


        <div class="container">
            <nav class="navbar navbar-light text-right">
                <a class="navbar-brand" href="/login">Admin Login</a>
            </nav>

            <div class="jumbotron text-center">
                <h1 class="display-3">Welcome <br> Barbershop Check In</h1>
            </div>
        </div>


        <div class="container">

            <h2>Please check in here:</h2>

            @include('success')
            @include('error')

            <form method="POST" action="/checkIn">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="customerName">Your Name</label>
                    <input type="text" class="form-control" id="customerName" name="customerName" style="width: 40%">
                </div>

                <div class="form-group">
                    <label for="shopName">Barbershop (click to select)</label>
                    <select class="form-control" id="shopName" name="shopName" style="width: 40%">
                        <option value="">Choose your barbershop</option>
                        @foreach($barberShops as $shop)
                            <option value="{{ $shop->barbershop_name }}">{{ $shop->barbershop_name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-info">Check In</button>

            </form>


        </div>

    </body>

</html>