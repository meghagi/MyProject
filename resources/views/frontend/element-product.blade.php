
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Element Product Box</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Element Product Box</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-b-space container element-page">
        <div class="row">
            <div class="left-sidebar col-lg-3">
                <a href="#!" class="btn btn-solid btn-sm d-lg-none d-inline-block mb-4 element-btn"><i
                        class="ri-bar-chart-horizontal-line me-2"></i> all elements</a>
                <div class="sticky-sidebar">
                    <div class="collection-mobile-back">
                        <span class="filter-back"><i class="fa fa-angle-left"></i> back</span>
                    </div>
                    <ul class="nav list-unstyled nav-sidebar doc-nav">
                        <li class="nav-item direct">
                            <a class="nav-link" href="elements.html">Buttons</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-title.html">Title</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-breadcrumb.html">breadcrumb</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-header.html">header</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link active" href="element-product.html">product box/style</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-category.html">category</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-footer.html">footer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 content product-element component-col">
                <div class="card">
                    <div class="card-body ratio_asos">
                        <div class="g-3 g-sm-4 row row-cols-2 row-cols-md-3">
                            <div class="col">
                                <div class="basic-product theme-product-1">
                                    <div class="overflow-hidden">
                                        <div class="img-wrapper">
                                            <div class="ribbon">
                                                <span>Exclusive</span>
                                            </div>
                                            <a href="product-page(image-swatch).html">
                                                <img src="../assets/images/fashion-1/product/1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <div class="rating-label">
                                                <i class="ri-star-fill"></i>
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
                                                        class="discounted-price">7% Off</span></h4>
                                            </div>
                                            <ul class="offer-panel">
                                                <li>
                                                    <span class="offer-icon">
                                                        <i class="ri-discount-percent-fill"></i>
                                                    </span>
                                                    Limited Time Offer: 5% off
                                                </li>
                                                <li>
                                                    <span class="offer-icon">
                                                        <i class="ri-discount-percent-fill"></i>
                                                    </span>
                                                    Limited Time Offer: 5% off
                                                </li>
                                                <li>
                                                    <span class="offer-icon">
                                                        <i class="ri-discount-percent-fill"></i>
                                                    </span>
                                                    Limited Time Offer: 5% off
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-1">
                                    <div class="overflow-hidden">
                                        <div class="img-wrapper">
                                            <a href="product-page(accordian).html"><img
                                                    src="../assets/images/fashion-1/product/2.jpg"
                                                    class="img-fluid blur-up lazyload" alt=""></a>
                                            <div class="rating-label"><i class="fa fa-star"></i> <span>4.5</span>
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
                                                    <a class="product-title" href="product-page(accordian).html">
                                                        VogueVista
                                                    </a>

                                                </div>
                                                <h6>Classic Jacket</h6>
                                                <h4 class="price">$ 3.45 </h4>
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
                            <div class="col d-md-inline-block d-none">
                                <div class="basic-product theme-product-1">
                                    <div class="overflow-hidden">
                                        <div class="img-wrapper">
                                            <a href="product-page(accordian).html"><img
                                                    src="../assets/images/fashion-1/product/3.jpg"
                                                    class="img-fluid blur-up lazyload" alt=""></a>
                                            <div class="rating-label"><i class="fa fa-star"></i> <span>4.5</span>
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
                                                <h6>Versatile Shacket</h6>
                                                <h4 class="price">$ 3.12 </h4>
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
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr1"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr1"><code data-lang="html">&lt;div class=&quot;basic-product theme-product-1&quot;&gt;
    &lt;div class=&quot;overflow-hidden&quot;&gt;
        &lt;div class=&quot;img-wrapper&quot;&gt;
            &lt;div class=&quot;ribbon&quot;&gt;
                &lt;span&gt;Exclusive&lt;/span&gt;
            &lt;/div&gt;
            &lt;a href=&quot;product-page(image-swatch).html&quot;&gt;
                &lt;img src=&quot;../assets/images/fashion-1/product/1.jpg&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
            &lt;/a&gt;
            &lt;div class=&quot;rating-label&quot;&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;span&gt;4.5&lt;/span&gt;
            &lt;/div&gt;
            &lt;div class=&quot;cart-info&quot;&gt;
                &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot; class=&quot;wishlist-icon&quot;&gt;
                    &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
                &lt;/a&gt;
                &lt;button data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#addtocart&quot;
                    title=&quot;Add to cart&quot;&gt;
                    &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                &lt;/button&gt;
                &lt;a href=&quot;#!&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quickView&quot;
                    title=&quot;Quick View&quot;&gt;
                    &lt;i class=&quot;ri-eye-line&quot;&gt;&lt;/i&gt;
                &lt;/a&gt;
                &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot;&gt;
                    &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class=&quot;product-detail&quot;&gt;
            &lt;div&gt;
                &lt;div class=&quot;brand-w-color&quot;&gt;
                    &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;
                        Glamour Gaze
                    &lt;/a&gt;
                    &lt;div class=&quot;color-panel&quot;&gt;
                        &lt;ul&gt;
                            &lt;li style=&quot;background-color: papayawhip;&quot;&gt;&lt;/li&gt;
                            &lt;li style=&quot;background-color: burlywood;&quot;&gt;&lt;/li&gt;
                            &lt;li style=&quot;background-color: gainsboro;&quot;&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;span&gt;+2&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;h6&gt;Boyfriend Shirts&lt;/h6&gt;
                &lt;h4 class=&quot;price&quot;&gt;$ 2.79&lt;del&gt; $3.00 &lt;/del&gt;&lt;span class=&quot;discounted-price&quot;&gt;7% Off&lt;/span&gt;&lt;/h4&gt;
            &lt;/div&gt;
            &lt;ul class=&quot;offer-panel&quot;&gt;
                &lt;li&gt;
                    &lt;span class=&quot;offer-icon&quot;&gt;
                        &lt;i class=&quot;ri-discount-percent-fill&quot;&gt;&lt;/i&gt;
                    &lt;/span&gt;
                    Limited Time Offer: 5% off
                &lt;/li&gt;
                &lt;li&gt;
                    &lt;span class=&quot;offer-icon&quot;&gt;
                        &lt;i class=&quot;ri-discount-percent-fill&quot;&gt;&lt;/i&gt;
                    &lt;/span&gt;
                    Limited Time Offer: 5% off
                &lt;/li&gt;
                &lt;li&gt;
                    &lt;span class=&quot;offer-icon&quot;&gt;
                        &lt;i class=&quot;ri-discount-percent-fill&quot;&gt;&lt;/i&gt;
                    &lt;/span&gt;
                    Limited Time Offer: 5% off
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class=" style-element">
                <div class="card">
                    <div class="card-body ratio_asos">
                        <div class="row">
                            <div class="col">
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
                                            <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7%
                                                    Off </span>
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
                            <div class="col d-none-frm-xs">
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
                                            <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7%
                                                    Off </span>
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
                            <div class="col d-md-inline-block d-none">
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
                                            <h4 class="price">$ 2.79<del> $3.00 </del><span class="discounted-price"> 7%
                                                    Off </span>
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
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr2"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr2">
                                <code data-lang="html">
&lt;div class=&quot;basic-product theme-product-2&quot;&gt;
    &lt;div class=&quot;product-detail mt-0&quot;&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;
            BaranRide Bike
        &lt;/a&gt;
        &lt;div class=&quot;rating&quot;&gt;
            &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;ul class=&quot;details&quot;&gt;
            &lt;li&gt;1 Item&lt;/li&gt;
        &lt;/ul&gt;
        &lt;div class=&quot;add-wish&quot;&gt;
            &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot; tabindex=&quot;0&quot;&gt;
                &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;product-page(accordian).html&quot;&gt;
            &lt;img src=&quot;../assets/images/bicycle/product/1.jpg&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;quick-view-part&quot;&gt;
        &lt;a href=&quot;#&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot; tabindex=&quot;0&quot;&gt;
            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bottom-detail&quot;&gt;
        &lt;div&gt;
            &lt;h4 class=&quot;price&quot;&gt;$ 2.79 &lt;del&gt; $3.00 &lt;/del&gt; &lt;span class=&quot;discounted-price&quot;&gt; 7% Off &lt;/span&gt;&lt;/h4&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;ul class=&quot;cart-detail&quot;&gt;
        &lt;li&gt;
            &lt;button data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#addtocart&quot; title=&quot;Add to cart&quot; tabindex=&quot;0&quot;&gt;
                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;add to cart
            &lt;/button&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot; tabindex=&quot;0&quot;&gt;
                &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;compare
            &lt;/a&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
                <hr class=" style-element">
                <div class="card">
                    <div class="card-body metro-section portfolio-section ratio_asos">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-3">
                                    <div class="img-wrapper">
                                        <div class="ribbon-round">10%</div>
                                        <a href="#!">
                                            <img src="../assets/images/medical/product/1.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <a href="#!" title="Add to Wishlist" class="wishlist-icon">
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
                                        <a class="product-title" href="product-page(accordian).html">
                                            Gravity Defying Cream
                                        </a>
                                        <div class="rating-w-count">
                                            <div class="rating">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 4.90<del> $6.00 </del>
                                        </h4>
                                        <a href="cart.html" class="add-cart-btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-3">
                                    <div class="img-wrapper">
                                        <div class="ribbon-round">30%</div>
                                        <a href="#!"><img src="../assets/images/medical/product/2.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <a href="#!" title="Add to Wishlist" class="wishlist-icon">
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
                                        <a class="product-title" href="product-page(accordian).html">
                                            Precision Injection
                                        </a>
                                        <div class="rating-w-count">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 2.60<del> $3.00 </del>
                                        </h4>
                                        <a href="cart.html" class="add-cart-btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-md-inline-block d-none">
                                <div class="basic-product theme-product-3">
                                    <div class="img-wrapper">
                                        <div class="ribbon-round">13%</div>
                                        <a href="#!"><img src="../assets/images/medical/product/3.png"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <a href="#!" title="Add to Wishlist" class="wishlist-icon">
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
                                        <a class="product-title" href="product-page(accordian).html">
                                            Refreshing Aloe Bliss
                                        </a>
                                        <div class="rating-w-count">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 10.00<del> $13.00 </del>
                                        </h4>
                                        <a href="cart.html" class="add-cart-btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr3"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr3"><code data-lang="html">&lt;div class=&quot;basic-product theme-product-3&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;div class=&quot;ribbon-round&quot;&gt;10%&lt;/div&gt;
        &lt;a href=&quot;#!&quot;&gt;
            &lt;img src=&quot;../assets/images/medical/product/1.png&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;div class=&quot;cart-info&quot;&gt;
            &lt;ul class=&quot;hover-action&quot;&gt;
                &lt;li&gt;
                    &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot; class=&quot;wishlist-icon&quot;&gt;
                        &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;
                    &lt;a href=&quot;#!&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot;&gt;
                        &lt;i class=&quot;ri-eye-line&quot;&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;
                    &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot;&gt;
                        &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;
            Gravity Defying Cream
        &lt;/a&gt;
        &lt;div class=&quot;rating-w-count&quot;&gt;
            &lt;div class=&quot;rating&quot;&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;span&gt;(10)&lt;/span&gt;
        &lt;/div&gt;
        &lt;h4 class=&quot;price&quot;&gt;$ 4.90&lt;del&gt; $6.00 &lt;/del&gt;&lt;/h4&gt;
        &lt;a href=&quot;cart.html&quot; class=&quot;add-cart-btn&quot;&gt;Add to cart&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card">
                    <div class="card-body ratio_asos">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-4">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/furniture-3/product/13.png"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>

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
                                            Woodan Diwan
                                        </a>
                                        <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 18.50 <del class="ms-auto"> $20.00 </del><span
                                                class="discounted-price">
                                                8% Off </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-4">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/furniture-3/product/14.png"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>

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
                                            Wing Lounge Chair </a>
                                        <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 23.49<del class="ms-auto"> $25.50 </del><span
                                                class="discounted-price">
                                                10% Off </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-md-inline-block d-none">
                                <div class="basic-product theme-product-4">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/furniture-3/product/15.png"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>

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
                                            Sheeesham Settee
                                        </a>
                                        <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 26.30 </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr4"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr5">
                                                                <code data-lang="html">
&lt;div class=&quot;basic-product theme-product-4&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;product-page(accordian).html&quot;&gt;
            &lt;img src=&quot;../assets/images/furniture-3/product/13.png&quot; class=&quot;img-fluid blur-up lazyload bg-img&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;div class=&quot;cart-info&quot;&gt;
            &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot; class=&quot;wishlist-icon&quot;&gt;
                &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;button data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#addtocart&quot; title=&quot;Add to cart&quot;&gt;
                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;a href=&quot;#!&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot;&gt;
                &lt;i class=&quot;ri-eye-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot;&gt;
                &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;
            Woodan Diwan
        &lt;/a&gt;
        &lt;div class=&quot;rating-w-count mb-0 d-sm-inline-flex d-none&quot;&gt;
            &lt;div class=&quot;rating&quot;&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;span&gt;(10)&lt;/span&gt;
        &lt;/div&gt;
        &lt;h4 class=&quot;price&quot;&gt;$ 18.50 &lt;del class=&quot;ms-auto&quot;&gt; $20.00 &lt;/del&gt;&lt;span class=&quot;discounted-price&quot;&gt;8% Off &lt;/span&gt;&lt;/h4&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                        </code>
                                                    </pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card">
                    <div class="card-body game-product ratio_asos">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-5">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img src="../assets/images/bags/product/1.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <div class="cart-info">
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="brand-w-color">
                                            <a class="product-title" href="product-page(accordian).html">
                                                Wander Pack
                                            </a>
                                            <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                <div class="rating">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                                <span>(10)</span>
                                            </div>
                                        </div>
                                        <h6> Heaven Backpack </h6>
                                        <h4 class="price">
                                            $ 20.39<del> $24.00 </del><span class="discounted-price"> 7% Off </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-5">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/bags/product/2.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                        <label class="rotate-label">Trending</label>
                                    </div>
                                    <div class="product-detail">
                                        <div class="brand-w-color">
                                            <a class="product-title" href="product-page(accordian).html">
                                                Wander Pack
                                            </a>
                                            <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                <div class="rating">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                                <span>(10)</span>
                                            </div>
                                        </div>
                                        <h6> Dressberry Backpack </h6>
                                        <h4 class="price">
                                            $ 18.36</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-md-inline-block d-none">
                                <div class="basic-product theme-product-5">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/bags/product/3.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </button>
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="brand-w-color">
                                            <a class="product-title" href="product-page(accordian).html">
                                                Wander Pack
                                            </a>
                                            <div class="rating-w-count mb-0 d-sm-inline-flex d-none">
                                                <div class="rating">
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                    <i class="ri-star-fill"></i>
                                                </div>
                                                <span>(10)</span>
                                            </div>
                                        </div>
                                        <h6> Auralux Training Backpack </h6>
                                        <h4 class="price">
                                            $ 19.68<del> $22.00 </del><span class="discounted-price"> 9% Off </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr5"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr5"><code data-lang="html"> 
&lt;div class=&quot;basic-product theme-product-5&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;product-page(accordian).html&quot;&gt;
            &lt;img src=&quot;../assets/images/bags/product/1.jpg&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;div class=&quot;cart-info&quot;&gt;
            &lt;button data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#addtocart&quot; title=&quot;Add to cart&quot;&gt;
                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
            &lt;/button&gt;
            &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot;&gt;
                &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;#!&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot;&gt;
                &lt;i class=&quot;ri-eye-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot;&gt;
                &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;div class=&quot;brand-w-color&quot;&gt;
            &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;
                Wander Pack
            &lt;/a&gt;
            &lt;div class=&quot;rating-w-count mb-0 d-sm-inline-flex d-none&quot;&gt;
                &lt;div class=&quot;rating&quot;&gt;
                    &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                    &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                    &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                    &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                    &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;span&gt;(10)&lt;/span&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;h6&gt; Heaven Backpack &lt;/h6&gt;
        &lt;h4 class=&quot;price&quot;&gt;
            $ 20.39&lt;del&gt; $24.00 &lt;/del&gt;&lt;span class=&quot;discounted-price&quot;&gt; 7% Off &lt;/span&gt;
        &lt;/h4&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>

                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card theme-color-27">
                    <div class="card-body ratio_square">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-6">
                                    <div class="img-wrapper">
                                        <a href="#!">
                                            <img src="../assets/images/fashion-6/product/1.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">Boyfriend
                                            Shirts</a>
                                        <div class="rating-w-count mb-0 d-sm-flex d-none">
                                            <div class="rating">
                                                <i class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 3.15<del> $4.20 </del><span class="discounted-price"> 10%
                                                Off </span>
                                        </h4>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">Add to Cart</button>
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="ri-subtract-line"></i>
                                                    </button>
                                                    <input type="text" name="quantity"
                                                        class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="ri-add-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-6">
                                    <div class="img-wrapper">

                                        <a href="#!"><img src="../assets/images/fashion-6/product/2.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
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
                                            Classic Jacket
                                        </a>
                                        <div class="rating-w-count mb-0 d-sm-flex d-none">
                                            <div class="rating"><i class="ri-star-fill pe-0"></i> <i
                                                    class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i> <i class="ri-star-fill pe-0"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 5.65</h4>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                Add to Cart
                                            </button>
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="ri-subtract-line"></i>
                                                    </button>
                                                    <input type="text" name="quantity"
                                                        class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="ri-add-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-sm-inline-block d-none">
                                <div class="basic-product theme-product-6">
                                    <div class="img-wrapper">

                                        <a href="#!"><img src="../assets/images/fashion-6/product/3.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
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
                                            Versatile Shacket
                                        </a>
                                        <div class="rating-w-count mb-0 d-sm-flex d-none">
                                            <div class="rating"><i class="ri-star-fill pe-0"></i> <i
                                                    class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i>
                                                <i class="ri-star-fill pe-0"></i> <i class="ri-star-fill pe-0"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <h4 class="price">$ 6.54 </h4>
                                        <div class="addtocart_btn">
                                            <button class="add-button add_cart" title="Add to cart">
                                                Add to Cart
                                            </button>
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="ri-subtract-line"></i>
                                                    </button>
                                                    <input type="text" name="quantity"
                                                        class="form-control input-number qty-input" value="1">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="ri-add-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr6"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr6"><code data-lang="html">
&lt;div class=&quot;basic-product theme-product-6&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;#!&quot;&gt;
            &lt;img src=&quot;../assets/images/fashion-6/product/1.jpg&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;div class=&quot;cart-info&quot;&gt;
            &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot;&gt;
                &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;#!&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot;&gt;
                &lt;i class=&quot;ri-eye-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot;&gt;
                &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;Boyfriend Shirts&lt;/a&gt;
        &lt;div class=&quot;rating-w-count mb-0 d-sm-flex d-none&quot;&gt;
            &lt;div class=&quot;rating&quot;&gt;
                &lt;i class=&quot;ri-star-fill pe-0&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill pe-0&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill pe-0&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill pe-0&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill pe-0&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;span&gt;(10)&lt;/span&gt;
        &lt;/div&gt;
        &lt;h4 class=&quot;price&quot;&gt;$ 3.15&lt;del&gt; $4.20 &lt;/del&gt;&lt;span class=&quot;discounted-price&quot;&gt; 10% Off &lt;/span&gt;&lt;/h4&gt;
        &lt;div class=&quot;addtocart_btn&quot;&gt;
            &lt;button class=&quot;add-button add_cart&quot; title=&quot;Add to cart&quot;&gt;Add to Cart&lt;/button&gt;
            &lt;div class=&quot;qty-box&quot;&gt;
                &lt;div class=&quot;input-group&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn quantity-left-minus&quot; data-type=&quot;minus&quot; data-field=&quot;&quot;&gt;
                        &lt;i class=&quot;ri-subtract-line&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt; 
                    &lt;input type=&quot;text&quot; name=&quot;quantity&quot; class=&quot;form-control input-number qty-input&quot; value=&quot;1&quot;&gt;
                    &lt;button type=&quot;button&quot; class=&quot;btn quantity-right-plus&quot; data-type=&quot;plus&quot; data-field=&quot;&quot;&gt;
                        &lt;i class=&quot;ri-add-line&quot;&gt;&lt;/i&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class=" style-element">
                <div class="card">
                    <div class="card-body ratio_square">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-7">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img src="../assets/images/gym/product/1.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <a href="#quickView" class="quick-option" data-bs-toggle="modal"
                                            title="Quick View">
                                            <i class="ri-search-line"></i>
                                        </a>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title text-start" href="product-page(accordian).html">Biozme
                                            WHEY</a>
                                        <h4 class="price">$ 8.90</h4>
                                        <div class="rating-w-count mb-0">
                                            <div class="rating">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <div class="product-action">
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart">
                                                <i class="ri-shopping-cart-line"></i>
                                                Add to cart
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-7">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/gym/product/2.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <a href="#!" class="quick-option" data-bs-toggle="modal"
                                            data-bs-target="#quickView" title="Quick View"><i
                                                class="ri-search-line"></i></a>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title text-start" href="product-page(accordian).html">
                                            Muscle Iso Zero Protein </a>
                                        <h4 class="price">$ 2.10</h4>
                                        <div class="rating-w-count mb-0">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <div class="product-action">
                                            <a href="#!" title="Add to Wishlist"><i class="ri-heart-line"></i></a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart"><i class="ri-shopping-cart-line"></i>Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-sm-inline-block d-none">
                                <div class="basic-product theme-product-7">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/gym/product/3.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <a href="#!" class="quick-option" data-bs-toggle="modal"
                                            data-bs-target="#quickView" title="Quick View"><i
                                                class="ri-search-line"></i></a>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title text-start" href="product-page(accordian).html">
                                            Muscle Pre Workout </a>
                                        <h4 class="price">$ 2.80</h4>
                                        <div class="rating-w-count mb-0">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <div class="product-action">
                                            <a href="#!" title="Add to Wishlist"><i class="ri-heart-line"></i></a>
                                            <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                title="Add to cart"><i class="ri-shopping-cart-line"></i>Add to
                                                cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr7"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr7"><code data-lang="html">
&lt;div class=&quot;basic-product theme-product-7&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;product-page(accordian).html&quot;&gt;
            &lt;img src=&quot;../assets/images/gym/product/1.jpg&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;a href=&quot;#!&quot; class=&quot;quick-option&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot;&gt;
            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;a class=&quot;product-title text-start&quot; href=&quot;product-page(accordian).html&quot;&gt;Biozme WHEY&lt;/a&gt;
        &lt;h4 class=&quot;price&quot;&gt;$ 8.90&lt;/h4&gt;
        &lt;div class=&quot;rating-w-count mb-0&quot;&gt;
            &lt;div class=&quot;rating&quot;&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;span&gt;(10)&lt;/span&gt;
        &lt;/div&gt;
        &lt;div class=&quot;product-action&quot;&gt;
            &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot;&gt;
                &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;button data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#addtocart&quot; title=&quot;Add to cart&quot;&gt;
                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                Add to cart
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class=" style-element">
                <div class="card theme-color-27">
                    <div class="card-body ratio_square">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-8">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img src="../assets/images/goggles/product/1.jpg"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">Gradiant
                                            Glassses</a>
                                        <h4 class="price mb-2">$ 90.20<del> $95.00 </del><span
                                                class="discounted-price">10% Off</span>
                                        </h4>
                                        <div class="rating-w-count mb-0">
                                            <div class="rating">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <button class="add-round-btn" data-bs-toggle="modal" data-bs-target="#addtocart"
                                            title="Add to cart">
                                            <i class="ri-shopping-cart-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-8">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/goggles/product/2.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                    class="ri-heart-line"></i></a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View"><i
                                                    class="ri-eye-line"></i></a> <a href="compare.html"
                                                title="Compare"><i class="ri-loop-left-line"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">
                                            RAY-BAN Eye glasses
                                        </a>
                                        <h4 class="price mb-2">$ 95.30<del> $98.70 </del><span class="discounted-price">
                                                8% Off
                                            </span>
                                        </h4>
                                        <div class="rating-w-count mb-0">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <button class="add-round-btn" data-bs-toggle="modal" data-bs-target="#addtocart"
                                            title="Add to cart"><i class="ri-shopping-cart-line"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-md-inline-block d-none">
                                <div class="basic-product theme-product-8">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/goggles/product/3.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                    class="ri-heart-line"></i></a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View"><i
                                                    class="ri-eye-line"></i></a> <a href="compare.html"
                                                title="Compare"><i class="ri-loop-left-line"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">
                                            Thalia Optics </a>
                                        <h4 class="price mb-2">$ 50.49<del> $55.20 </del><span class="discounted-price">
                                                12%
                                                Off
                                            </span>
                                        </h4>
                                        <div class="rating-w-count mb-0">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                        <button class="add-round-btn" data-bs-toggle="modal" data-bs-target="#addtocart"
                                            title="Add to cart"><i class="ri-shopping-cart-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr8"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr8"><code data-lang="html">
&lt;div class=&quot;basic-product theme-product-8&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;product-page(accordian).html&quot;&gt;
            &lt;img src=&quot;../assets/images/goggles/product/1.jpg&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;div class=&quot;cart-info&quot;&gt;
            &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot; class=&quot;wishlist-icon&quot;&gt;
                &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;#!&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot;&gt;
                &lt;i class=&quot;ri-eye-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot;&gt;
                &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;Gradiant Glasses&lt;/a&gt;
        &lt;h4 class=&quot;price mb-2&quot;&gt;$ 90.20&lt;del&gt; $95.00 &lt;/del&gt;&lt;span class=&quot;discounted-price&quot;&gt;10% Off&lt;/span&gt;&lt;/h4&gt;
        &lt;div class=&quot;rating-w-count mb-0&quot;&gt;
            &lt;div class=&quot;rating&quot;&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;span&gt;(10)&lt;/span&gt;
        &lt;/div&gt;
        &lt;button class=&quot;add-round-btn&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#addtocart&quot; title=&quot;Add to cart&quot;&gt;
            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
        &lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class=" style-element">
                <div class="card">
                    <div class="card-body addtocart_count ratio_square">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-10">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img class="img-fluid bg-img" src="../assets/images/fashion-1/product/6.jpg"
                                                alt="">
                                        </a>
                                        <button class="addto-cart-bottom">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add to cart
                                        </button>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <a href="#!" title="Add to Wishlist">
                                                        <i class="ri-heart-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" title="Compare">
                                                        <i class="ri-loop-right-fill"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">Glamour Gaze</a>
                                        <a class="product-title" href="product-page(accordian).html">
                                            <h6>Chic Mini Dress</h6>
                                        </a>
                                        <h4 class="price">$9.40 <del> $10.00 </del><span class="discounted-price"> 6%
                                                Off </span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-10">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img class="img-fluid bg-img" src="../assets/images/fashion-1/product/7.jpg"
                                                alt="">
                                        </a>
                                        <button class="addto-cart-bottom">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add to cart
                                        </button>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <a href="#!" title="Add to Wishlist">
                                                        <i class="ri-heart-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" title="Compare">
                                                        <i class="ri-loop-right-fill"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">Glamour Gaze</a>
                                        <a class="product-title" href="product-page(accordian).html">
                                            <h6>Chic Mini Dress</h6>
                                        </a>
                                        <h4 class="price">$9.40 <del> $10.00 </del><span class="discounted-price"> 6%
                                                Off </span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-md-inline-block d-none">
                                <div class="basic-product theme-product-10">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img class="img-fluid bg-img" src="../assets/images/fashion-1/product/8.jpg"
                                                alt="">
                                        </a>
                                        <button class="addto-cart-bottom">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add to cart
                                        </button>
                                        <div class="cart-info">
                                            <ul class="hover-action">
                                                <li>
                                                    <a href="#!" title="Add to Wishlist">
                                                        <i class="ri-heart-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" title="Quick View">
                                                        <i class="ri-search-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#!" title="Compare">
                                                        <i class="ri-loop-right-fill"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">Glamour Gaze</a>
                                        <a class="product-title" href="product-page(accordian).html">
                                            <h6>Chic Mini Dress</h6>
                                        </a>
                                        <h4 class="price">$9.40 <del> $10.00 </del><span class="discounted-price"> 6%
                                                Off </span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr9"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr9"><code data-lang="html">&lt;div class=&quot;basic-product theme-product-10&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;product-page(accordian).html&quot;&gt;
            &lt;img class=&quot;img-fluid bg-img&quot; src=&quot;../assets/images/fashion-1/product/6.jpg&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;button class=&quot;addto-cart-bottom&quot;&gt;
            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
            Add to cart
        &lt;/button&gt;
        &lt;div class=&quot;cart-info&quot;&gt;
            &lt;ul class=&quot;hover-action&quot;&gt;
                &lt;li&gt;
                    &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot;&gt;
                        &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;
                    &lt;a href=&quot;#!&quot; title=&quot;Quick View&quot;&gt;
                        &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;
                    &lt;a href=&quot;#!&quot; title=&quot;Compare&quot;&gt;
                        &lt;i class=&quot;ri-loop-right-fill&quot;&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;Glamour Gaze&lt;/a&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;
            &lt;h6&gt;Chic Mini Dress&lt;/h6&gt;
        &lt;/a&gt;
        &lt;h4 class=&quot;price&quot;&gt;$9.40 &lt;del&gt; $10.00 &lt;/del&gt;&lt;span class=&quot;discounted-price&quot;&gt; 6% Off &lt;/span&gt;&lt;/h4&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class=" style-element">
                <div class="card">
                    <div class="card-body j-box ratio_square">
                        <div class="row">
                            <div class="col">
                                <div class="basic-product theme-product-11">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html">
                                            <img src="../assets/images/jewellery-1/product/8.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                        <label class="trending-label-product11">Trending</label>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">Luminary Jewels</a>
                                        <h6> Rose Gold Diamond Ring</h6>
                                        <h4 class="price">$ 96.40</h4>
                                        <div class="rating-w-count mb-0 mt-2">
                                            <div class="rating">
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                    </div>
                                    <div class="abs-product">
                                        <div class="product-detail mt-0">
                                            <a class="product-title" href="product-page(accordian).html">Luminary
                                                Jewels</a>
                                            <h4 class="price">$ 96.40</h4>
                                        </div>

                                        <a href="cart.html" class="add-cart-btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-none-frm-xs">
                                <div class="basic-product theme-product-11">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/jewellery-1/product/9.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
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
                                            Sparkle Palace
                                        </a>
                                        <h6> Golden Hoops </h6>
                                        <h4 class="price">$ 68.00 </h4>
                                        <div class="rating-w-count mb-0 mt-2">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                    </div>
                                    <div class="abs-product">
                                        <div class="product-detail mt-0">
                                            <a class="product-title" href="product-page(accordian).html">
                                                Sparkle Palace
                                            </a>
                                            <h4 class="price">$ 68.00 </h4>
                                        </div>

                                        <a href="cart.html" class="add-cart-btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-md-inline-block d-none">
                                <div class="basic-product theme-product-11">
                                    <div class="img-wrapper">
                                        <a href="product-page(accordian).html"><img
                                                src="../assets/images/jewellery-1/product/10.jpg"
                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        <div class="cart-info">
                                            <a href="#!" title="Add to Wishlist">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" title="Quick View">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="compare.html" title="Compare">
                                                <i class="ri-loop-left-line"></i>
                                            </a>
                                        </div>
                                        <label class="trending-label-product11">Trending</label>
                                    </div>
                                    <div class="product-detail">
                                        <a class="product-title" href="product-page(accordian).html">
                                            Luminary Jewels
                                        </a>
                                        <h6> Dual Chain Necklace </h6>
                                        <h4 class="price">$ 79.20<del> $80.00 </del><span class="discounted-price"> 5%
                                                Off </span>
                                        </h4>
                                        <div class="rating-w-count mb-0 mt-2">
                                            <div class="rating"><i class="ri-star-fill"></i> <i
                                                    class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i> <i class="ri-star-fill"></i>
                                            </div>
                                            <span>(10)</span>
                                        </div>
                                    </div>
                                    <div class="abs-product">
                                        <div class="product-detail mt-0">
                                            <a class="product-title" href="product-page(accordian).html">
                                                Luminary Jewels
                                            </a>
                                            <h4 class="price">$ 79.20<del> $80.00 </del><span class="discounted-price">
                                                    5% Off
                                                </span>
                                            </h4>
                                        </div>

                                        <a href="cart.html" class="add-cart-btn">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#pr11"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="pr11"><code data-lang="html">&lt;div class=&quot;basic-product theme-product-11&quot;&gt;
    &lt;div class=&quot;img-wrapper&quot;&gt;
        &lt;a href=&quot;product-page(accordian).html&quot;&gt;
            &lt;img src=&quot;../assets/images/jewellery-1/product/8.jpg&quot; class=&quot;img-fluid blur-up lazyload bg-img&quot; alt=&quot;&quot;&gt;
        &lt;/a&gt;
        &lt;div class=&quot;cart-info&quot;&gt;
            &lt;a href=&quot;#!&quot; title=&quot;Add to Wishlist&quot;&gt;
                &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;#!&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#quick-view&quot; title=&quot;Quick View&quot;&gt;
                &lt;i class=&quot;ri-eye-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
            &lt;a href=&quot;compare.html&quot; title=&quot;Compare&quot;&gt;
                &lt;i class=&quot;ri-loop-left-line&quot;&gt;&lt;/i&gt;
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;label class=&quot;trending-label-product11&quot;&gt;Trending&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class=&quot;product-detail&quot;&gt;
        &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;Luminary Jewels&lt;/a&gt;
        &lt;h6&gt;Rose Gold Diamond Ring&lt;/h6&gt;
        &lt;h4 class=&quot;price&quot;&gt;$ 96.40&lt;/h4&gt;
        &lt;div class=&quot;rating-w-count mb-0 mt-2&quot;&gt;
            &lt;div class=&quot;rating&quot;&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
                &lt;i class=&quot;ri-star-fill&quot;&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;span&gt;(10)&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;abs-product&quot;&gt;
        &lt;div class=&quot;product-detail mt-0&quot;&gt;
            &lt;a class=&quot;product-title&quot; href=&quot;product-page(accordian).html&quot;&gt;Luminary Jewels&lt;/a&gt;
            &lt;h4 class=&quot;price&quot;&gt;$ 96.40&lt;/h4&gt;
        &lt;/div&gt;
        &lt;a href=&quot;cart.html&quot; class=&quot;add-cart-btn&quot;&gt;Add to cart&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
    <!-- theme setting start -->
