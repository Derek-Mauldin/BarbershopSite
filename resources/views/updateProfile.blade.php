@extends('./admin')

@section('content')

    @include('./nav')
    @include('./header')

    <div class="container">

        @include('error')

        <h2>Register Update Profile Here:</h2>

        <form method="POST" action="/update">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" style="width: 40%" required>
            </div>


            <div class="form-group">
                <label for="barbershop_name">Barbershop Name</label>
                <input type="text" class="form-control" id="barbershop_name" name="barbershop_name" value="{{ Auth::user()->barbershop_name }}" style="width: 40%" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" style="width: 40%" required>
            </div>

            <div>
            <button type="submit" class="btn btn-info">Update Profile</button>
            </div>

        </form>

        @include('./logout')

    </div>

@endsection
