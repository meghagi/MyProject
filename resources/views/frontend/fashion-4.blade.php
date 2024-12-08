 
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- Home slider -->
    <section class="small-slider pt-0 home-fashion mt-0">
        <div class="container container-lg">
            <a href="category-page.html" class="home">
                <img src="../assets/images/fashion-4/full-banner/1.png" alt="" class="img-fluid blur-up lazyload">
            </a>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- banner section start -->
    <section class="banner-goggles banner-padding ratio2_1  banner-section">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="category-page.html" class="collection-banner">
                        <img src="../assets/images/fashion-4/banner/1.png" class="img-fluid blur-up lazyload" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="category-page.html" class="collection-banner">
                        <img src="../assets/images/fashion-4/banner/2.png" class="img-fluid blur-up lazyload" alt="">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="category-page.html" class="collection-banner">
                        <img src="../assets/images/fashion-4/banner/3.png" class="img-fluid blur-up lazyload" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- slider and product -->
    <section class="container container-lg">
        <div class="row">
            <div class="col-12">
                <div class="title1 wo-border">
                    <h4>recent story</h4>
                    <h2 class="title-inner1 font-cormorant">trending products</h2>
                </div>
            </div>
            <div class="col-xl-2">
                <!-- category start -->
                <header class="left-header left-header-relative">
                    <div class="metro">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav class="sidebar-unset">
                                        <div class="d-xl-none d-block" onclick="closeNav()">
                                            <div class="sidebar-back text-start">
                                                <i class="fa fa-angle-left pe-2"></i> Back
                                            </div>
                                        </div>
                                        <div class="left-sidebar_center">
                                            <ul id="sub-menu" class="sm pixelstrap  sm-vertical ">
                                                <li><a href="#!">What's New</a></li>
                                                <li><a href="#!">Trending now</a></li>
                                                <li><a href="#!">On sale</a></li>
                                                <li><a href="#!">Today's Deal</a></li>
                                                <li><a href="#!">Clothing</a></li>
                                                <li><a href="#!">Accessories</a></li>
                                                <li><a href="#!">lingerie</a></li>
                                                <li><a href="#!">Swimwear</a></li>
                                                <li><a href="#!">Jewellery</a></li>
                                                <li><a href="#!">beauty</a></li>
                                                <li><a href="#!">Home Decor</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- category end -->
            </div>
            <div class="col-xl-10">
                <!-- Product section -->
                <div class=" ratio_asos">
                    <div class="container p-0">
                        <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                            <div>
                                <div class="basic-product theme-product-1">
                                    <div class="overflow-hidden">
                                        <div class="img-wrapper">
                                            <a href="product-page(accordian).html">
                                                <img src="../assets/images/fashion-1/product/5.jpg"
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
                                                        Couture Edge
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
                                                <h6>Purple Mini Dress</h6>
                                                <h4 class="price">$ 4.34<del> $5.00 </del><span
                                                        class="discounted-price">
                                                        5% Off
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
                                                    src="../assets/images/fashion-1/product/6.jpg"
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
                                                <h6>Chic Mini Dress</h6>
                                                <h4 class="price">$ 3.40 </h4>
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
                                                    src="../assets/images/fashion-1/product/7.jpg"
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
                                                    <a class="product-title" href="product-page(accordian).html">
                                                        Urban Chic
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
                                                <h6> Stripped Bodycon Dress</h6>
                                                <h4 class="price">$ 2.10</h4>
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
                                                    src="../assets/images/fashion-1/product/8.jpg"
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
                                                <h6>Tie and Dye Chiffon Top</h6>
                                                <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                        class="discounted-price">
                                                        7% Off
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
                                            <a href="product-page(accordian).html">
                                                <img src="../assets/images/fashion-1/product/13.jpg"
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
                                                <h6>Boyfriend Shirts</h6>
                                                <h4 class="price">$ 2.79<del> $3.00 </del><span
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
                            <div>
                                <div class="basic-product theme-product-1">
                                    <div class="overflow-hidden">
                                        <div class="img-wrapper">
                                            <a href="product-page(accordian).html"><img
                                                    src="../assets/images/fashion-1/product/14.jpg"
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
                                                    <a class="product-title" href="product-page(accordian).html">
                                                        Couture Edge
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
                                                <h6>Cozy Sky Hoodie</h6>
                                                <h4 class="price">$ 3.15 </h4>
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
                                                    src="../assets/images/fashion-1/product/15.jpg"
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
                                                    <a class="product-title" href="product-page(accordian).html">
                                                        Urban Chic
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
                                                <h6>Classic Jacket</h6>
                                                <h4 class="price">$ 3.80 </h4>
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
                                            <a href="product-page(accordian).html">
                                                <img src="../assets/images/fashion-1/product/16.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
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
                                                    <a class="product-title" href="product-page(accordian).html">
                                                        Couture Edge
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
                                                <h6>Versatile Shacket</h6>
                                                <h4 class="price"> $3.00
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
    </section>
    <!-- slider and product -->


    <!-- banner section -->
    <section>
        <div class="container-lg container ">
            <a href="category-page.html" class="full-banner pt-0 pb-0 custom-space p-right text-end">
                <img src="../assets/images/fashion-4/full-banner/2.png" alt="" class="img-fluid blur-up lazyload">
            </a>
        </div>
    </section>
    <!-- banner section end -->


    <!-- newsletter section start -->
    <div>
        <div class="container">
            <section class="">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="subscribe">
                            <div>
                                <h4>KNOW IT ALL FIRST!</h4>
                                <p>Never Miss Anything From Multikart By Signing Up To Our
                                    Newsletter. </p>
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


    <!-- footer -->
   @endsection