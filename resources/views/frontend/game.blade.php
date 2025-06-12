@extends('frontend.layout.main')
@section('main-container')  
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0 effect-cls ">
        <a href="category-page.html" class="home">
            <img src="../assets/images/game/full-banner/1.html" alt="" class="img-fluid blur-up lazyload">
        </a>
    </section>
    <!-- Home slider end -->


    <!-- category section -->
    <section class="pb-0  banner-text-white ratio_45">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-left text-start">
                            <div class="img-part">
                                <img src="../assets/images/game/banner/1.png" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="../assets/images/game/banner/2.png" class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->


    <!-- Product tab slider -->
    <div class="title1  section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner1">top collection</h2>
    </div>
    <section class="game-product ratio_asos pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's
                            standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current">
                                <a href="tab-4.html">New Products</a>
                            </li>
                            <li>
                                <a href="tab-5.html">Featured Products</a>
                            </li>
                        </ul>

                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html">
                                                        <img src="../assets/images/game/product/1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Shadow Sentinels </a>

                                                        </div>

                                                        <h4 class="price mt-2">$ 4.34<del> $5.00 </del><span
                                                                class="discounted-price"> 5% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/game/product/2.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Solstice Quest
                                                            </a>

                                                        </div>

                                                        <h4 class="price mt-2">$ 3.40 </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/game/product/3.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Aliens Colonial Marine </a>

                                                        </div>
                                                        <h4 class="price mt-2">$ 2.10</h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/game/product/4.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Metro Exodus </a>

                                                        </div>
                                                        <h4 class="price mt-2">$ 2.79<del> $3.00 </del><span
                                                                class="discounted-price"> 7% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html">
                                                        <img src="../assets/images/game/product/5.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Galactic Voyager </a>

                                                        </div>
                                                        <h4 class="price mt-2">$ 4.34<del> $5.00 </del><span
                                                                class="discounted-price"> 5% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/game/product/6.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Elder Scroll legends
                                                            </a>

                                                        </div>
                                                        <h4 class="price mt-2">$ 3.40 </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/game/product/7.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Dragon Dogma </a>
                                                        </div>
                                                        <h4 class="price mt-2">$ 2.10</h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/game/product/8.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button>
                                                        <a href="#quickView" data-bs-toggle="modal"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title product-title1"
                                                                href="product-page(accordian).html">
                                                                Mech Battle Arena </a>

                                                        </div>
                                                        <h4 class="price mt-2">$ 2.79<del> $3.00 </del><span
                                                                class="discounted-price"> 7% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->


    <!-- timer banner start -->
    <section class="game-banner">
        <div class="container">
            <div class="row banner-timer">
                <div class="col-md-6">
                    <div class="banner-text">
                        <h2>Save <span>30% off</span> Digital Watch</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="timer-box">
                        <div class="timer">
                            <p id="demo"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- timer banner end-->


    <!-- product slider -->
    <section class="section-b-space">
        <div class="container">
            <div class="row multiple-slider">
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">new products</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/9.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6>Battle Royale</h6>
                                        </a>
                                        <h4>$7.00</h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/10.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6>Battlefield 4</h6>
                                        </a>
                                        <h4>$12.00 <del>$15.00</del></h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">feature product</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/11.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6>Battalfield 3</h6>
                                        </a>
                                        <h4>50.00<del>$60.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/12.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6>Groundhog Day</h6>
                                        </a>
                                        <h4>$10.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">best seller</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/13.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6>BioShock Series</h6>
                                        </a>
                                        <h4>$3.50 <del>$5.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/14.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6>Shadowed Horizon</h6>
                                        </a>
                                        <h4>$1.00</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="theme-card">
                        <h5 class="title-border">best seller</h5>
                        <div class="offer-slider slide-1">
                            <div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/15.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6>Aliens Colonial</h6>
                                        </a>
                                        <h4>$3.50 <del>$5.00</del></h4>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="product-page(accordian).html"><img class="img-fluid blur-up lazyload"
                                            src="../assets/images/game/product/16.png" alt=""></a>
                                    <div class="media-body align-self-center">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <a href="product-page(accordian).html">
                                            <h6> Echo Trails </h6>
                                        </a>
                                        <h4>$1.00</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product slider end -->


    <!-- Parallax section start -->
    <section class="p-0 game-parallax effect-cls ">
        <div class="full-banner parallax text-center p-center text-center">
            <img src="../assets/images/game/full-banner/2.html" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>2024</h2>
                            <h3>xbox games</h3>
                            <h4>special offer</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parallax section end -->


    <!-- Paragraph-->
    <div class="title1  section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner1">top collection</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Paragraph end -->


    <!-- Product slider -->
    <section class="game-product pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-slider-5 product-m no-arrow">
                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img src="../assets/images/game/product/1.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Shadow Sentinels </a>

                                            </div>

                                            <h4 class="price mt-2">$ 4.34<del> $5.00 </del><span
                                                    class="discounted-price"> 5% Off
                                                </span>
                                            </h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/game/product/2.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Solstice Quest
                                                </a>

                                            </div>

                                            <h4 class="price mt-2">$ 3.40 </h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/game/product/3.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Aliens Colonial Marine </a>

                                            </div>
                                            <h4 class="price mt-2">$ 2.10</h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/game/product/4.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Metro Exodus </a>

                                            </div>
                                            <h4 class="price mt-2">$ 2.79<del> $3.00 </del><span
                                                    class="discounted-price"> 7% Off
                                                </span>
                                            </h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img src="../assets/images/game/product/5.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Galactic Voyager </a>

                                            </div>
                                            <h4 class="price mt-2">$ 4.34<del> $5.00 </del><span
                                                    class="discounted-price"> 5% Off
                                                </span>
                                            </h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/game/product/6.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Elder Scroll legends
                                                </a>

                                            </div>
                                            <h4 class="price mt-2">$ 3.40 </h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/game/product/7.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Dragon Dogma </a>

                                            </div>
                                            <h4 class="price mt-2">$ 2.10</h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/game/product/8.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div>
                                            <div class="brand-w-color">
                                                <a class="product-title product-title1"
                                                    href="product-page(accordian).html">
                                                    Mech Battle Arena </a>

                                            </div>
                                            <h4 class="price mt-2">$ 2.79<del> $3.00 </del><span
                                                    class="discounted-price"> 7% Off
                                                </span>
                                            </h4>
                                        </div>
                                        <ul class="offer-panel">
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                            <li><span class="offer-icon"><i class="ri-discount-percent-fill"></i></span>
                                                Limited Time Offer: 5% off</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->


    <!--  logo section -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-6 no-arrow">
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/5.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/6.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/7.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/8.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  logo section end-->
@endsection

    <!-- footer -->
   