@if(Session::has('success'))
    <br>
    <div class="container text-center">
        <div class="alert alert-success" role="alert">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    </div>
@endif