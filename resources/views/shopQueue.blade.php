@extends('adminMaster')

@section('content')

@include('nav')
@include('header')


<div class="container text-center">

    <h2>Queue for {{ auth()->user()->barbershop_name }}</h2>


    <table class="table table-inverse">
        <tr>
            <th class="text-center">Customer Name</th>
            <th class="text-center">Check In Time</th>
            <th class="text-center">Remove from Queue</th>
        </tr>

        @foreach($queue as $person)
            <form method="post" action="\remove">
                {{ csrf_field() }}
                <tr>
                    <td>{{ $person->customer_name }}</td>
                    <td>{{ $person->created_at }}</td>
                    <td>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">Remove</button>
                            <input type="hidden" name="qid" id="qid" value="{{ $person->id }}">
                        </div>
                    </td>
                </tr>
            </form>
        @endforeach

    </table>


</div>

@include('logout')

@endsection
