<header>
    <div class="line-blu">
        <div class="container-line">
            <ul>
                <li><a href="#">DC POWER VISA</a></li>
                <li><a href="#">ADDITIONAL DC SITES</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="logo">
        <img src="{{ asset('images/dc-logo.png') }}" alt="logo DC" />
        </div>
        <div class="header-menu">
        <ul>
            <li class="{{ Route::currentRouteName() == 'characters' ? 'active' : '' }}">
                <a class="{{ Route::currentRouteName() == 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">CHARACTERS</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'comics' || Route::currentRouteName() == 'single_comics' ? 'active' : '' }}">
                <a class="{{ Route::currentRouteName() == 'comics' || Route::currentRouteName() == 'single_comics' ? 'active' : '' }}" href="{{ route('comics') }}">COMICS</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'movies' ? 'active' : '' }}">
                <a class="{{ Route::currentRouteName() == 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">MOVIES</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'tv' ? 'active' : '' }}">
                <a class="{{ Route::currentRouteName() == 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">TV</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'games' ? 'active' : '' }}">
                <a class="{{ Route::currentRouteName() == 'games' ? 'active' : '' }}" href="{{ route('games') }}">GAMES</a>
            </li>
            <li class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}">
                <a class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">COLLECTIBLES</a>
            </li>
            <li>
                <a href="#">VIDEOS</a>
            </li>
            <li>
                <a href="#">FANS</a>
            </li>
            <li>
                <a href="#">NEWS</a>
            </li>
            <li>
                <a href="#">SHOP</a>
            </li>
        </ul>
        </div>
    </div>
</header>
