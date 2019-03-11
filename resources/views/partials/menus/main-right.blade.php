<div class="d-flex w-100 align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
    <div data-toggle="search" class="nav-item navbar-icon-link">
        <svg class="svg-icon">
            <use xlink:href="#search-1"></use>
        </svg>
    </div>
    @guest
        <div class="nav-item">
            <a class="navbar-icon-link" href="{{ route('login') }}">
                <svg class="svg-icon">
                    <use xlink:href="#male-user-1"></use>
                </svg>
                <span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">
                Se Connecter</span></a></div>
    @else
        <div class="nav-item">
            <a href="{{ route('users.edit') }}">Mon Compte</a>
        </div>
        <div class="nav-item">
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                Se Déconnecter
            </a>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endguest
    <div class="nav-item">
        <a class="navbar-icon-link" href="{{ route('cart.index') }}">
            <svg class="svg-icon">
                <use xlink:href="#cart-1"></use>
            </svg>
            <span class="text-sm ml-2 ml-lg-0 text-uppercase text-sm font-weight-bold d-none d-sm-inline d-lg-none">Mon panier</span>
            @if (Cart::instance('default')->count() > 0)
                <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
            @endif
        </a>
    </div>
    {{-- @foreach($items as $menu_item)
        <li>
            <a href="{{ $menu_item->link() }}">
                {{ $menu_item->title }}
                @if ($menu_item->title === 'Cart')
                    @if (Cart::instance('default')->count() > 0)
                    <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                @endif
            </a>
        </li>
    @endforeach --}}
</div>
<div class="w-2rem"></div>