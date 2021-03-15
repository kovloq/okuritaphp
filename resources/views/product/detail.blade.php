@extends('layouts.app')

@section("head")

<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/cloudzoom.css") }}">
<link rel="stylesheet" type="text/css" media="all" href="{{ asset("css/thumbelina.css") }}">
<script type="text/javascript" src="{{ asset("js/cloudzoom.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/thumbelina.js") }}"></script>
<script>
	$(document).ready(function(){
		CloudZoom.quickStart();
		$('.slider-thumbnail').Thumbelina({
            orientation:'vertical',         // Use vertical mode (default horizontal).
            $bwdBut:$('.slider-thumbnail .left'),     // Selector to top button.
            $fwdBut:$('.slider-thumbnail .right')   // Selector to bottom button.
        });
	})
</script>
@endsection

@section('content')
<div class="page page--product-detail bg-ornament">
    <section class="product-overview py-5" id="product-overview">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-2">
                    <div class="slider-thumbnail">
                        <ul>
                            <li>
                                <img class='cloudzoom-gallery cloudzoom-gallery-active' src="{{ asset("img/product/detail/thumbnail-1.png")}}" data-cloudzoom="useZoom:'.cloudzoom-1', image:'{{ asset("img/product/detail/main-1.png")}}'" alt="Thumbnail Products" />
                            </li>
                            <li>
                                <img class='cloudzoom-gallery' src="{{ asset("img/product/detail/thumbnail-2.png")}}" data-cloudzoom="useZoom:'.cloudzoom-1', image:'{{ asset("img/product/detail/main-2.jpg")}}'" alt="Thumbnail Products" />
                            </li>
                            <li>
                                <img class='cloudzoom-gallery' src="{{ asset("img/product/detail/thumbnail-3.png")}}" data-cloudzoom="useZoom:'.cloudzoom-1', image:'{{ asset("img/product/detail/main-3.jpg")}}'" alt="Thumbnail Products" />
                            </li>
                            <li>
                                <img class='cloudzoom-gallery' src="{{ asset("img/product/detail/thumbnail-4.png")}}" data-cloudzoom="useZoom:'.cloudzoom-1', image:'{{ asset("img/product/detail/main-4.jpg")}}'" alt="Thumbnail Products" />
                            </li>
                            <li>
                                <img class='cloudzoom-gallery' src="{{ asset("img/product/detail/thumbnail-5.png")}}" data-cloudzoom="useZoom:'.cloudzoom-1', image:'{{ asset("img/product/detail/main-5.jpg")}}'" alt="Thumbnail Products" />
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-md-11 col-10">
                    <div class="slider-zoom mb-3">
                        <img class="cloudzoom cloudzoom-1" alt="Detail Zoom thumbs image" id="zoom1" src="{{ asset("img/product/detail/main-1.png")}}" data-cloudzoom='zoomPosition:"inside", autoInside: true, zoomOffsetX:0'>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="product-list.html">Rakuten</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="product-list.html">Shoes</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="product-list.html">Sneakers</a>
                            </li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-md-11 col-10">
                            <h1 class="product-title">ADIDAS ULTRA BOOST CG3038 TRIPLE BLACK </h1>
                        </div>
                        <div class="col-md-1 col-2 text-right">
                            <a href="#" class="product-share">
                                <i class="fas fa-share-alt-square"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row align-items-center mb-25px">
                        <div class="col-auto">
                            <input type="hidden" class="rating" value="4" data-filled="fas fa-star" data-empty="fas fa-star" data-readonly />
                        </div>
                        <div class="col-auto">
                            <p class="product-meta">
                                127 View
                            </p>
                        </div>
                        <div class="col-auto">
                            <p class="product-meta">
                                <i class="fas fa-shopping-bag text-primary"></i> 116 Order
                            </p>
                        </div>
                    </div>
                    <h2 class="product-price">
                        US$ 276.00
                    </h2>
                    <form action="">
                        <div class="product-vendor">
                            <div class="product-vendor__item">
                                <input type="radio" name="vendor" id="vendor-1" checked>
                                <label for="vendor-1">
                                    <img src="{{ asset("img/logo/marketplace/rakuten.png")}}" alt="Rakuten" />
                                </label>
                            </div>
                            <div class="product-vendor__item">
                                <input type="radio" name="vendor" id="vendor-2">
                                <label for="vendor-2">
                                    <img src="{{ asset("img/logo/marketplace/amazon.png")}}" alt="Amazon" />
                                </label>
                            </div>
                            <div class="product-vendor__item">
                                <input type="radio" name="vendor" id="vendor-3">
                                <label for="vendor-3">
                                    <img src="{{ asset("img/logo/marketplace/3.png")}}" alt="Rakuten" />
                                </label>
                            </div>
                            <div class="product-vendor__item">
                                <input type="radio" name="vendor" id="vendor-4">
                                <label for="vendor-4">
                                    <img src="{{ asset("img/logo/marketplace/yahoo.png")}}" alt="Yahoo" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-4">
                                <p class="product-meta mb-10px">Quantity</p>
                                <div class="product-qty">
                                    <button type="button" class="btn btn-qty">-</button>
                                    <input type="number" min="1" class="form-control" value="1">
                                    <button type="button" class="btn btn-qty">+</button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-8">
                                <p class="product-meta mb-10px">Select Size</p>
                                <div class="row">
                                    <div class="col-lg-auto col-md-3 col-auto">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="size" id="size-39" value="39" checked>
                                                <label class="form-check-label" for="size-39">
                                                    39
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-3 col-auto">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="size" id="size-40" value="40">
                                                <label class="form-check-label" for="size-40">
                                                    40
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-3 col-auto">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="size" id="size-41" value="41">
                                                <label class="form-check-label" for="size-41">
                                                    41
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-3 col-auto">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="size" id="size-42" value="42">
                                                <label class="form-check-label" for="size-42">
                                                    42
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-3 col-auto">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="size" id="size-43" value="43">
                                                <label class="form-check-label" for="size-43">
                                                    43
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-3 col-auto">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="size" id="size-44" value="44">
                                                <label class="form-check-label" for="size-44">
                                                    44
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto col-md-3 col-auto">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="size" id="size-45" value="45">
                                                <label class="form-check-label" for="size-45">
                                                    45
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-action">
                            <div class="row">
                                <div class="col-md-auto">
                                    <button type="submit" class="btn btn-primary text-uppercase">
                                        Buy Now
                                    </button>
                                </div>
                                <div class="col-md-auto">
                                    <button type="button" class="btn btn-primary text-uppercase">
                                        Add to Cart
                                    </button>
                                </div>
                                <div class="col-md-auto">
                                    <a href="#" class="btn btn-primary text-uppercase">
                                        View on Yahoo! Auction
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="product-description py-0" id="product-description">
        <div class="container border-bottom pb-5">
            <p>
                商品説明<br>
                ■ ブランド説明1948年設立のドイツのスポーツメーカー。靴職人の息子であるアドルフ・ダスラーが1920年「ダスラー兄弟商会」を設立したのが始まり。<br>
                ■ アイテム説明【 Y - 3 】 アディダスと山本耀司氏とのコラボレーションブランド。 革新的なスポーツウェアとして注目を集めています。 ファッション性が高く未来的なシル   	     エットでかなりのインパクトを与えてくれるY-3からピュアブースト スニーカーの入荷です。 軽量で履きやすく、ソールには衝撃吸収性と反発性にとても優れたBOOST(	     ブースト)を使用しているので、デザイン性はもちろん機能性ともに優た一足です。 お色はブラックです。<br>
                ■ アイテム詳細・MADE IN CHINA ・型番：CP9888 ・カラー：CBLACK/CBLACK/CBLACK<br>
                ■ サイズ感こちらは平均的なスニーカーの普段履きのサイズにてジャストでご着用頂けるサイズ感になります。<br>
                幅広・甲高の方の場合、0.5cmアップでのご着用をお勧めします。
            </p>
        </div>
    </section>
    <section class="product-related py-5" id="product-related">
        <div class="container border-bottom pb-5">
            <div class="row align-items-end">
                <div class="col-auto">
                    <div class="section-title">
                        <h3>Same Product</h3>
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
                            <img src="{{ asset("img/product/1.png")}}" alt="Product List" />
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
                            <img src="{{ asset("img/product/2.png")}}" alt="Product List" />
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
                            <img src="{{ asset("img/product/3.png")}}" alt="Product List" />
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
                            <img src="{{ asset("img/product/4.png")}}" alt="Product List" />
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
                            <img src="{{ asset("img/product/4.png")}}" alt="Product List" />
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
    <section class="product-recommended pt-0" id="product-recommended">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-auto">
                    <div class="section-title">
                        <h3>Recommended For You</h3>
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
                            <img src="{{ asset("img/product/1.png")}}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-1-recommended">
                                <label for="basket-product-1-recommended">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-1-recommended">
                                <label for="favorite-product-1-recommended">
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
                            <img src="{{ asset("img/product/2.png")}}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-2-recommended">
                                <label for="basket-product-2-recommended">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-2-recommended">
                                <label for="favorite-product-2-recommended">
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
                            <img src="{{ asset("img/product/3.png")}}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-3-recommended">
                                <label for="basket-product-3-recommended">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-3-recommended">
                                <label for="favorite-product-3-recommended">
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
                            <img src="{{ asset("img/product/4.png")}}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-4-recommended">
                                <label for="basket-product-4-recommended">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-4-recommended">
                                <label for="favorite-product-4-recommended">
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
                            <img src="{{ asset("img/product/4.png")}}" alt="Product List" />
                        </div>
                        <div class="card-action">
                            <div class="card-action__item">
                                <input type="checkbox" id="basket-product-5-recommended">
                                <label for="basket-product-5-recommended">
                                    <i class="fas fa-shopping-basket"></i>
                                </label>
                            </div>
                            <div class="card-action__item">
                                <input type="checkbox" id="favorite-product-5-recommended">
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
</div>
@endsection