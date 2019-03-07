<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="{{route('home')}}"><img height="50" width="50" src="{{asset('admin/img/Favicon.png')}}" alt="mishajib"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('add.student')}}">Add Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.mi-shajib.com">MY Site</a>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->
