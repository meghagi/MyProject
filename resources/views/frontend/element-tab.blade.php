
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>element</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item">element tab</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->

    <div class="title1 section-t-space">
        <h2 class="title-inner1">without slider</h2>
    </div>
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current"><a href="tab-4.html">DRESSES</a></li>
                            <li><a href="tab-5.html">TOPS</a></li>
                            <li><a href="tab-6.html">WINTER WEAR</a></li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(image-swatch).html">
                                                        <img src="../assets/images/fashion-1/product/5.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart">
                                                            <i class="ri-shopping-cart-line"></i>
                                                        </button>
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                    <a href="product-page(image-swatch).html">
                                                        <img src="../assets/images/fashion-1/product/9.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart">
                                                            <i class="ri-shopping-cart-line"></i>
                                                        </button>
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <h6>Cami Tank Top</h6>
                                                        <h4 class="price">$ 1.80<del> $2.60 </del><span
                                                                class="discounted-price"> 4% Off
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
                                                            src="../assets/images/fashion-1/product/10.jpg"
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <h6>Scarlet Stunner</h6>
                                                        <h4 class="price">$ 1.50 </h4>
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
                                                            src="../assets/images/fashion-1/product/11.jpg"
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <h6>Chic Crop Top</h6>
                                                        <h4 class="price">$ 5.60<del> $6.80 </del><span
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
                                                            src="../assets/images/fashion-1/product/12.jpg"
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <h6>Backless Crop Top</h6>
                                                        <h4 class="price">$ 3.27 </h4>
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
                            <div id="tab-6" class="tab-content">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(image-swatch).html">
                                                        <img src="../assets/images/fashion-1/product/13.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                            <i class="ri-heart-line"></i>
                                                        </a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart">
                                                            <i class="ri-shopping-cart-line"></i>
                                                        </button>
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
                                                    <a href="product-page(image-swatch).html">
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
                                                        <a href="#!" data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
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
            </div>
        </div>
    </section>


    <div class="title1">
        <h2 class="title-inner1">with slider</h2>
    </div>
    <section class="section-b-space ratio_asos pt-0">
        <div class="container">
            <div class="product-4 product-m no-arrow">
                <div class="basic-product">
                    <div class="img-wrapper">
                        <a href="product-page(accordian).html">
                            <img src="../assets/images/fashion-1/product/5.jpg" class="img-fluid blur-up lazyload"
                                alt="">
                        </a>
                        <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                        </div>
                        <div class="cart-info">
                            <ul class="hover-action">
                                <li>
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div>
                            <div class="brand-w-color">
                                <a class="product-title" href="product-page(accordian).html">
                                    Glamour Gaze
                                </a>

                            </div>
                            <h6>Purple Mini Dress</h6>
                            <h4 class="price">$ 4.34<del> $5.00 </del><span class="discounted-price">
                                    5% Off
                                </span>
                            </h4>
                        </div>
                        <ul class="general-variant color">
                            <li class="active" style="background-color: papayawhip;">
                            </li>
                            <li class="" style="background-color: cadetblue;">
                            </li>
                            <li style="background-color: gainsboro;">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="basic-product">
                    <div class="img-wrapper">
                        <a href="product-page(accordian).html"><img src="../assets/images/fashion-1/product/6.jpg"
                                class="img-fluid blur-up lazyload" alt=""></a>
                        <div class="rating-label"><i class="fa fa-star"></i>
                            <span>4.5</span>
                        </div>
                        <div class="cart-info">
                            <ul class="hover-action">
                                <li>
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div>
                            <div class="brand-w-color">
                                <a class="product-title" href="product-page(accordian).html">
                                    Couture Edge
                                </a>

                            </div>
                            <h6>Chic Mini Dress</h6>
                            <h4 class="price">$ 3.40 </h4>
                        </div>

                    </div>
                </div>

                <div class="basic-product">
                    <div class="img-wrapper">
                        <a href="product-page(accordian).html"><img src="../assets/images/fashion-1/product/7.jpg"
                                class="img-fluid blur-up lazyload" alt=""></a>
                        <div class="rating-label"><i class="fa fa-star"></i>
                            <span>4.5</span>
                        </div>
                        <div class="cart-info">
                            <ul class="hover-action">
                                <li>
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div>
                            <div class="brand-w-color">
                                <a class="product-title" href="product-page(accordian).html">
                                    Urban Chic
                                </a>

                            </div>
                            <h6> Stripped Bodycon Dress</h6>
                            <h4 class="price">$ 2.10</h4>
                        </div>

                    </div>
                </div>

                <div class="basic-product">
                    <div class="img-wrapper">
                        <a href="product-page(accordian).html"><img src="../assets/images/fashion-1/product/8.jpg"
                                class="img-fluid blur-up lazyload" alt=""></a>
                        <div class="rating-label"><i class="fa fa-star"></i>
                            <span>4.5</span>
                        </div>
                        <div class="cart-info">
                            <ul class="hover-action">
                                <li>
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div>
                            <div class="brand-w-color">
                                <a class="product-title" href="product-page(accordian).html">
                                    Couture Edge
                                </a>

                            </div>
                            <h6>Tie and Dye Chiffon Top</h6>
                            <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price">
                                    7% Off
                                </span>
                            </h4>
                        </div>

                    </div>
                </div>

                <div class="basic-product">
                    <div class="img-wrapper">
                        <a href="product-page(accordian).html"><img src="../assets/images/fashion-1/product/11.jpg"
                                class="img-fluid blur-up lazyload" alt=""></a>
                        <div class="rating-label"><i class="fa fa-star"></i>
                            <span>4.5</span>
                        </div>
                        <div class="cart-info">
                            <ul class="hover-action">
                                <li>
                                    <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </button>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html" title="Compare">
                                        <i class="ri-loop-left-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div>
                            <div class="brand-w-color">
                                <a class="product-title" href="product-page(accordian).html">
                                    Glamour Gaze
                                </a>

                            </div>
                            <h6>Chic Crop Top</h6>
                            <h4 class="price">$ 5.60 </h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="ri-arrow-up-double-line"></i>
        </div>
    </div>


    <!-- Footer Section Start -->
@endsection