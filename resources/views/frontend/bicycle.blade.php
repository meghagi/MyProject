<!-- header end -->
@extends('frontend.layout.main')
@section('main-container') 

    <!-- Home slider -->
    <section class="p-0 position-relative height-85 bg_cls">
        <a href="category-page.html" class="home">
            <img src="../assets/images/bicycle/full-banner/1.png" alt="" class="img-fluid blur-up lazyload">
        </a>
    </section>
    <!-- Hom slider end -->

    <!-- search part -->
    <section class="bg_cls section-b-space">
        <div class="search-section absolute-banner">
            <div class="container">
                <div class="absolute-bg">
                    <h4 class="">find your cycle</h4>
                    <form class="row align-items-center">
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-0">
                                <select class="form-control">
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-0">
                                <select class="form-control">
                                    <option>Age</option>
                                    <option>5-8 Year</option>
                                    <option>8-14 Year</option>
                                    <option>14+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-12">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Height" tabindex="0">
                            </div>
                        </div>
                        <div class="col-md-3 col-12 search-col">
                            <div class="search-btn">
                                <a href="#!" class="btn btn-solid d-block" tabindex="0">search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- search part -->


    <!-- product section start -->
    <section class="section-b-space pt-0 position-relative overflow-hidden bg_cls">
        <div class="animated-wheel d-md-block d-none">
            <img src="../assets/images/bicycle/wheel.png" class="img-fluid" alt="">
        </div>
        <div class="title1">
            <h4>recent story</h4>
            <h2 class="title-inner1">trending products</h2>
        </div>

        <div class="container">
            <div class="g-3 g-md-4 row row-cols-2 row-cols-lg-3 row-cols-xl-4">
                <div>
                    <div class="basic-product theme-product-2">
                        <div class="product-detail mt-0">
                            <a class="product-title" href="product-page(accordian).html">
                                BaranRide Bike
                            </a>
                            <div class="rating"><i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i
                                    class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                            </div>
                            <ul class="details">
                                <li>1 Item</li>
                            </ul>
                            <div class="add-wish">
                                <a href="#!" title="Add to Wishlist" tabindex="0"><i class="ri-heart-line"></i></a>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <a href="product-page(accordian).html"><img src="../assets/images/bicycle/product/1.jpg"
                                    class="img-fluid blur-up lazyload" alt=""></a>
                            <div class="quick-view-part">
                                <a href="#quickView" data-bs-toggle="modal" title="Quick View" tabindex="0">
                                    <i class="ri-search-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="bottom-detail">
                            <div>
                                <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7% Off </span>
                                </h4>
                            </div>
                        </div>
                        <ul class="cart-detail">
                            <li>
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"
                                    tabindex="0"><i class="ri-shopping-cart-line"></i>add to cart</button>
                            </li>
                            <li>
                                <a href="compare.html" title="Compare" tabindex="0">
                                    <i class="ri-loop-left-line"></i>compare</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="basic-product theme-product-2">
                        <div class="product-detail mt-0">
                            <a class="product-title" href="product-page(accordian).html">
                                Adult Mountain Bike
                            </a>
                            <div class="rating"><i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i
                                    class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                            </div>
                            <ul class="details">
                                <li>1 Item</li>
                            </ul>
                            <div class="add-wish">
                                <a href="#!" title="Add to Wishlist" tabindex="0"><i class="ri-heart-line"></i></a>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <a href="product-page(accordian).html"><img src="../assets/images/bicycle/product/2.jpg"
                                    class="img-fluid blur-up lazyload" alt=""></a>
                            <div class="quick-view-part">
                                <a href="#quickView" data-bs-toggle="modal" title="Quick View" tabindex="0">
                                    <i class="ri-search-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="bottom-detail">
                            <div>
                                <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7% Off
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <ul class="cart-detail">
                            <li>
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"
                                    tabindex="0"><i class="ri-shopping-cart-line"></i>add to cart</button>
                            </li>
                            <li>
                                <a href="compare.html" title="Compare" tabindex="0">
                                    <i class="ri-loop-left-line"></i>compare</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="basic-product theme-product-2">
                        <div class="product-detail mt-0">
                            <a class="product-title" href="product-page(accordian).html">
                                Meridian Bicycle
                            </a>
                            <div class="rating"><i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i
                                    class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                            </div>
                            <ul class="details">
                                <li>1 Item</li>
                            </ul>
                            <div class="add-wish">
                                <a href="#!" title="Add to Wishlist" tabindex="0"><i class="ri-heart-line"></i></a>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <a href="product-page(accordian).html"><img src="../assets/images/bicycle/product/3.jpg"
                                    class="img-fluid blur-up lazyload" alt=""></a>
                            <div class="quick-view-part">
                                <a href="#quickView" data-bs-toggle="modal" title="Quick View" tabindex="0">
                                    <i class="ri-search-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="bottom-detail">
                            <div>
                                <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7% Off
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <ul class="cart-detail">
                            <li>
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"
                                    tabindex="0"><i class="ri-shopping-cart-line"></i>add to cart</button>
                            </li>
                            <li>
                                <a href="compare.html" title="Compare" tabindex="0">
                                    <i class="ri-loop-left-line"></i>compare</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="basic-product theme-product-2">
                        <div class="product-detail mt-0">
                            <a class="product-title" href="product-page(accordian).html">
                                Guillot Bicycle </a>
                            <div class="rating"><i class="ri-star-fill"></i> <i class="ri-star-fill"></i> <i
                                    class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                            </div>
                            <ul class="details">
                                <li>1 Item</li>
                            </ul>
                            <div class="add-wish">
                                <a href="#!" title="Add to Wishlist" tabindex="0"><i class="ri-heart-line"></i></a>
                            </div>
                        </div>
                        <div class="img-wrapper">
                            <a href="product-page(accordian).html"><img src="../assets/images/bicycle/product/4.jpg"
                                    class="img-fluid blur-up lazyload" alt=""></a>
                            <div class="quick-view-part">
                                <a href="#quickView" data-bs-toggle="modal" title="Quick View" tabindex="0">
                                    <i class="ri-search-line"></i>
                                </a>
                            </div>
                        </div>
                        <div class="bottom-detail">
                            <div>
                                <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7% Off
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <ul class="cart-detail">
                            <li>
                                <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"
                                    tabindex="0"><i class="ri-shopping-cart-line"></i>add to cart</button>
                            </li>
                            <li>
                                <a href="compare.html" title="Compare" tabindex="0">
                                    <i class="ri-loop-left-line"></i>compare</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- section start -->
    <section class="p-0 overflow-cls center-object-banner">
        <div class="full-banner feature-banner">
            <img src="../assets/images/bicycle/trending-product.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="title1">
                            <h4>recent story</h4>
                            <h2 class="title-inner1">product of the year</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <ul class="feature-object">
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <h4>Cycle Saddle/Seat</h4>
                                            <p>Soft cushion PU saddle for best riding experience</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../assets/images/bicycle/parts/1.jpg"
                                        alt="Generic placeholder image">
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <h4>Cycling Helmet</h4>
                                            <p>Material - PVC, PC & EPS foam</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../assets/images/bicycle/parts/2.jpg"
                                        alt="Generic placeholder image">
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <h4>Gloves Black</h4>
                                            <p>Abrasion-resistant faux leather</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../assets/images/bicycle/parts/3.jpg"
                                        alt="Generic placeholder image">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6 offset-lg-4">
                        <ul class="feature-object-right">
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="../assets/images/bicycle/parts/4.jpg"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div>
                                            <h4>Brake Levers</h4>
                                            <p>6 level adjustment design - AllExtreme clutch</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="../assets/images/bicycle/parts/5.jpg"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div>
                                            <h4>Derailleur Shifter</h4>
                                            <p>Speed: 6/7s, colour: as shown in the picture</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="../assets/images/bicycle/parts/6.jpg"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div>
                                            <h4>Bike Cassette</h4>
                                            <p>hard wearing resistance to corrosion</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="center-img">
                <img src="../assets/images/bicycle/cycle.png" alt="" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- tab section start -->
    <section class="ratio2_3 bg_cls">
        <div class="title1">
            <h4>recent story</h4>
            <h2 class="title-inner1">trending products</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current"><a href="tab-4.html">Man cycle</a></li>
                            <li><a href="tab-5.html">Women cycle</a></li>
                        </ul>

                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-lg-4">
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    BaranRide Bike
                                                </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/1.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Adult Mountain Bike
                                                </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/2.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Meridian Bicycle
                                                </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/3.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Guillot Bicycle </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/4.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-lg-4">
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Meridian Bicycle
                                                </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/3.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Guillot Bicycle </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/4.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    BaranRide Bike
                                                </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/1.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-2">
                                            <div class="product-detail mt-0">
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Adult Mountain Bike
                                                </a>
                                                <div class="rating"><i class="ri-star-fill"></i> <i
                                                        class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                </div>
                                                <ul class="details">
                                                    <li>1 Item</li>
                                                </ul>
                                                <div class="add-wish">
                                                    <a href="#!" title="Add to Wishlist" tabindex="0"><i
                                                            class="ri-heart-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/bicycle/product/2.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="quick-view-part">
                                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <div>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>
                                            </div>
                                            <ul class="cart-detail">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart" tabindex="0"><i
                                                            class="ri-shopping-cart-line"></i>add to cart</button>
                                                </li>
                                                <li>
                                                    <a href="compare.html" title="Compare" tabindex="0">
                                                        <i class="ri-loop-left-line"></i>compare</a>
                                                </li>
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
    </section>
    <!-- tab section start -->


    <!-- collection banner -->
    <section class="pb-0 ratio2_1 bg_cls">
        <div class="container-fluid">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="../assets/images/bicycle/banner/1.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 30%</h4>
                                    <h2 class="font-smaller">feature</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="../assets/images/bicycle/banner/2.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>save 60%</h4>
                                    <h2 class="font-smaller">newest</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- instagram section -->
    <section class="instagram ratio_square bg_cls">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-borderless"># instagram</h2>
                    <div class="slide-5 no-arrow slick-instagram">
                        <div>
                            <a href="#!">
                                <div class="instagram-box"><img src="../assets/images/bicycle/instagram/1.jpg"
                                        class="bg-img" alt="img">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"><img src="../assets/images/bicycle/instagram/2.jpg"
                                        alt="Avatar" class="bg-img" style="width:100%">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"><img src="../assets/images/bicycle/instagram/3.jpg"
                                        alt="Avatar" class="bg-img" style="width:100%">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"><img src="../assets/images/bicycle/instagram/4.jpg"
                                        alt="Avatar" class="bg-img" style="width:100%">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"><img src="../assets/images/bicycle/instagram/5.jpg"
                                        alt="Avatar" class="bg-img" style="width:100%">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box"><img src="../assets/images/bicycle/instagram/6.jpg"
                                        alt="Avatar" class="bg-img" style="width:100%">
                                    <div class="overlay"><i class="ri-instagram-fill"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->


    <!--  logo section -->
    <section class="section-b-space bg_cls">
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


    <!-- footer section start -->
    @endsection