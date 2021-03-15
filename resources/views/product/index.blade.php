@extends('layouts.app')

@section('content')
<div class="page page--product bg-ornament bg-ornament--sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <aside class="aside-product">
                        <div class="aside-product__brand">
                            <img src="./assets/img/logo/marketplace/rakuten.png" alt="Rakuten" />
                        </div>
                        <div class="aside-product__category">
                            <h6 class="aside-product__category-title">
                                <a data-toggle="collapse" href="#categoryList" role="button" aria-expanded="true">
                                    Categories
                                </a>
                            </h6>
                            <div id="categoryList" class="collapse show">
                                <ul>
                                    <li>
                                        <a href="#">Computers</a>
                                    </li>
                                    <li>
                                        <a href="#">Electronics, AV & Camera</a>
                                    </li>
                                    <li>
                                        <a href="#">Music</a>
                                    </li>
                                    <li>
                                        <a href="#">Books & Magazines</a>
                                    </li>
                                    <li>
                                        <a href="#">Movies</a>
                                    </li>
                                    <li>
                                        <a href="#">Toys & Games</a>
                                    </li>
                                    <li>
                                        <a href="#">Hobbies & Crafts</a>
                                    </li>
                                    <li>
                                        <a href="#">Antiques</a>
                                    </li>
                                    <li>
                                        <a href="#">Sports & Recreation</a>
                                    </li>
                                    <li>
                                        <a href="#">Automobiles</a>
                                    </li>
                                    <li>
                                        <a href="#">Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#">Accessories & Watches</a>
                                    </li>
                                    <li>
                                        <a href="#">Health & Beauty</a>
                                    </li>
                                    <li>
                                        <a href="#">Food & Drinks</a>
                                    </li>
                                    <li>
                                        <a href="#">Home & Interior</a>
                                    </li>
                                    <li>
                                        <a href="#">Pets</a>
                                    </li>
                                    <li>
                                        <a href="#">Business & Office</a>
                                    </li>
                                    <li>
                                        <a href="#">Flowers & Gardening</a>
                                    </li>
                                    <li>
                                        <a href="#">Tickets</a>
                                    </li>
                                    <li>
                                        <a href="#">Baby</a>
                                    </li>
                                    <li>
                                        <a href="#">Celebrity Goods</a>
                                    </li>
                                    <li>
                                        <a href="#">Anime & Manga</a>
                                    </li>
                                    <li>
                                        <a href="#">Real Estate</a>
                                    </li>
                                    <li>
                                        <a href="#">Charity Auction Goods</a>
                                    </li>
                                    <li>
                                        <a href="#">Other</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-10 col-md-9">
                    <section class="hero" id="hero">
                        <div class="hero-banner">
                            <img src="./assets/img/product/banner.png" alt="Hero Banner" />
                        </div>
                    </section>
                    <section class="product pt-5" id="product">
                        <div class="row align-items-end">
                            <div class="col-lg-auto col-md-auto col-6">
                                <div class="section-title">
                                    <h3>Product List</h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 ml-auto">
                                <form>
                                    <div class="form-group">
                                        <select name="filter" id="filter" class="form-select form-select--filter">
                                            <option>Sort by price</option>
                                            <option>Sort by recents</option>
                                            <option>Sort by popular</option>
                                            <option>Sort by reviews</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/1.png" alt="Product List" />
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/2.png" alt="Product List" />
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/3.png" alt="Product List" />
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/4.png" alt="Product List" />
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/5.png" alt="Product List" />
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
                                            <label for="favorite-product-5">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Taffware Humidifier Aromatic</h5>
                                        <h4 class="card-price">US$ 21.00</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/6.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-6">
                                            <label for="basket-product-6">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-6">
                                            <label for="favorite-product-6">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">OWN Audio Bluetooth USB </h5>
                                        <h4 class="card-price">US$ 97.00</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/7.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-7">
                                            <label for="basket-product-7">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-7">
                                            <label for="favorite-product-7">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Avelio Glove Red-Black</h5>
                                        <h4 class="card-price">US$ 12.00</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/8.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-8">
                                            <label for="basket-product-8">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-8">
                                            <label for="favorite-product-8">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">DC Superman Universal Student</h5>
                                        <h4 class="card-price">US$ 87.00</h4>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/1.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-9">
                                            <label for="basket-product-9">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-9">
                                            <label for="favorite-product-9">
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/2.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-10">
                                            <label for="basket-product-10">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-10">
                                            <label for="favorite-product-10">
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/3.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-11">
                                            <label for="basket-product-11">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-11">
                                            <label for="favorite-product-11">
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/4.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-12">
                                            <label for="basket-product-12">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-12">
                                            <label for="favorite-product-12">
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
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/5.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-13">
                                            <label for="basket-product-13">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-13">
                                            <label for="favorite-product-13">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Taffware Humidifier Aromatic</h5>
                                        <h4 class="card-price">US$ 21.00</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/6.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-14">
                                            <label for="basket-product-14">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-14">
                                            <label for="favorite-product-14">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">OWN Audio Bluetooth USB </h5>
                                        <h4 class="card-price">US$ 97.00</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/7.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-15">
                                            <label for="basket-product-15">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-15">
                                            <label for="favorite-product-15">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Avelio Glove Red-Black</h5>
                                        <h4 class="card-price">US$ 12.00</h4>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                                <a href="product-detail.html" class="card card-product">
                                    <div class="card-img">
                                        <img src="./assets/img/product/8.png" alt="Product List" />
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action__item">
                                            <input type="checkbox" id="basket-product-16">
                                            <label for="basket-product-16">
                                                <i class="fas fa-shopping-basket"></i>
                                            </label>
                                        </div>
                                        <div class="card-action__item">
                                            <input type="checkbox" id="favorite-product-16">
                                            <label for="favorite-product-16">
                                                <i class="fas fa-heart"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">DC Superman Universal Student</h5>
                                        <h4 class="card-price">US$ 87.00</h4>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="loading text-center pt-5">
                            <img src="./assets/img/loading.png" alt="Loading Content" class="fa-spin img-fluid" />
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection