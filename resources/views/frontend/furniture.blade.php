 <!-- header end -->
 @extends('frontend.layout.main')
    @section('main-container')  

    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
            <a href="category-page.html">
                <img src="../assets/images/furniture-1/full-banner/1.png" alt="" class="img-fluid blur-up lazyload">
            </a>

            <a href="category-page.html">
                <img src="../assets/images/furniture-1/full-banner/2.png" alt="" class="img-fluid blur-up lazyload">
            </a>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- collection banner -->
    <section class="banner-furniture ratio_45 banner-padding banner-section">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="category-page.html" class="collection-banner">
                        <img src="../assets/images/furniture-1/banner/1.png" alt="" class="img-fluid blur-up lazyload">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="category-page.html" class="collection-banner">
                        <img src="../assets/images/furniture-1/banner/2.png" alt="" class="img-fluid blur-up lazyload">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="category-page.html" class="collection-banner">
                        <img src="../assets/images/furniture-1/banner/3.png" alt="" class="img-fluid blur-up lazyload">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- Tab product -->
    <div class="title1 section-t-space">
        <h4>exclusive products</h4>
        <h2 class="title-inner1">special products</h2>
    </div>
    <section class="section-b-space pt-0 ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current"><a href="tab-4.html">New Products</a></li>
                            <li><a href="tab-5.html">Featured Products</a></li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/1.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Herit Chair
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 20.90<del> $25.00 </del> </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/2.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    woodan chair
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 22.50<del> $26.00 </del> </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/3.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Armchair Full Upholstery Steel
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 16.70 </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/4.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Shorebird
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 18.60 </h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/3.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Armchair Full Upholstery Steel
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 16.70 </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/4.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Shorebird
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 18.60 </h4>

                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/1.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    Herit Chair
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 20.90<del> $25.00 </del> </h4>

                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-4">
                                            <div class="img-wrapper">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/furniture-1/product/2.jpg"
                                                        class="img-fluid blur-up lazyload w-100" alt=""></a>
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
                                                <a class="product-title" href="product-page(accordian).html">
                                                    woodan chair
                                                </a>
                                                <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                    <div class="rating"><i class="ri-star-fill"></i> <i
                                                            class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                    </div>
                                                    <span>(10)</span>
                                                </div>
                                                <h4 class="price">$ 22.50<del> $26.00 </del> </h4>
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


    <!-- Parallax banner -->
    <section class="p-0">
        <a href="category-page.html">
            <img src="../assets/images/furniture-1/full-banner/2.png" alt="" class="img-fluid blur-up lazyload">
        </a>
    </section>
    <!-- Parallax banner end -->


    <!-- blog section -->
    <section class="blog blog-2 section-b-space ratio3_2 slick-default-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title1">
                        <h4>recent story</h4>
                        <h2 class="title-inner1">latest blog</h2>
                    </div>
                    <div class="slide-3 no-arrow">
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div>
                                        <img alt="" src="../assets/images/furniture-1/blog/1.png"
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div><img alt="" src="../assets/images/furniture-1/blog/2.png"
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div>
                                        <img alt="" src="../assets/images/furniture-1/blog/3.png"
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div>
                                        <img alt="" src="../assets/images/furniture-1/blog/2.png"
                                            class="img-fluid blur-up lazyload bg-img">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,</p>
                                </a>
                                <h6>by: John Dio , 2 Comment</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end-->
@endsection

    <!-- footer -->
