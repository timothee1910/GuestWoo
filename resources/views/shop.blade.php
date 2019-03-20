@extends('layout')

@section('title', 'Les Produits')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="{{env('APP_URL')}}">Accueil</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Ma boutique</span>
    @endcomponent

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

        <div class="row">
            <!-- Grid -->
            <div class="products-grid col-xl-9 col-lg-8 order-lg-2">
                <header class="product-grid-header">
                    <div class="mr-3 mb-3">

                        Showing <strong>1-12 </strong>of <strong>158 </strong>products
                    </div>
                    <div class="mr-3 mb-3"><span class="mr-2">Show</span><a href="#"
                                                                            class="product-grid-header-show active">12 </a><a
                                href="#" class="product-grid-header-show ">24 </a><a href="#"
                                                                                     class="product-grid-header-show ">All </a>
                    </div>
                    <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Sort by</span>
                        <select class="custom-select w-auto border-0">
                            <option value="orderby_0">Default</option>
                            <option value="orderby_1">Popularity</option>
                            <option value="orderby_2">Rating</option>
                            <option value="orderby_3">Newest first</option>
                        </select>
                    </div>
                </header>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-xl-4 col-sm-6">
                            <div class="product">
                                <div class="product-image">
                                    <a href="{{ route('shop.show', $product->slug) }}">
                                        <img class="img-fluid"
                                             src="{{ productImage($product->image) }}" alt="product"></a>
                                    <div class="product-hover-overlay">
                                        <a href="{{ route('shop.show', $product->slug) }}"
                                           class="product-hover-overlay-link">
                                            <div class="product-name">{{ $product->name }}</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <h3 class="h6 text-uppercase mb-1"><a
                                                href="{{ route('shop.show', $product->slug) }}"
                                                class="text-dark">{{ $product->name }}</a></h3>
                                    <span class="text-muted">{{ $product->presentPrice() }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
                    <div>
                        <div class="spacer"></div>
                        {{ $products->appends(request()->input())->links() }}
                    </div>
                </nav>
            </div>
            <div class="sidebar col-xl-3 col-lg-4 order-lg-1">
                <div class="sidebar-block px-3 px-lg-0 mr-lg-4">
                    <a data-toggle="collapse" href="#categoriesMenu" aria-expanded="false"
                       aria-controls="categoriesMenu"
                       class="d-lg-none block-toggler">Catégories</a>
                    <h3>Par categories</h3>
                    <div id="categoriesMenu" class="expand-lg collapse">
                        @foreach ($categories as $category)
                            <div class="{{ setActiveCategory($category->slug) }} nav nav-pills flex-column ml-3">
                                <a
                                        href="#"
                                        class="nav-link mb-2">Lorem
                                    ipsum</a><a href="#" class="nav-link mb-2">Dolor</a><a href="#"
                                                                                           class="nav-link mb-2">Sit
                                    amet</a><a href="#" class="nav-link mb-2">Donec vitae</a>
                            </div><a href="{{ route('shop.index', ['category' => $category->slug]) }}"
                                     class="nav-link d-flex justify-content-between mb-2 active"><span>{{ $category->name }}</span></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>
    <script>
        var basePath = ""

    </script>
    <script src="{{asset('js/theme.js')}}"></script>
@endsection
