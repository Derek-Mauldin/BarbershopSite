<div class="container">
    <nav class="navbar navbar-light text-right">

        <div style="display: inline-block">
            <a href="\admin" style="color: black; margin-right: 2em">Admin</a>

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();" style="color: black; margin-right: 2em">
                Logout
            </a>

            <a href="/" style="color: black">Check In</a>
        </div>
    </nav>
</div>