@extends('frontend.layout.main')
    @section('main-container')  
    <!-- header end -->


    <!-- Home slider -->
    <section class="p-0 snow-slider">
        <div class="slide-1 home-slider">
            <div>
                <a href="category-page.html">
                    <img src="../assets/images/christmas/home-banner/1.html" class="img-fluid" alt="">
                </a>
            </div>
            <div>
                <a href="category-page.html">
                    <img src="../assets/images/christmas/home-banner/2.html" class="img-fluid" alt="">
                </a>
            </div>
            <div>
                <a href="category-page.html">
                    <img src="../assets/images/christmas/home-banner/3.html" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- collection banner -->
    <section class="pb-0 ratio_45">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner christmas-banner p-left text-start">
                            <div class="img-part">
                                <img src="../assets/images/christmas/sub-banner1.jpg"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>Christmas</h4>
                                    <h2>gift box</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="category-page.html">
                        <div class="collection-banner christmas-banner p-right text-end">
                            <div class="img-part">
                                <img src="../assets/images/christmas/sub-banner2.jpg"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                            </div>
                            <div class="contain-banner">
                                <div>
                                    <h4>go christmas</h4>
                                    <h2>chocolate</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- title-->
    <div class="title1  section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner1">top collection</h2>
    </div>
    <!-- title end -->


    <!-- Product slider -->
    <section class="section-b-space pt-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product-5 product-christmas product-m no-arrow">
                        <div>
                            <div class="basic-product">
                                <div class="img-wrapper">
                                    <a href="product-page(accordian).html">
                                        <img src="../assets/images/christmas/product/1.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <ul class="hover-action">
                                            <li>
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart">
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
                                                Jolly Junction
                                            </a>
                                        </div>
                                        <h6>Festive Wishes Cushion</h6>
                                        <h4 class="price">$ 4.34<del> $5.00 </del><span class="discounted-price"> 5%
                                                Off
                                            </span>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="img-wrapper">
                                    <a href="product-page(accordian).html"><img
                                            src="../assets/images/christmas/product/2.png"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                    <div class="rating-label"><i class="fa fa-star"></i>
                                        <span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <ul class="hover-action">
                                            <li>
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart">
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
                                                Santa's Emporium </a>

                                        </div>
                                        <h6>Jade Bonsai Jute Pot</h6>
                                        <h4 class="price">$ 3.40 </h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="img-wrapper">
                                    <a href="product-page(accordian).html"><img
                                            src="../assets/images/christmas/product/3.png"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                    <div class="rating-label"><i class="fa fa-star"></i>
                                        <span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <ul class="hover-action">
                                            <li>
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart">
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
                                                Holiday Haven </a>

                                        </div>
                                        <h6> Plum Dry Cake</h6>
                                        <h4 class="price">$ 2.10</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="img-wrapper">
                                    <a href="product-page(accordian).html"><img
                                            src="../assets/images/christmas/product/4.png"
                                            class="img-fluid blur-up lazyload" alt=""></a>
                                    <div class="rating-label"><i class="fa fa-star"></i>
                                        <span>4.5</span>
                                    </div>
                                    <div class="cart-info">
                                        <ul class="hover-action">
                                            <li>
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart">
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
                                                Jolly Junction
                                            </a>

                                        </div>
                                        <h6>Jade Plant Pot</h6>
                                        <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7%
                                                Off
                                            </span>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/christmas/product/9.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart">
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
                                            <h6>Zen Harmony Bamboo Duo</h6>
                                            <h4 class="price">$ 3.27 </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="basic-product">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img src="../assets/images/christmas/product/5.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart">
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
                                                    Holiday Haven </a>

                                            </div>
                                            <h6>Rebel Shades</h6>
                                            <h4 class="price">$ 1.80<del> $2.60 </del><span class="discounted-price">
                                                    4% Off
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
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/christmas/product/6.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart">
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
                                                    Santa's Emporium
                                                </a>

                                            </div>
                                            <h6>Teddy & Choco Bliss Basket</h6>
                                            <h4 class="price">$ 1.50 </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/christmas/product/7.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart">
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
                                                    Jolly Junction </a>

                                            </div>
                                            <h6>Personalized Xmas Bottle</h6>
                                            <h4 class="price">$ 5.60<del> $6.80 </del><span class="discounted-price">
                                                    5% Off
                                                </span>
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/christmas/product/8.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart">
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
                                            <h6>Floral Box Chocolate</h6>
                                            <h4 class="price">$ 3.27 </h4>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="basic-product">
                                <div class="overflow-hidden">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/christmas/product/10.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="rating-label"><i class="fa fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                        title="Add to cart">
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
                                                    Santa's Emporium
                                                </a>
                                            </div>
                                            <h6>Zen Sanctuary Terrarium</h6>
                                            <h4 class="price">$ 3.27 </h4>
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


    <!-- Parallax banner -->
    <section class="p-0 overflow-cls">
        <div class="full-banner text-center p-center">
            <img src="../assets/images/christmas/parallax/1.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain christmas-contain">
                            <h3>New Collection Of Awesome Gift</h3>
                            <h2>End Of The Year <span>SALE</span></h2>
                            <h4>Get <span>50%</span> Extra Off</h4>
                            <a href="#!" class="btn btn-solid" tabindex="0">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="santa-img">
                <img src="../assets/images/christmas/santa.png" class="img-fluid" alt="">
            </div>
            <div class="decor">
                <img src="../assets/images/christmas/parall.png" class="img-fluid" alt="">
            </div>
        </div>
    </section>
    <!-- Parallax banner end -->


    <!-- Tab product -->
    <div class="title1 section-t-space">
        <h4>exclusive products</h4>
        <h2 class="title-inner1">special products</h2>
    </div>
    <section class="section-b-space product-christmas pt-0">
        <div class="container">
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
                                <div class="product-4 product-m no-arrow">
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html">
                                                    <img src="../assets/images/christmas/product/1.png"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Jolly Junction
                                                        </a>
                                                    </div>
                                                    <h6>Festive Wishes Cushion</h6>
                                                    <h4 class="price">$ 4.34<del> $5.00 </del><span
                                                            class="discounted-price"> 5% Off
                                                        </span>
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/christmas/product/2.png"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Santa's Emporium </a>

                                                    </div>
                                                    <h6>Jade Bonsai Jute Pot</h6>
                                                    <h4 class="price">$ 3.40 </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/christmas/product/3.png"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Holiday Haven </a>

                                                    </div>
                                                    <h6> Plum Dry Cake</h6>
                                                    <h4 class="price">$ 2.10</h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/christmas/product/4.png"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Jolly Junction
                                                        </a>

                                                    </div>
                                                    <h6>Jade Plant Pot</h6>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/9.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Glamour Gaze
                                                            </a>
                                                        </div>
                                                        <h6>Zen Harmony Bamboo Duo</h6>
                                                        <h4 class="price">$ 3.27 </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-5" class="tab-content">
                                <div class="product-4 product-m no-arrow">
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html">
                                                        <img src="../assets/images/christmas/product/5.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Holiday Haven </a>

                                                        </div>
                                                        <h6>Rebel Shades</h6>
                                                        <h4 class="price">$ 1.80<del> $2.60 </del><span
                                                                class="discounted-price"> 4% Off
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
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/6.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Santa's Emporium
                                                            </a>

                                                        </div>
                                                        <h6>Teddy & Choco Bliss Basket</h6>
                                                        <h4 class="price">$ 1.50 </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/7.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Jolly Junction </a>

                                                        </div>
                                                        <h6>Personalized Xmas Bottle</h6>
                                                        <h4 class="price">$ 5.60<del> $6.80 </del><span
                                                                class="discounted-price"> 5% Off
                                                            </span>
                                                        </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/8.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Glamour Gaze
                                                            </a>
                                                        </div>
                                                        <h6>Floral Box Chocolate</h6>
                                                        <h4 class="price">$ 3.27 </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/10.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Santa's Emporium
                                                            </a>
                                                        </div>
                                                        <h6>Zen Sanctuary Terrarium</h6>
                                                        <h4 class="price">$ 3.27 </h4>
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
        </div>
    </section>
    <!-- Tab product end -->


    <!-- section start -->
    <section class="p-0 overflow-cls">
        <div class="full-banner feature-banner">
            <img src="../assets/images/christmas/parallax/2.jpg" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="feature-text">
                            <h2>SEND GIFT YOUR LOVED ONE</h2>
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
                                            <h4>Flower</h4>
                                            <p>Fashion Has Been Creating Well-Designed</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../assets/images/christmas/f-p/1.png"
                                        alt="Generic placeholder image">
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <h4>chocolate</h4>
                                            <p>Fashion Has Been Creating Well-Designed</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../assets/images/christmas/f-p/2.png"
                                        alt="Generic placeholder image">
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <h4>gift cards</h4>
                                            <p>Fashion Has Been Creating Well-Designed</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="../assets/images/christmas/f-p/3.png"
                                        alt="Generic placeholder image">
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-sm-6 offset-lg-4">
                        <ul class="feature-object-right">
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="../assets/images/christmas/f-p/4.png"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div>
                                            <h4>photo frame</h4>
                                            <p>Fashion Has Been Creating Well-Designed</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="../assets/images/christmas/f-p/5.png"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div>
                                            <h4>watches</h4>
                                            <p>Fashion Has Been Creating Well-Designed</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="img-fluid" src="../assets/images/christmas/f-p/6.png"
                                        alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div>
                                            <h4>plants</h4>
                                            <p>Fashion Has Been Creating Well-Designed</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="center-img">
                <img src="../assets/images/christmas/bg1.png" alt="" class="img-fluid">
            </div>
            <div class="banner-decor">
                <div class="left-img">
                    <img src="../assets/images/christmas/decor.png" class="img-fluid" alt="">
                </div>
                <div class="right-img">
                    <img src="../assets/images/christmas/decor.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- Tab product -->
    <div class="title1 section-t-space  margin-add">
        <h2 class="title-inner1">top category</h2>
    </div>
    <section class="section-b-space pt-0 product-christmas">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current">
                                <a href="tab-7.html">christmas</a>
                            </li>
                            <li>
                                <a href="tab-8.html">flower</a>
                            </li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-7" class="tab-content active default">
                                <div class="product-4 product-m no-arrow">
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html">
                                                    <img src="../assets/images/christmas/product/1.png"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </a>
                                                <div class="rating-label"><i class="ri-star-fill"></i><span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Jolly Junction
                                                        </a>
                                                    </div>
                                                    <h6>Festive Wishes Cushion</h6>
                                                    <h4 class="price">$ 4.34<del> $5.00 </del><span
                                                            class="discounted-price"> 5% Off
                                                        </span>
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/christmas/product/2.png"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Santa's Emporium </a>

                                                    </div>
                                                    <h6>Jade Bonsai Jute Pot</h6>
                                                    <h4 class="price">$ 3.40 </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/christmas/product/3.png"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Holiday Haven </a>

                                                    </div>
                                                    <h6> Plum Dry Cake</h6>
                                                    <h4 class="price">$ 2.10</h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/christmas/product/4.png"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                                <div class="rating-label"><i class="fa fa-star"></i>
                                                    <span>4.5</span>
                                                </div>
                                                <div class="cart-info">
                                                    <ul class="hover-action">
                                                        <li>
                                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                                title="Add to cart">
                                                                <i class="ri-shopping-cart-line"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" title="Add to Wishlist">
                                                                <i class="ri-heart-line"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#quickView" data-bs-toggle="modal"
                                                                title="Quick View">
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
                                                            Jolly Junction
                                                        </a>

                                                    </div>
                                                    <h6>Jade Plant Pot</h6>
                                                    <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                            class="discounted-price"> 7% Off
                                                        </span>
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/9.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Glamour Gaze
                                                            </a>
                                                        </div>
                                                        <h6>Zen Harmony Bamboo Duo</h6>
                                                        <h4 class="price">$ 3.27 </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-8" class="tab-content">
                                <div class="product-4 product-m no-arrow">
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html">
                                                        <img src="../assets/images/christmas/product/5.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Holiday Haven </a>

                                                        </div>
                                                        <h6>Rebel Shades</h6>
                                                        <h4 class="price">$ 1.80<del> $2.60 </del><span
                                                                class="discounted-price"> 4% Off
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
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/6.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Santa's Emporium
                                                            </a>

                                                        </div>
                                                        <h6>Teddy & Choco Bliss Basket</h6>
                                                        <h4 class="price">$ 1.50 </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/7.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Jolly Junction </a>

                                                        </div>
                                                        <h6>Personalized Xmas Bottle</h6>
                                                        <h4 class="price">$ 5.60<del> $6.80 </del><span
                                                                class="discounted-price"> 5% Off
                                                            </span>
                                                        </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/8.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Glamour Gaze
                                                            </a>
                                                        </div>
                                                        <h6>Floral Box Chocolate</h6>
                                                        <h4 class="price">$ 3.27 </h4>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/christmas/product/10.png"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <ul class="hover-action">
                                                            <li>
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart">
                                                                    <i class="ri-shopping-cart-line"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" title="Add to Wishlist">
                                                                    <i class="ri-heart-line"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#quickView" data-bs-toggle="modal"
                                                                    title="Quick View">
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
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Santa's Emporium
                                                            </a>
                                                        </div>
                                                        <h6>Zen Sanctuary Terrarium</h6>
                                                        <h4 class="price">$ 3.27 </h4>
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
        </div>
    </section>
    <!-- Tab product end -->


    <!-- blog start -->
    <section class="blog-section grey-bg section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="title2 text-start">
                        <h2 class="title-inner1">from the blog</h2>
                    </div>
                    <div class="slide-3 no-arrow">
                        <div>
                            <div class="blog-wrap">
                                <a href="#!">
                                    <div class="blog-image">
                                        <img src="../assets/images/christmas/blog/2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="blog-details text-start p-0">
                                        <h4>25 January 2018</h4>
                                        <p>How to Host a Magical Christmas Party: Tips and Ideas</p>
                                        <h6>by: John Dio , 2 Comment</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="blog-wrap">
                                <a href="#!">
                                    <div class="blog-image">
                                        <img src="../assets/images/christmas/blog/6.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="blog-details text-start p-0">
                                        <h4>25 January 2018</h4>
                                        <p>10 Creative DIY Christmas Decorations to Spruce Up Your Home </p>
                                        <h6>by: John Dio , 2 Comment</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="blog-wrap">
                                <a href="#!">
                                    <div class="blog-image">
                                        <img src="../assets/images/christmas/blog/4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="blog-details text-start p-0">
                                        <h4>25 January 2018</h4>
                                        <p>How to Host a Magical Christmas Party: Tips and Ideas </p>
                                        <h6>by: John Dio , 2 Comment</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="blog-wrap">
                                <a href="#!">
                                    <div class="blog-image">
                                        <img src="../assets/images/christmas/blog/7.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="blog-details text-start p-0">
                                        <h4>25 January 2018</h4>
                                        <p>Christmas Eve Traditions: Creating Magical Memories </p>
                                        <h6>by: John Dio , 2 Comment</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="blog-wrap">
                                <a href="#!">
                                    <div class="blog-image">
                                        <img src="../assets/images/christmas/blog/4.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="blog-details text-start p-0">
                                        <h4>25 January 2018</h4>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit, </p>
                                        <h6>by: John Dio , 2 Comment</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="review-box">
                        <div class="slide-1">
                            <div>
                                <div class="review-content">
                                    <div class="avtar">
                                        <img src="../assets/images/christmas/testimonial/1.jpg" alt="">
                                    </div>
                                    <h5>Mark Junco</h5>
                                    <h6>designer</h6>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alterationdummy text .</p>
                                </div>
                            </div>
                            <div>
                                <div class="review-content">
                                    <div class="avtar">
                                        <img src="../assets/images/christmas/testimonial/1.jpg" alt="">
                                    </div>
                                    <h5>Mark Junco</h5>
                                    <h6>designer</h6>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alterationdummy text .</p>
                                </div>
                            </div>
                        </div>
                        <div class="santa-img">
                            <img src="../assets/images/christmas/testimonial/santa.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->


    <!-- instagram section -->
    <section class="instagram">
        <div class="insta-decor">
            <img src="../assets/images/christmas/insta.png" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-0">
                    <h2 class="title-borderless"># instagram</h2>
                    <div class="slide-7 no-arrow slick-instagram">
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/2.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/3.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/4.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/9.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/6.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/7.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/8.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/9.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/christmas/slider/2.jpg" alt="img">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
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
    <section class="section-b-space logo-section">
        <div class="logo-decor">
            <img src="../assets/images/christmas/footer-decor.png" alt="" class="img-fluid">
        </div>
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


    <!-- footer -->
    @endsection