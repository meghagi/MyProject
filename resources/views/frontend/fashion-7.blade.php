@extends('frontend.layout.main')
@section('main-container')  
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0 height-100 xs-responsive bg-white position-relative">
        <a href="category-page.html" class="home" id="img-bg">
            <img src="../assets/images/fashion-7/full-banner/1.png" alt="" class="img-fluid blur-up lazyload">
        </a>
    </section>
    <!-- Home slider end -->

    <!-- banner section start -->
    <section class="banner-goggles banner-padding bg-white">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-6 ratio_40">
                    <a href="category-page.html" class="collection-banner p-right text-center">
                        <div class="img-part">
                            <img src="../assets/images/fashion-7/banner/1.png" class="img-fluid blur-up lazyload bg-img"
                                alt="">
                        </div>

                    </a>
                </div>
                <div class="col-md-3 ratio3_2 h-auto">
                    <a href="category-page.html" class="collection-banner p-center text-center h-100">
                        <div class="img-part h-100">
                            <img src="../assets/images/fashion-7/banner/2.png" class="img-fluid blur-up lazyload bg-img"
                                alt="">
                        </div>

                    </a>
                </div>
                <div class="col-md-3 ratio3_2 h-auto">
                    <a href="category-page.html" class="collection-banner p-center text-center h-100">
                        <div class="img-part h-100">
                            <img src="../assets/images/fashion-7/banner/3.png" class="img-fluid blur-up lazyload bg-img"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- Product section start -->
    <section class="section-b-space pt-0 ratio_asos bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title1 section-t-space">
                        <h4>special offer</h4>
                        <h2 class="title-inner1">top collection</h2>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="product-para">
                            <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div
                        class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4 no-slider m-product infinite-product">
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!">
                                            <img src="../assets/images/fashion-7/product/1.jpg"
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Glamour Gaze
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Gym Coords Set</h6>
                                            <h4 class="price">$ 15.00 </h4>
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/2.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    VogueVista
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Black Gym Suit</h6>
                                            <h4 class="price">$12.20 </h4>
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/3.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    VogueVista
                                                </a>

                                            </div>
                                            <h6>Classic Gym Suit </h6>
                                            <h4 class="price">$ 20.00
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/4.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Glamour Gaze
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Grey Sport Set</h6>
                                            <h4 class="price">$ 12.30<del> $15.00 </del><span class="discounted-price">
                                                    13% Off
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!">
                                            <img src="../assets/images/fashion-7/product/5.jpg"
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Glamour Gaze
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Fitted Coords Set</h6>
                                            <h4 class="price">$ 12.79<del> $13.00 </del><span class="discounted-price">
                                                    7% Off
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/6.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    VogueVista
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Athleisure Set</h6>
                                            <h4 class="price">$ 20.00<del> $22.00 </del><span class="discounted-price">
                                                    12% Off
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/7.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    VogueVista
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Green Sport Set</h6>
                                            <h4 class="price">$ 18.45 </h4>
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/8.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Glamour Gaze
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Gray Coords Set</h6>
                                            <h4 class="price">$ 16.50 </h4>
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

                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!">
                                            <img src="../assets/images/fashion-7/product/9.jpg"
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Glamour Gaze
                                                </a>

                                            </div>
                                            <h6>Active Muscle Tee </h6>
                                            <h4 class="price">$ 10.00<del> $13.00 </del><span class="discounted-price">
                                                    8% Off
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/10.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    VogueVista
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Black Coords Set</h6>
                                            <h4 class="price">$ 8.00 </h4>
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/11.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    VogueVista
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Fitted Rounded T-Shirt</h6>
                                            <h4 class="price">$ 12.90 </h4>
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
                        <div class="custom-col">
                            <div class="basic-product theme-product-1">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="#!"><img src="../assets/images/fashion-7/product/12.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Glamour Gaze
                                                </a>
                                                <div class="color-panel">
                                                    <ul>
                                                        <li style="background-color: papayawhip;"></li>
                                                        <li style="background-color: burlywood;"></li>
                                                        <li style="background-color: gainsboro;"></li>
                                                    </ul>
                                                    <span>+2</span>
                                                </div>
                                            </div>
                                            <h6>Slim Fit Singlet</h6>
                                            <h4 class="price">$ 7.50 </h4>
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
                <div class="col-12">
                    <div class="load-more-button text-center mt-3"><a href="javascript:void(0)"
                            class="load-product btn btn-outline">load more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product section end -->


    <!-- Parallax banner -->
    <section class="p-0 product-parallax">
        <div class="full-banner custom-space">
            <img src="../assets/images/fashion-7/full-banner/2.png" alt="" class="bg-img blur-up lazyload">
            <div class="ratio_square">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 ms-auto">
                            <div class="theme-card card-border">
                                <div class="offer-slider">
                                    <div>
                                        <div class="media">
                                            <a href="product-page(accordian).html"><img alt=""
                                                    class="img-fluid blur-up lazyload"
                                                    src="../assets/images/fashion-7/product/1.jpg"></a>
                                            <div class="media-body align-self-center">
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i></div>
                                                <a href="product-page(accordian).html">
                                                    <h6>Black T-Shirt</h6>
                                                </a>
                                                <h4>$18.00</h4>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a href="product-page(accordian).html"><img alt=""
                                                    class="img-fluid blur-up lazyload"
                                                    src="../assets/images/fashion-7/product/4.jpg"></a>
                                            <div class="media-body align-self-center">
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i></div>
                                                <a href="product-page(accordian).html">
                                                    <h6>Orange Jacket</h6>
                                                </a>
                                                <h4>$35.00</h4>
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
    <!-- Parallax banner end -->


    <!-- product section start -->
    <section class="ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="product-left-title">
                        <div>
                            <h3>Biggest offer of the sale</h3>
                            <p>Discover the latest trends and styles at Fir-Gear Central, your ultimate destination for
                                contemporary fashion. </p>
                            <a href="category-page.html" class="btn btn-outline btn-sm">view all product</a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <!-- Product slider -->
                    <div class="custom-arrow-3 product-m no-arrow">
                        <div class="basic-product theme-product-1">
                            <div class="overflow-hidden">
                                <div class="img-wrapper">
                                    <a href="#!">
                                        <img src="../assets/images/fashion-7/product/9.jpg"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                class="ri-heart-line"></i></a>
                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                            title="Add to cart"><i class="ri-shopping-cart-line"></i></button>
                                        <a href="#quickView" data-bs-toggle="modal" title="Quick View"><i
                                                class="ri-eye-line"></i></a> <a href="compare.html" title="Compare"><i
                                                class="ri-loop-left-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div>
                                        <div class="brand-w-color">
                                            <a class="product-title" href="product-page(accordian).html">
                                                Glamour Gaze
                                            </a>

                                        </div>
                                        <h6>Active Muscle Tee </h6>
                                        <h4 class="price">$ 10.00<del> $13.00 </del><span class="discounted-price">
                                                8% Off
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

                        <div class="basic-product theme-product-1">
                            <div class="overflow-hidden">
                                <div class="img-wrapper">
                                    <a href="#!"><img src="../assets/images/fashion-7/product/10.jpg"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                    <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                class="ri-heart-line"></i></a>
                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                            title="Add to cart"><i class="ri-shopping-cart-line"></i></button>
                                        <a href="#quickView" data-bs-toggle="modal" title="Quick View"><i
                                                class="ri-eye-line"></i></a> <a href="compare.html" title="Compare"><i
                                                class="ri-loop-left-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div>
                                        <div class="brand-w-color">
                                            <a class="product-title" href="product-page(accordian).html">
                                                VogueVista
                                            </a>
                                            <div class="color-panel">
                                                <ul>
                                                    <li style="background-color: papayawhip;"></li>
                                                    <li style="background-color: burlywood;"></li>
                                                    <li style="background-color: gainsboro;"></li>
                                                </ul>
                                                <span>+2</span>
                                            </div>
                                        </div>
                                        <h6>Black Coords Set</h6>
                                        <h4 class="price">$ 8.00 </h4>
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

                        <div class="basic-product theme-product-1">
                            <div class="overflow-hidden">
                                <div class="img-wrapper">
                                    <a href="#!"><img src="../assets/images/fashion-7/product/11.jpg"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                    <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                class="ri-heart-line"></i></a>
                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                            title="Add to cart"><i class="ri-shopping-cart-line"></i></button>
                                        <a href="#quickView" data-bs-toggle="modal" title="Quick View"><i
                                                class="ri-eye-line"></i></a> <a href="compare.html" title="Compare"><i
                                                class="ri-loop-left-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div>
                                        <div class="brand-w-color">
                                            <a class="product-title" href="product-page(accordian).html">
                                                VogueVista
                                            </a>
                                            <div class="color-panel">
                                                <ul>
                                                    <li style="background-color: papayawhip;"></li>
                                                    <li style="background-color: burlywood;"></li>
                                                    <li style="background-color: gainsboro;"></li>
                                                </ul>
                                                <span>+2</span>
                                            </div>
                                        </div>
                                        <h6>Fitted Rounded T-Shirt</h6>
                                        <h4 class="price">$ 12.90 </h4>
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

                        <div class="basic-product theme-product-1">
                            <div class="overflow-hidden">
                                <div class="img-wrapper">
                                    <a href="#!"><img src="../assets/images/fashion-7/product/12.jpg"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                    <div class="rating-label"><i class="ri-star-fill"></i> <span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                class="ri-heart-line"></i></a>
                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                            title="Add to cart"><i class="ri-shopping-cart-line"></i></button>
                                        <a href="#quickView" data-bs-toggle="modal" title="Quick View"><i
                                                class="ri-eye-line"></i></a> <a href="compare.html" title="Compare"><i
                                                class="ri-loop-left-line"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div>
                                        <div class="brand-w-color">
                                            <a class="product-title" href="product-page(accordian).html">
                                                Glamour Gaze
                                            </a>
                                            <div class="color-panel">
                                                <ul>
                                                    <li style="background-color: papayawhip;"></li>
                                                    <li style="background-color: burlywood;"></li>
                                                    <li style="background-color: gainsboro;"></li>
                                                </ul>
                                                <span>+2</span>
                                            </div>
                                        </div>
                                        <h6>Slim Fit Singlet</h6>
                                        <h4 class="price">$ 7.50 </h4>
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
                    <!-- Product slider end -->
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- collection banner -->
    <section class="pb-0 ratio2_1">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part">
                                <img src="../assets/images/fashion-7/banner/4.png"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-right text-center">
                            <div class="img-part">
                                <img src="../assets/images/fashion-7/banner/5.png"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!--  logo section -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-6 no-arrow">
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/1.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/2.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/3.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/4.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/5.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/6.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/7.png" alt=""></a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!"><img src="../assets/images/logos/8.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  logo section end-->


    <!-- newsletter section start -->
    <div>
        <div class="container border-section border-bottom-0">
            <section class="">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subscribe">
                            <div>
                                <h4>KNOW IT ALL FIRST!</h4>
                                <p>Never Miss Anything From Multikart By Signing Up To Our Newsletter. </p>
                            </div>
                        </div>
                        <form class="form-inline subscribe-form">
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter your email">
                            </div>
                            <button type="submit" class="btn btn-solid">subscribe</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- newsletter section end -->


    <!-- Quick-view modal popup start-->
    <div class="modal fade theme-modal-2 quick-view-modal" id="quickView">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="ri-close-line"></i>
                </button>
                <div class="modal-body">
                    <div class="wrap-modal-slider">
                        <div class="row g-sm-4 g-3">
                            <div class="col-lg-6">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="view-main-slider">
                                            <div>
                                                <img src="../assets/images/fashion-1/product/1.jpg" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div>
                                                <img src="../assets/images/fashion-1/product/1-1.jpg" class="img-fluid"
                                                    alt="">
                                            </div>
                                            <div>
                                                <img src="../assets/images/fashion-1/product/1-2.jpg" class="img-fluid"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="view-thumbnail-slider no-arrow">
                                            <div>
                                                <div class="slider-image">
                                                    <img src="../assets/images/fashion-1/product/1.jpg"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="slider-image">
                                                    <img src="../assets/images/fashion-1/product/1-1.jpg"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="slider-image">
                                                    <img src="../assets/images/fashion-1/product/1-2.jpg"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="right-sidebar-modal">
                                    <a class="name" href="product-page(accordian).html">Boyfriend Shirts</a>
                                    <div class="product-rating">
                                        <ul class="rating-list">
                                            <li>
                                                <i class="ri-star-line"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-line"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-line"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-line"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-line"></i>
                                            </li>
                                        </ul>
                                        <div class="divider">|</div>
                                        <a href="#!">0 Review</a>
                                    </div>
                                    <div class="price-text">
                                        <h3>
                                            <span class="fw-normal">MRP:</span>
                                            $10.56
                                            <del>$12.00</del>
                                            <span class="discounted-price">12% off</span>
                                        </h3>
                                        <span class="text">Inclusive all the text</span>
                                    </div>
                                    <p class="description-text">Boyfriend shirts are oversized, relaxed-fit shirts
                                        originally inspired by men's fashion. They offer a comfortable and effortlessly
                                        chic look, often characterized by a loose silhouette and rolled-up sleeves.
                                        Perfect for a casual yet stylish vibe</p>
                                    <div class="qty-box">
                                        <div class="input-group qty-container">
                                            <button class="btn qty-btn-minus">
                                                <i class="ri-arrow-left-s-line"></i>
                                            </button>
                                            <input type="number" readonly="" name="qty" class="form-control input-qty"
                                                value="1">
                                            <button class="btn qty-btn-plus">
                                                <i class="ri-arrow-right-s-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-buy-btn-group">
                                        <button
                                            class="btn btn-animation btn-solid buy-button hover-solid scroll-button">
                                            <span class="d-inline-block ring-animation">
                                                <i class="ri-shopping-cart-line me-1"></i>
                                            </span>
                                            Add To Cart
                                        </button>
                                        <button class="btn btn-solid buy-button">Buy Now</button>
                                    </div>

                                    <div class="buy-box compare-box">
                                        <a href="#!">
                                            <i class="ri-heart-line"></i>
                                            <span>Add To Wishlist</span>
                                        </a>
                                        <a href="#!">
                                            <i class="ri-refresh-line"></i>
                                            <span>Add To Compare</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->


    <!-- footer section start -->
   @endsection