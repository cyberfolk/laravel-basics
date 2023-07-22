<header id="app_header">
    <h1 class="text-center text-warning pt-3"> Movie DB </h1>
    <nav class="nav justify-content-center  text-white">
        <a href="{{route('home')}}" class="fs-4 nav-link {{ Route::currentRouteName() === 'home' ? 'text-warning fw-bold' : 'text-white'}}" >Home</a>
        <a href="{{route('about')}}" class="fs-4 nav-link {{ Route::currentRouteName() === 'about' ? 'text-warning fw-bold' : 'text-white'}}" >About</a>
        <a href="{{route('movies')}}" class="fs-4 nav-link {{ Route::currentRouteName() === 'movies' ? 'text-warning fw-bold' : 'text-white'}}" >Movies</a>
    </nav>
    <!-- /.navbar -->
</header>
<!-- /#app_header -->
