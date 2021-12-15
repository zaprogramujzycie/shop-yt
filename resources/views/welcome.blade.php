@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8 order-md-2 col-lg-9">
                <div class="container-fluid">
                    <div class="row   mb-5">
                        <div class="col-12">
                            <div class="dropdown text-md-left text-center float-md-left mb-3 mt-3 mt-md-0 mb-md-0">
                                <label class="mr-2">Sort by:</label>
                                <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Relevance <span class="caret"></span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#">Relevance</a>
                                    <a class="dropdown-item" href="#">Price Descending</a>
                                    <a class="dropdown-item" href="#">Price Ascending</a>
                                    <a class="dropdown-item" href="#">Best Selling</a>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                            </div>
                            <div class="dropdown float-right">
                                <a class="btn btn-lg btn-light dropdown-toggle products-actual-count" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">5<span class="caret"></span></a>
                                <div class="dropdown-menu dropdown-menu-right products-count" aria-labelledby="navbarDropdown" x-placement="bottom-end" style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">
                                    <a class="dropdown-item" href="#">5</a>
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">15</a>
                                    <a class="dropdown-item" href="#">20</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="products-wrapper">
                        @foreach($products as $product)
                            <div class="col-6 col-md-6 col-lg-4 mb-3">
                                <div class="card h-100 border-0">
                                    <div class="card-img-top">
                                        @if(!is_null($product->image_path))
                                            <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">
                                        @else
                                            <img src="{{ $defaultImage }}" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">
                                        @endif
                                    </div>
                                    <div class="card-body text-center">
                                        <h4 class="card-title">
                                            {{ $product->name }}
                                        </h4>
                                        <h5 class="card-price small">
                                            <i>PLN {{ $product->price }}</i>
                                        </h5>
                                    </div>
                                    <button class="btn btn-success btn-sm add-cart-button" data-id="{{ $product->id }}" @guest disabled @endguest>
                                        <i class="fas fa-cart-plus"></i> Dodaj do koszyka
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row sorting mb-5 mt-5">
                        <div class="col-12">
                            <a class="btn btn-light">
                                <i class="fas fa-arrow-up mr-2"></i> Back to top</a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                                <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                            </div>
                            <div class="dropdown float-md-right">
                                <a class="btn btn-light btn-lg dropdown-toggle products-actual-count" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">5<span class="caret"></span></a>
                                <div class="dropdown-menu products-count" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">5</a>
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">15</a>
                                    <a class="dropdown-item" href="#">20</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
                <h3 class="mt-0 mb-5">{{ __('shop.welcome.products') }} <span class="text-primary">{{ count($products) }}</span></h3>
                <h6 class="text-uppercase font-weight-bold mb-3">{{ __('shop.welcome.categories') }}</h6>
                @foreach($categories as $category)
                    <div class="mt-2 mb-2 pl-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="filter[categories][]" id="category-{{ $category->id }}" value="{{ $category->id }}">
                            <label class="custom-control-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                        </div>
                    </div>
                @endforeach
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <h6 class="text-uppercase mt-5 mb-3 font-weight-bold">{{ __('shop.welcome.price') }}</h6>
                <div class="price-filter-control">
                    <input type="number" class="form-control w-50 pull-left mb-2" placeholder="50" name="filter[price_min]" id="price-min-control">
                    <input type="number" class="form-control w-50 pull-right" placeholder="150" name="filter[price_max]" id="price-max-control">
                </div>
                <input id="ex2" type="text" class="slider " value="50,150" data-slider-min="10" data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" data-value="50,150" style="display: none;">
                <div class="divider mt-5 mb-5 border-bottom border-secondary"></div>
                <a href="#" class="btn btn-lg btn-block btn-primary mt-5" id="filter-button"><i class="fas fa-search"></i> {{ __('shop.welcome.filter') }}</a>
            </form>
        </div>
    </div>
@endsection
@section('javascript')
    const WELCOME_DATA = {
        storagePath: '{{ asset('storage') }}/',
        defaultImage: '{{ $defaultImage }}',
        addToCart: '{{ url('cart') }}/',
        listCart: '{{ url('cart') }}',
        isGuest: '{{ $isGuest }}'
    }
@endsection
@section('js-files')
    <script src="{{ asset("js/welcome.js") }}"></script>
@endsection
