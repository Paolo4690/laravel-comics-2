@php
    $menu = config('myArr.menu');
@endphp
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
                @foreach ($menu as $menuItem)
                    <li class="{{ in_array(Route::currentRouteName(), $menuItem['active']) ? 'active' : '' }}">
                        <a class="{{ in_array(Route::currentRouteName(), $menuItem['active']) ? 'active' : '' }}" href="{{ route($menuItem['route']) }}">{{ $menuItem['label'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <input type="text" name="search" id="search" placeholder="Search">
    </div>
</header>
