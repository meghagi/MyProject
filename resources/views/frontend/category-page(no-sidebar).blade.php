@extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Collection</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">No sidebar</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#!">
                                            <img src="../assets/images/inner-page/banner/1.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <button class="filter-btn btn"><i class="ri-arrow-left-s-line"></i> Filter
                                    </button>

                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="product-filter-content w-100">
                                                <div class="d-flex align-items-center gap-sm-3 gap-2">
                                                    <select class="form-select">
                                                        <option selected>Ascending Order</option>
                                                        <option value="1">Descending Order</option>
                                                        <option value="2">Low - High Price</option>
                                                        <option value="3">High - Low Price</option>
                                                    </select>

                                                    <select class="form-select">
                                                        <option selected>10 Products</option>
                                                        <option value="1">25 Products</option>
                                                        <option value="2">50 Products</option>
                                                        <option value="3">100 Products</option>
                                                    </select>
                                                </div>


                                                <div class="collection-grid-view">
                                                    <ul>
                                                        <li class="product-2-layout-view grid-icon">
                                                            <img src="../assets/images/inner-page/icon/2.png" alt="sort"
                                                                class=" ">
                                                        </li>
                                                        <li class="product-3-layout-view grid-icon active">
                                                            <img src="../assets/images/inner-page/icon/3.png" alt="sort"
                                                                class=" ">
                                                        </li>
                                                        <li class="product-4-layout-view grid-icon">
                                                            <img src="../assets/images/inner-page/icon/4.png" alt="sort"
                                                                class=" ">
                                                        </li>
                                                        <li class="list-layout-view list-icon">
                                                            <img src="../assets/images/inner-page/icon/list.png"
                                                                alt="sort" class=" ">
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-wrapper-grid">
                                            <div class="row g-3 g-sm-4">
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html">
                                                                    <img src="../assets/images/fashion-1/product/5.jpg"
                                                                        class="w-100 img-fluid blur-up lazyload" alt="">
                                                                </a>
                                                                <div class="rating-label"><i
                                                                        class="ri-star-fill"></i><span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Purple Mini Dress</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/6.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Chic Mini Dress</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/7.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6> Stripped Bodycon Dress</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/8.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Tie and Dye Chiffon Top</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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

                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html">
                                                                    <img src="../assets/images/fashion-1/product/9.jpg"
                                                                        class="img-fluid blur-up lazyload w-100" alt="">
                                                                </a>
                                                                <div class="rating-label"><i
                                                                        class="ri-star-fill"></i><span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Cami Tank Top</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/10.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Scarlet Stunner</h6>
                                                                    <p>Elevate your style with our stunning Mini
                                                                        Dress,
                                                                        the epitome of chic and sophistication.
                                                                        Crafted
                                                                        with precision and designed to turn heads,
                                                                        this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/11.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Chic Crop Top</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/12.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Backless Crop Top</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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

                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html">
                                                                    <img src="../assets/images/fashion-1/product/13.jpg"
                                                                        class="img-fluid blur-up lazyload w-100" alt="">
                                                                </a>
                                                                <div class="rating-label"><i
                                                                        class="ri-star-fill"></i><span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Boyfriend Shirts</h6>
                                                                    <p>Elevate your style with our stunning Mini
                                                                        Dress,
                                                                        the epitome of chic and sophistication.
                                                                        Crafted
                                                                        with precision and designed to turn heads,
                                                                        this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/14.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Cozy Sky Hoodie</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html"><img
                                                                        src="../assets/images/fashion-1/product/15.jpg"
                                                                        class="img-fluid blur-up lazyload w-100"
                                                                        alt=""></a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Classic Jacket</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                                <div class="col-xl-4 col-6 col-grid-box">
                                                    <div class="basic-product theme-product-1">
                                                        <div class="overflow-hidden">
                                                            <div class="img-wrapper">
                                                                <a href="product-page(accordian).html">
                                                                    <img src="../assets/images/fashion-1/product/16.jpg"
                                                                        class="img-fluid blur-up lazyload w-100" alt="">
                                                                </a>
                                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                                    <span>4.5</span>
                                                                </div>
                                                                <div class="cart-info">
                                                                    <a href="#!" title="Add to Wishlist"
                                                                        class="wishlist-icon">
                                                                        <i class="ri-heart-line"></i>
                                                                    </a>
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#addtocart" title="Add to cart">
                                                                        <i class="ri-shopping-cart-line"></i>
                                                                    </button>
                                                                    <a href="#quickView" data-bs-toggle="modal"
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
                                                                                <li
                                                                                    style="background-color: papayawhip;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: burlywood;">
                                                                                </li>
                                                                                <li
                                                                                    style="background-color: gainsboro;">
                                                                                </li>
                                                                            </ul>
                                                                            <span>+2</span>
                                                                        </div>
                                                                    </div>
                                                                    <h6>Versatile Shacket</h6>
                                                                    <p>Elevate your style with our stunning Mini Dress,
                                                                        the epitome of chic and sophistication. Crafted
                                                                        with precision and designed to turn heads, this
                                                                        dress boasts a figure-flattering silhouette
                                                                        that
                                                                        accentuates your curves in all the right
                                                                        places.
                                                                    </p>
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
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <nav>
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#!" aria-label="Previous">
                                                                <span>
                                                                    <i class="ri-arrow-left-s-line"></i>
                                                                </span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item active">
                                                            <a class="page-link" href="#!">1</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#!">2</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#!">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#!" aria-label="Next">
                                                                <span>
                                                                    <i class="ri-arrow-right-s-line"></i>
                                                                </span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
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
    <!-- section End -->

@endsection
   