<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <title>Guest Who</title>
    <!-- Price Slider Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/nouislider/nouislider.css')}}">
    <!-- Google fonts - Playfair Display-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <link rel="stylesheet" href="{{asset('fonts/hkgrotesk/stylesheet.css')}}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('css/owl.caroussel/assets/owl.carousel.css')}}">
    <!-- Ekko Lightbox-->
    <link rel="stylesheet" href="{{asset('css/ekko-lightbox/ekko-lightbox.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon/logo.png')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/solid.css"
          integrity="sha384-TbilV5Lbhlwdyc4RuIV/JhD8NR+BfMrvz4BL5QFa2we1hQu6wvREr3v6XSRfCTRp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/regular.css"
          integrity="sha384-avJt9MoJH2rB4PKRsJRHZv7yiFZn8LrnXuzvmZoD3fh1aL6aM6s0BBcnCvBe6XSD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/brands.css"
          integrity="sha384-7xAnn7Zm3QC1jFjVc1A6v/toepoG3JXboQYzbM0jrPzou9OFXm/fY6Z/XiIebl/k" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css"
          integrity="sha384-ozJwkrqb90Oa3ZNb+yKFW2lToAWYdTiF1vt8JiH5ptTGHTGcN7qdoR1F95e0kYyG" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header class="with-background header header-absolute">
    <nav class="navbar navbar-expand-lg navbar-sticky navbar-dark navbar-hover-light navbar-fixed-light bg-fixed-white bg-transparent bg-hover-white bg-fixed-white justify-content-between">
        <div class="container-fluid">
            <!-- Left Menu -->
            <div class=" collapse navbar-collapse dual-nav w-50 order-1 order-lg-0">
                {{ menu('main', 'partials.menus.main') }}
            </div>
            <!-- NAME-->
            <a href="{{env("APP_URL")}}"
               class="navbar-brand d-block mx-auto text-center order-0 order-lg-1"><span class="title"><b>GUEST WHO</b></span>
            </a>
            <!-- Right Menu -->
            <div class=" collapse navbar-collapse dual-nav w-50 order-2">
                @include('partials.menus.main-right')
            </div>
        </div>
    </nav><!-- end top-nav -->
</header>
<!-- Hero Section-->
<section class="mb-10px">
    <div class="d-flex align-items-center position-relative mh-full-screen pt-5 dark-overlay">
        <div style="background: #f8d5cf;" class="bg-image item home-full-item">
            <img src="{{asset('img/photo/ian-dooley-347942-unsplash.jpg')}}" alt="" class="bg-image">
            <div class="container py-6 overlay-content">
                <div class="row">
                    <div class="col-lg-8 col-xl-6 mx-auto text-white text-center">
                        <h5 class="text-uppercase text-white font-weight-light mb-4 letter-spacing-5"> Header Variant</h5>
                        <h1 class="mb-5 display-2 font-weight-bold text-serif">Centered Logo</h1>
                        <p class="lead mb-4">Centered logo with a transparent navbar.</p>
                        <p> <a href="#" class="btn btn-light">View collection        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid px-5px">
        <div class="row mx-0">
            <div class="col-md-6 mb-10px px-5px">
                <div class="card border-0 text-white text-center"><img
                            src="{{asset('img/photo/christopher-campbell-28571-unsplash.jpg')}}" alt="Card image"
                            class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4">Top picks</h2><a href="category.html"
                                                                                         class="btn btn-light">Shop
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-10px px-5px">
                <div class="card border-0 text-white text-center"><img
                            src="{{asset('img/photo/marco-xu-496929-unsplash.jpg')}}" alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4">New arrivals</h2><a href="category.html"
                                                                                            class="btn btn-light">Shop
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-0">
            <div class="col-lg-4 mb-10px px-5px">
                <div class="card border-0 text-center text-white"><img
                            src="{{asset('img/photo/benjamin-voros-260869-unsplash.jpg')}}" alt="Card image"
                            class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4">Jackets</h2><a href="category.html"
                                                                      class="btn btn-link text-white">Shop now <i
                                        class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-10px px-5px">
                <div class="card border-0 text-center text-white"><img
                            src="{{asset('img/photo/malvestida-magazine-458585-unsplash.jpg')}}" alt="Card image"
                            class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4">Lookbook</h2><a href="category.html"
                                                                       class="btn btn-link text-white">Shop now <i
                                        class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-10px px-5px">
                <div class="card border-0 text-center text-dark"><img
                            src="{{asset('img/photo/michael-frattaroli-221247-unsplash.jpg')}}" alt="Card image"
                            class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4">Try this</h2><a href="category.html"
                                                                       class="btn btn-link text-dark">Shop now <i
                                        class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="featured-section">

    <div class="container">
        <h1 class="text-center">Laravel Ecommerce</h1>

        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi,
            consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt
            aliquid possimus temporibus enim eum hic lorem.</p>

        <div class="text-center button-container">
            <a href="#" class="button">Featured</a>
            <a href="#" class="button">On Sale</a>
        </div>

        {{-- <div class="tabs">
            <div class="tab">
                Featured
            </div>
            <div class="tab">
                On Sale
            </div>
        </div> --}}

        <div class="products text-center">
            @foreach ($products as $product)
                <div class="product">
                    <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}"
                                                                            alt="product"></a>
                    <a href="{{ route('shop.show', $product->slug) }}">
                        <div class="product-name">{{ $product->name }}</div>
                    </a>
                    <div class="product-price">{{ $product->presentPrice() }}</div>
                </div>
            @endforeach

        </div> <!-- end products -->

        <div class="text-center button-container">
            <a href="{{ route('shop.index') }}" class="button">View more products</a>
        </div>

    </div> <!-- end container -->

</div> <!-- end featured-section -->

<blog-posts></blog-posts>

@include('partials.footer')

<!-- /Footer end-->
<div id="scrollTop"><i class="fa fa-long-arrow-alt-up"></i></div>
<!-- JavaScript files-->
<script>
    // ------------------------------------------------------- //
    //   Inject SVG Sprite -
    //   see more here
    //   https://css-tricks.com/ajaxing-svg-sprite/
    // ------------------------------------------------------ //
    function injectSvgSprite(path) {

        var ajax = new XMLHttpRequest();
        ajax.open("GET", path, true);
        ajax.send();
        ajax.onload = function (e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
        }
    }

    // this is set to Bootstrapious website as you cannot
    // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
    // while using file:// protocol
    // pls don't forget to change to your domain :)
    injectSvgSprite('https://demo.bootstrapious.com/sell/1-2-0/icons/orion-svg-sprite.svg');

</script>
<!-- jQuery-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- PopperJS (Bootstrap's dependency)-->
<script src="{{asset('js/popper.js/umd/popper.min.js')}}"></script>
<!-- Bootstrap JavaScript-->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
<!-- Owl Carousel-->
<script src="{{asset('js/owl.caroussel/owl.carousel.js')}}"></script>
<script src="{{asset('js/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
<!-- NoUI Slider (price slider)-->
<script src="{{asset('js/nouislider/nouislider.js')}}"></script>
<!-- Smooth scrolling-->
<script src="{{asset('js/smooth-scroll/smooth-scroll.polyfills.min.js')}}"></script>
<!-- Lightbox -->
<script src="{{asset('js/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
<script src="{{asset('js/object-fit-images/ofi.min.js')}}"></script>
<script>
    var basePath = "http://localhost/s1/laravel-ecommerce-example/public";
</script>
<script src="{{asset('js/theme.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
