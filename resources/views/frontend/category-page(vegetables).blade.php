 <!-- header end -->
 @extends('frontend.layout.main')
 @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Collections</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item">vegetables</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- product listing section start -->
    <section class="section-b-space ratio_square category-shop-section">
        <div class="collection-wrapper">
            <div class="container">
                <a href="javascript:void(0)" class="d-xl-none d-inline-block category-mobile-button"><i
                        class="fa fa-bars"></i> Category</a>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="sidebar-overlay"></div>
                        <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link d-xl-none d-block sidebar-back">Back</a>
                            <a class="nav-link active" data-bs-toggle="pill" data-bs-target="#grocery"
                                role="tab">Grocery & Staples</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#vegetables"
                                role="tab">Vegetables</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#dairy" role="tab">Dairy items</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#meat" role="tab">Eggs, Meat,
                                Fish</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#drinks" role="tab">cold drinks &
                                juices</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#cleaning" role="tab">cleaning
                                products</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#organic" role="tab">organic
                                items</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#snacks" role="tab">biscuits &
                                snacks</a>
                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#household" role="tab">household
                                items</a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="grocery">
                                <div class="title8">
                                    <h2>grocery & staples</h2>
                                    <p>atta, dal, rice and more</p>
                                </div>
                                <div class="row g-sm-4 g-3">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/1.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/2.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/3.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/4.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/5.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/6.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/7.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/8.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vegetables">
                                <div class="title8">
                                    <h2>Vegetables</h2>
                                    <p>atta, dal, rice and more</p>
                                </div>
                                <div class="row g-sm-4 g-3">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/1.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/2.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/3.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/4.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/5.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/6.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/7.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/8.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dairy">
                                <div class="title8">
                                    <h2>Dairy items</h2>
                                    <p>atta, dal, rice and more</p>
                                </div>
                                <div class="row g-sm-4 g-3">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/1.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/2.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/3.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/4.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/5.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/6.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/7.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/8.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="meat">
                                <div class="title8">
                                    <h2>Eggs, Meat, Fish</h2>
                                    <p>atta, dal, rice and more</p>
                                </div>
                                <div class="row g-sm-4 g-3">
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/1.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/2.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/3.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/4.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/5.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/6.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/7.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-6">
                                        <div class="product-box product-style-5">
                                            <a href="product-page(accordian).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h5>1 Kg</h5>
                                            <h4>$500.00</h4>
                                            <div class="addtocart_btn">
                                                <button class="add-button add_cart" title="Add to cart">
                                                    <i class="ri-add-fill"></i>
                                                </button>
                                                <div class="qty-box cart_qty">
                                                    <div class="input-group">
                                                        <button type="button" class="btn quantity-left-minus"
                                                            data-type="minus" data-field="">
                                                            <i class="ri-subtract-fill"></i>
                                                        </button>
                                                        <input type="text" name="quantity" readonly
                                                            class="form-control input-number qty-input" value="1">
                                                        <button type="button" class="btn quantity-right-plus"
                                                            data-type="plus" data-field="">
                                                            <i class="ri-add-fill"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="product-page(accordian).html"><img alt=""
                                                            src="../assets/images/vegetables/pro/png/8.png"
                                                            class="img-fluid blur-up lazyload bg-img"></a>
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
    <!-- product listing section end -->


    <!-- footer start -->
    @endsection