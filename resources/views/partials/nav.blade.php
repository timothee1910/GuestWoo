<header class="header ">
    <nav class="navbar navbar-expand-lg justify-content-between navbar-sticky navbar-light bg-white bg-fixed-white fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse dual-nav w-50 order-1 order-lg-0">
                @if (! (request()->is('checkout') || request()->is('guestCheckout')))
                    {{ menu('main', 'partials.menus.main') }}
                @endif
            </div>
            <a href="{{env("APP_URL")}}"
               class="navbar-brand d-block mx-auto text-center order-0 order-lg-1"><span class="title"><b>GUEST WHO</b></span>
            </a>
            <div class="collapse navbar-collapse dual-nav w-50 order-2">
                @if (! (request()->is('checkout') || request()->is('guestCheckout')))
                    @include('partials.menus.main-right')
                @endif
            </div>
        </div> <!-- end top-nav -->
    </nav>
</header>
