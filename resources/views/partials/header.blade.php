
<header id="my-header" class="d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{Vite::asset('/resources/img/christmas-gift-icon-34992.png')}}" alt="logo">
            <h2 class="mb-0 text-white">Bool<span id="my-span">Gifts</span></h2>
        </div>
        <nav>
            <ul class="list-unstyled d-flex align-items-center mb-0 gap-5 ">
                <li>
                    <a class="{{ Route::currentRouteName() == 'home' ? 'active_li' : 'not_active' }}"
                    href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a class="{{ Route::currentRouteName() == 'gifts.index' ? 'active_li' : 'not_active' }}"
                    href="{{route('gifts.index')}}">Gifts</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

