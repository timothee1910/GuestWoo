@extends('layout')

@section('title', $product->name)

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <section class="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-4 order-2 order-lg-1">
                    <div class="row">
                        <div class="col-2 pr-0">
                            <div data-slider-id="1" class="owl-thumbs">
                                <button class="owl-thumb-item detail-thumb-item mb-3"><img
                                            src="{{ productImage($product->image) }}" alt="Modern Jacket 0"
                                            class="img-fluid"></button>
                                @if ($product->images)
                                    @foreach (json_decode($product->images, true) as $image)
                                        <button class="owl-thumb-item detail-thumb-item mb-3">
                                            <img src="{{ productImage($product->image) }}"
                                                 alt="Modern Jacket 0" class="img-fluid">
                                        </button>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-10 detail-carousel">
                            <div class="ribbon ribbon-info">Fresh</div>
                            <div class="ribbon ribbon-primary">Sale</div>
                            <div data-slider-id="1" class="owl-carousel detail-slider">
                                <div class="item"><a href="{{ productImage($product->image) }}"
                                                     data-footer="Modern Jacket 1 - Caption text" data-toggle="lightbox"
                                                     data-gallery="product-gallery">
                                        <img src="{{ productImage($product->image) }}" alt="Modern Jacket 1"
                                             class="img-fluid"></a>
                                </div>
                                @if ($product->images)
                                    @foreach (json_decode($product->images, true) as $image)
                                        <div class="item"><a href="{{ productImage($product->image) }}"
                                                             data-footer="Modern Jacket 1 - Caption text"
                                                             data-toggle="lightbox" data-gallery="product-gallery">
                                                <img src="{{ productImage($product->image) }}" alt="Modern Jacket 1"
                                                     class="img-fluid"></a>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 pl-lg-4 order-1 order-lg-2">
                    @component('components.breadcrumbs')
                        <a href="{{env('APP_URL')}}">Accueil</a>
                        <i class="fa fa-chevron-right breadcrumb-separator"></i>
                        <span><a href="{{ route('shop.index') }}">Boutique</a></span>
                        <i class="fa fa-chevron-right breadcrumb-separator"></i>
                        <span>{{ $product->name }}</span>
                    @endcomponent
                    <h1 class="mb-4">{{ $product->name }}</h1>
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                        <ul class="list-inline mb-2 mb-sm-0">
                            <li class="list-inline-item h4 font-weight-light mb-0">{{ $product->presentPrice() }}</li>
                        </ul>
                    </div>
                    <p class="mb-4 text-muted">{!! $product->description !!}</p>
                    @if ($product->quantity > 0)
                        <form action="{{ route('cart.store', $product) }}" method="POST">
                            <div class="row">
                                <div class="col-sm-6 col-lg-12 detail-option mb-3">
                                    <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                                    <label for="size_0"
                                           class="btn btn-sm btn-outline-secondary detail-option-btn-label">

                                        Small
                                        <input type="radio" name="size" value="value_0" id="size_0" required
                                               class="input-invisible">
                                    </label>
                                    <label for="size_1"
                                           class="btn btn-sm btn-outline-secondary detail-option-btn-label">

                                        Medium
                                        <input type="radio" name="size" value="value_1" id="size_1" required
                                               class="input-invisible">
                                    </label>
                                    <label for="size_2"
                                           class="btn btn-sm btn-outline-secondary detail-option-btn-label">

                                        Large
                                        <input type="radio" name="size" value="value_2" id="size_2" required
                                               class="input-invisible">
                                    </label>
                                </div>
                                <div class="col-sm-6 col-lg-12 detail-option mb-3">
                                    <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                                    <label for="material_0"
                                           class="btn btn-sm btn-outline-secondary detail-option-btn-label">

                                        Hoodie
                                        <input type="radio" name="material" value="value_0" id="material_0" required
                                               class="input-invisible">
                                    </label>
                                    <label for="material_1"
                                           class="btn btn-sm btn-outline-secondary detail-option-btn-label">

                                        College
                                        <input type="radio" name="material" value="value_1" id="material_1" required
                                               class="input-invisible">
                                    </label>
                                </div>
                                <div class="col-12 detail-option mb-5">
                                    <label class="detail-option-heading font-weight-bold">{!! $stockLevel !!}
                                        <span>({{$product->quantity}})</span></label>
                                    <input name="items" type="number" value="1" class="form-control detail-quantity">
                                </div>
                            </div>
                            <p>&nbsp;</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-dark btn-lg mb-1"><i
                                                class="fa fa-shopping-cart mr-2"></i>Ajouter au panier
                                    </button>
                                </li>
                            </ul>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <div class="product-section container">
        <div>
            <div class="product-section-image">
                <img src="{{ productImage($product->image) }}" alt="product" class="active" id="currentImage">
            </div>
            <div class="product-section-images">
                <div class="product-section-thumbnail selected">
                    <img src="{{ productImage($product->image) }}" alt="product">
                </div>

                @if ($product->images)
                    @foreach (json_decode($product->images, true) as $image)
                        <div class="product-section-thumbnail">
                            <img src="{{ productImage($image) }}" alt="product">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{ $product->name }}</h1>
            <div class="product-section-subtitle">{{ $product->details }}</div>
            <div>{!! $stockLevel !!}  <br>
            {{$product->quantity}}</div>
            <div class="product-section-price">{{ $product->presentPrice() }}</div>

            <p>
                {!! $product->description !!}
            </p>

            <p>&nbsp;</p>

            @if ($product->quantity > 0)
                <form action="{{ route('cart.store', $product) }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="button button-plain">Add to Cart</button>
                </form>
            @endif
        </div>
    </div> <!-- end product-section -->

    @include('partials.might-like')

@endsection

@section('extra-js')
    <script>
        (function () {
            const currentImage = document.querySelector('#currentImage');
            const images = document.querySelectorAll('.product-section-thumbnail');

            images.forEach((element) => element.addEventListener('click', thumbnailClick));

            function thumbnailClick(e) {
                currentImage.classList.remove('active');

                currentImage.addEventListener('transitionend', () => {
                    currentImage.src = this.querySelector('img').src;
                    currentImage.classList.add('active');
                })

                images.forEach((element) => element.classList.remove('selected'));
                this.classList.add('selected');
            }

        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
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
    <script src="{{ asset('js/algolia.js') }}"></script>

@endsection
