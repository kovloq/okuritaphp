@extends('layouts.app')

@section("head")
<script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
<link href="{{ asset('css/slick.css') }}" rel="stylesheet"><!-- Bootstrap -->
<script>
$(document).ready(function(){
    // Slide Hero
    if($('.hero-slide').length){
        $('.hero-slide').slick({
            autoplay: true,
            infinite: true,
            slidesToShow: 1,
            dots: true,
            adaptiveHeight: true,
            arrows: true,
            prevArrow:"<button type='button' class='slick-prev'><i class='fas fa-arrow-left'></i></button>",
            nextArrow:"<button type='button' class='slick-next'><i class='fas fa-arrow-right'></i></button>",
        });
    }
})
</script>
@endsection

@section('content')
<div class="page page--home bg-ornament">
    <section class="hero">
        <div class="hero-slide">
            <div class="hero-slide__item">
                <div class="hero-slide__item-img">
                    <a href="#" title="Go to Hero 1">
                        <img src="{{ asset('img/hero/1.png') }}" alt="Yahoo Banner" />
                    </a>
                </div>
            </div>
            <div class="hero-slide__item">
                <div class="hero-slide__item-img">
                    <a href="#" title="Go to Hero 1">
                        <img src="{{ asset('img/hero/2.png') }}" alt="Amazon Banner" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="recommendation" id="recommendation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="product-detail.html" class="card card-banner">
                        <div class="card-img">
                            <img src="{{ asset('img/banner/apple-watch.png') }}" alt="Apple Watch" />
                        </div>
                        <h5 class="card-badge">
                            20% Off
                        </h5>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-0">
                                <label for="basket-0">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-0">
                                <label for="favorite-0">
                                    <i class="fas fa-heart"></i>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-end">
                                <div class="col-8">
                                    <h5 class="card-title">Apple Watch Series 6</h5>
                                    <h4 class="card-price">$ 565.00</h4>
                                </div>
                                <div class="col-auto ml-auto">
                                    <div class="card-brand">
                                        <img src="{{ asset('img/logo/marketplace/rakuten.png') }}" alt="Rakuten" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="product-detail.html" class="card card-banner card-banner--long">
                                <div class="card-img">
                                    <img src="{{ asset('img/banner/bose.png') }}" alt="Bose SoundSport" />
                                </div>
                                <h5 class="card-badge">
                                    20% Off
                                </h5>
                                <div class="card-action">
                                    <div class="card-action__item">
                                        <input type="checkbox" id="basket-1">
                                        <label for="basket-1">
                                            <i class="fas fa-shopping-basket"></i>
                                        </label>
                                    </div>
                                    <div class="card-action__item">
                                        <input type="checkbox" id="favorite-1">
                                        <label for="favorite-1">
                                            <i class="fas fa-heart"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h5 class="card-title">Bose SoundSport</h5>
                                            <p class="card-sku">Product ID 6392302-1</p>
                                            <h4 class="card-price">$ 120.50</h4>
                                        </div>
                                        <div class="col-auto ml-auto">
                                            <div class="card-brand">
                                                <img src="{{ asset('img/logo/marketplace/amazon.png') }}" alt="Rakuten" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="product-detail.html" class="card card-banner card-banner--sm">
                                <div class="card-img">
                                    <img src="{{ asset('img/banner/adidas.png') }}" alt="Adidas NMD-R1" />
                                </div>
                                <h5 class="card-badge">
                                    20% Off
                                </h5>
                                <div class="card-action">
                                    <div class="card-action__item">
                                        <input type="checkbox" id="basket-2">
                                        <label for="basket-2">
                                            <i class="fas fa-shopping-basket"></i>
                                        </label>
                                    </div>
                                    <div class="card-action__item">
                                        <input type="checkbox" id="favorite-2">
                                        <label for="favorite-2">
                                            <i class="fas fa-heart"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-end">
                                        <div class="col-12">
                                            <h5 class="card-title">Adidas NMD-R1</h5>
                                            <h4 class="card-price">$ 99</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="product-detail.html" class="card card-banner card-banner--sm">
                                <div class="card-img">
                                    <img src="{{ asset('img/banner/tern.png') }}" alt="Tern 451 Fold" />
                                </div>
                                <h5 class="card-badge">
                                    20% Off
                                </h5>
                                <div class="card-action">
                                    <div class="card-action__item">
                                        <input type="checkbox" id="basket-3">
                                        <label for="basket-3">
                                            <i class="fas fa-shopping-basket"></i>
                                        </label>
                                    </div>
                                    <div class="card-action__item">
                                        <input type="checkbox" id="favorite-3">
                                        <label for="favorite-3">
                                            <i class="fas fa-heart"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-end">
                                        <div class="col-12">
                                            <h5 class="card-title">Tern 451 Fold</h5>
                                            <h4 class="card-price">$ 299</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="last-viewed pt-0" id="last-viewed">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-auto">
                    <div class="section-title">
                        <h3>Last Viewed</h3>
                    </div>
                </div>
                <div class="col-auto ml-auto">
                    <a href="product-list.html" class="see-all" title="See All">See All</a>
                </div>
            </div>
            <div class="row row-5-column">
                <div class="col-lg-2 col-md-6 col-6">
                    <a href="product-detail.html" class="card card-product">
                        <div class="card-img">
                            <img src="{{ asset('img/product/1.png') }}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-1">
                                <label for="basket-product-1">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-1">
                                <label for="favorite-product-1">
                                    <i class="fas fa-heart"></i>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Nintendo Switch - Grey</h5>
                            <h4 class="card-price">US$ 735.00</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <a href="product-detail.html" class="card card-product">
                        <div class="card-img">
                            <img src="{{ asset('img/product/2.png') }}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-2">
                                <label for="basket-product-2">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-2">
                                <label for="favorite-product-2">
                                    <i class="fas fa-heart"></i>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Adidas ZNE Full-Zip Hoodie </h5>
                            <h4 class="card-price">US$ 97.00</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <a href="product-detail.html" class="card card-product">
                        <div class="card-img">
                            <img src="{{ asset('img/product/3.png') }}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-3">
                                <label for="basket-product-3">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-3">
                                <label for="favorite-product-3">
                                    <i class="fas fa-heart"></i>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Adidas POD-250</h5>
                            <h4 class="card-price">US$ 120.00</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <a href="product-detail.html" class="card card-product">
                        <div class="card-img">
                            <img src="{{ asset('img/product/4.png') }}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-4">
                                <label for="basket-product-4">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-4">
                                <label for="favorite-product-4">
                                    <i class="fas fa-heart"></i>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HIMO Folding Bike</h5>
                            <h4 class="card-price">US$ 370.00</h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-6">
                    <a href="product-detail.html" class="card card-product">
                        <div class="card-img">
                            <img src="{{ asset('img/product/4.png') }}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-5">
                                <label for="basket-product-5">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-5">
                                <label for="favorite-product-4">
                                    <i class="fas fa-heart"></i>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HIMO Folding Bike</h5>
                            <h4 class="card-price">US$ 370.00</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news pt-0" id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-md-2 order-2">
                    <div class="section-title">
                        <h3>Blog</h3>
                    </div>
                    <div class="card card-blog">
                        <div class="card-img">
                            <img src="{{ asset('img/blog/1.png') }}" alt="Shopping Tips" />
                        </div>
                        <div class="card-body">
                            <div class="card-meta">
                                <div class="card-meta__item">
                                    <a href="#" class="card-meta__item-category">
                                        Tips
                                    </a>
                                </div>
                                <div class="card-meta__item">
                                    <p class="card-meta__item-date">18 November 2020</p>
                                </div>
                            </div>
                            <h3 class="card-title">
                                <a href="#">5 Shopping Tips for Tourists in Japan</a>
                            </h3>
                            <p class="card-excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>
                            <a href="#" class="card-readmore">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="card card-blog">
                        <div class="card-img">
                            <img src="{{ asset('img/blog/2.png') }}" alt="Shopping Tips" />
                        </div>
                        <div class="card-body">
                            <div class="card-meta">
                                <div class="card-meta__item">
                                    <a href="#" class="card-meta__item-category">
                                        Tips
                                    </a>
                                </div>
                                <div class="card-meta__item">
                                    <p class="card-meta__item-date">8 October 2020</p>
                                </div>
                            </div>
                            <h3 class="card-title">
                                <a href="#">How To Buy Doujinshi From Japan?</a>
                            </h3>
                            <p class="card-excerpt">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>
                            <a href="#" class="card-readmore">Read More <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>

                    <a href="#" class="see-all">
                        See All
                    </a>
                </div>
                <div class="col-lg-6 order-lg-2 order-md-1 order-1">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="section-title">
                                <h3>News</h3>
                            </div>
                        </div>
                        <div class="col-auto ml-auto">
                            <div class="news-nav">
                                <div class="news-nav__item prev">
                                    <i class="fas fa-arrow-left"></i>
                                </div>
                                <div class="news-nav__item next">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-wrapper">
                        <div class="news-slide">
                            @foreach($news as $row)
                            <div class="news-slide__item">
                                <div class="card card-news">
                                    <div class="card-img">
                                        <img src="{{ asset('img/blog/3.png') }}" alt="Gundam" />
                                    </div>
                                    <div class="card-body">
                                        <div class="card-meta">
                                            <div class="card-meta__item">
                                                <a href="#" class="card-meta__item-category">
                                                    News
                                                </a>
                                            </div>
                                            <div class="card-meta__item">
                                                <p class="card-meta__item-date">{{ date("d F Y",strtotime($row->created_at)) }}</p>
                                            </div>
                                        </div>
                                        <h3 class="card-title">
                                            <a href="{{ url("news",$row->id) }}/{{ Str::slug($row->title, '-') }}">{{ $row->title }}</a>
                                        </h3>
                                        <p class="card-excerpt">
                                            {{ $row->content }}
                                        </p>
                                        <a href="{{ url("news",$row->id) }}/{{ Str::slug($row->title, '-') }}" class="card-readmore">Read More <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <a href="{{ url("news") }}" class="see-all">
                        See All
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="how-to pt-0" id="how-to">
        <div class="container">
            <div class="section-title section-title-lg text-center">
                <h3>How To Shop with Okurita</h3>
            </div>
            <img src="{{ asset('img/how-to.png') }}" alt="How To Shop with Okurita" class="w-100" />
        </div>
    </section>
    <section class="why pt-0" id="why">
        <div class="container">
            <div class="section-title section-title-lg text-center">
                <h3>Why Okurita ?</h3>
            </div>
            <div class="row row-5-column">
                <div class="col-lg-2 col-md-6">
                    <div class="card card-feature">
                        <div class="card-img">
                            <img src="{{ asset('img/feature/english-language.png') }}" alt="All in English" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">All in English</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="card card-feature">
                        <div class="card-img">
                            <img src="{{ asset('img/feature/hidden-fee.png') }}" alt="No Hidden Fee" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">No Hidden Fee</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="card card-feature">
                        <div class="card-img">
                            <img src="{{ asset('img/feature/safe.png') }}" alt="Safe Transaction" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Safe Transaction</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="card card-feature">
                        <div class="card-img">
                            <img src="{{ asset('img/feature/payment.png') }}" alt="Easy Payment System" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                Easy payment system<br>
                                paypal, Credit Card
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="card card-feature">
                        <div class="card-img">
                            <img src="{{ asset('img/feature/package.png') }}" alt="Protective Packaging" />
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Protective Packaging</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
