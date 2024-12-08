
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2> Sharper And Attrative Pencil</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item">IPhone 14 Pro Max</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="collection-wrapper">
                    <div class="row g-3">
                        <div class="col-xl-4 col-12">
                            <div class="sticky-details">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-slick">
                                            @foreach ($products as $product)
                                            <div>
                                                {{-- <img src="../assets/images/product-details/product/23.jpg" alt=""
                                                    class="w-100 img-fluid blur-up lazyload"> --}}
                                                    <img src="{{ asset('uploads/' . $product->file1) }}">
                                            </div>
                                            @endforeach
                                            {{-- <div>
                                                <img src="../assets/images/product-details/product/24.jpg" alt=""
                                                    class="w-100 img-fluid blur-up lazyload">
                                            </div>
                                            <div>
                                                <img src="../assets/images/product-details/product/25.jpg" alt=""
                                                    class="w-100 img-fluid blur-up lazyload">
                                            </div>
                                            <div>
                                                <img src="../assets/images/product-details/product/24.jpg" alt=""
                                                    class="w-100 img-fluid blur-up lazyload">
                                            </div> --}}
                                        </div>
                                    
                                    </div>
                                    <div class="col-12">
                                        <div class="slider-nav">
                                            <div>
                                                <img src="{{asset('uploads/pencil.jpg')}}" alt=""
                                                    class="img-fluid blur-up lazyload">
                                            </div>
                                            <div>
                                                <img src="{{asset('uploads/im4.jpg')}}" alt=""
                                                    class="img-fluid blur-up lazyload">
                                            </div>
                                            <div>
                                                <img src="{{asset('uploads/im6.jpeg')}}" alt=""
                                                    class="img-fluid blur-up lazyload">
                                            </div>
                                            <div>
                                                <img src="{{asset('uploads/img5.jpeg')}}" alt=""
                                                    class="img-fluid blur-up lazyload">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-page-details product-description-box sticky-details">
                                <div class="trending-text ">
                                    <img src="../assets/images/product-details/trending.gif" class="img-fluid" alt="">
                                    <h5>Selling fast! 4 people have this in their carts.
                                    </h5>
                                </div>

                                <h2 class="main-title">products</h2>
                                <div class="product-rating">
                                    <div class="rating-list">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>

                                    <span class="divider">|</span>
                                    <a href="#!">20 Reviews</a>
                                </div>

                                <div class="price-text">
                                    <h3><span class="fw-normal">MRP:</span>
                                        $150.00
                                    </h3><span>Inclusive all the text </span>
                                </div>

                                <div class="size-delivery-info">
                                    <a href="#return" data-bs-toggle="modal" class=""><i class="ri-truck-line"></i>
                                        Delivery &amp; Return </a>

                                    <a href="#ask-question" class="" data-bs-toggle="modal"><i
                                            class="ri-questionnaire-line"></i>
                                        Ask a Question </a>
                                </div>

                                <div class="bordered-box p-0 border-0">
                                    <h4 class="sub-title">product Info:</h4>
                                    <ul class="shipping-info">
                                        @foreach ($products as $product)
                                        <li><span>product Name</span> {{$product->product_name}}
                                        </li>
                                        <li><span>description:</span> {{$product->description}}
                                        </li>
                                        <li><span>Quantity:</span>{{$product->quantity}}
                                        </li>
                                        <li><span>Price:</span> {{$product->price}}
                                        </li>
                                        <li><span>Stockprice:</span> {{$product->stockprice}}
                                          </li>
                                        {{-- <li><span>file</span>
                                            In Stock</li>
                                        <li><span>Quantity: </span> 60 Items Left</li> --}}
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="bordered-box">
                                    <h4 class="sub-title">Delivery Details</h4>
                                    <ul class="product-offer delivery-details">
                                        <li><i class="ri-truck-line"></i> Your order is likely
                                            to reach you within 7 days. </li>
                                        <li><i class="ri-arrow-left-right-line"></i> Hassle
                                            free returns within 7 Days. </li>
                                    </ul>
                                </div>

                                <div class="dashed-border-box mb-0">
                                    <h4 class="sub-title">Guaranteed Safe Checkout</h4>
                                    <img class="img-fluid payment-img" alt=""
                                        src="../assets/images/product-details/payments.png">
                                </div>

                                <div class="dashed-border-box mb-0">
                                    <h4 class="sub-title">Secure Checkout</h4>
                                    <img class="img-fluid payment-img" alt=""
                                        src="../assets/images/product-details/secure_payments.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-page-details product-form-box product-right-box d-flex
                                align-items-center flex-column">

                                <h4 class="sub-title">GB:</h4>
                                <div class="variation-box size-box">
                                    <ul class="quantity-variant rectangle">
                                        <li>
                                            <button type="button" class=""> 128 GB </button>
                                        </li>

                                        <li>
                                            <button type="button" class=""> 256 GB </button>
                                        </li>

                                        <li class="active">
                                            <button type="button" class="">512 GB </button>
                                        </li>
                                    </ul>
                                </div>

                                <h4 class="sub-title mt-3">Color:</h4>
                                <div class="variation-box color-select">
                                    <ul class="quantity-variant round color">
                                        <li class="active">
                                            <span style="background-color: rgb(81, 84, 97);"></span>
                                        </li>
                                        <li>
                                            <span style="background-color: rgb(78, 77, 75);"></span>
                                        </li>

                                        <li>
                                            <span style="background-color: rgb(185, 186, 153);"></span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="product-buttons">
                                    <div class="qty-section">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="ri-arrow-left-s-line"></i>
                                                    </button>
                                                </span>
                                                <input type="text" name="quantity" class="form-control input-number"
                                                    value="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <div class="d-flex align-items-center gap-3">
                                        <a  href="{{url('/addtocart')}}">
                                        <button class="btn btn-animation btn-solid hover-solid scroll-button"
                                            type="button">
                                            <i class="ri-shopping-cart-line me-1"></i> Add To Cart
                                        </button>
                                    </a>
                                        <a href="#!" class="btn btn-solid buy-button">Buy Now</a>
                                    </div>
                                </div>
                                <div class="buy-box justify-content-center gap-3">
                                    <a href="{{url('/wishlist')}}">
                                        <i class="ri-heart-line"></i>
                                        <span>Add To Wishlist</span>
                                    </a>

                                    <a href="#!" class="add-compare">
                                        <i class="ri-refresh-line"></i>
                                        <span>Add To Compare</span>
                                    </a>

                                    <a href="#share" data-bs-toggle="modal">
                                        <i class="ri-share-line"></i>
                                        <span>Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="tab-product m-0 section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home"><i class="icofont icofont-ui-home"></i>Description</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab"
                                href="#top-review"><i class="icofont icofont-contacts"></i>Review</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                href="#top-contact"><i class="icofont icofont-contacts"></i>Q & A</a>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home">
                            <div class="product-tab-description">
                                <div class="part">
                                    <p>Stationery refers to writing materials, including cut paper, envelopes, writing implements, continuous form paper, and other office supplies. Stationery includes materials to be written on by hand (e.g., letter paper) or by equipment such as computer printers.
                                    </p>
                                </div>
                                <div class="part">
                                    <h5 class="inner-title">Items:</h5>
                                    <p>Paper and pad:
                                        Notebooks, wirebound notebook, writing pads, college ruled paper, wide-ruled paper,
                                        Office paper: dot matrix paper, inkjet printer paper, laser printer paper, photocopy paper.
                                        Loose leaves, ring binders and hole punches.</p>
                                </div>
                                <div class="part">
                                    <h5 class="inner-title">size & fit:</h5>
                                    <p>The model (height 5'8") is so flexible</p>
                                </div>
                                <div class="part">
                                    <h5 class="inner-title">Material & Care:</h5>
                                    <p>Top fabric: wooden</p>
                                    <p>Bottom fabric: handform</p>
                                    <p>Hand-wash</p>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="top-review" role="tabpanel">
                            <div class="single-product-tables">
                                <div class="row g-3 w-100">
                                    <div class="col-xl-5">
                                        <div class="product-rating-box">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <h2 class="mb-0 rating-number">4.00</h2>
                                                        <div>
                                                            <span class="base-rating">
                                                                <i class="ri-star-s-fill"></i>
                                                                <i class="ri-star-s-fill"></i>
                                                                <i class="ri-star-s-fill"></i>
                                                                <i class="ri-star-s-fill"></i>
                                                                <i class="ri-star-line"></i>
                                                            </span>
                                                            <h4 class="rating-count">Based on 25 Rating</h4>
                                                        </div>
                                                    </div>

                                                    <div class="review-title-2">
                                                        <h4>Review this product
                                                        </h4>
                                                        <p>Let other customers know what you think</p>
                                                        <ul class="product-rating-list">
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>5<i class="ri-star-fill"></i></h5>
                                                                    <div class="progress" role="progressbar">
                                                                        <div class="progress-bar" style="width: 90%">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">9 </h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>4<i class="ri-star-fill"></i></h5>
                                                                    <div class="progress" role="progressbar">
                                                                        <div class="progress-bar" style="width: 75%">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">7
                                                                    </h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>3<i class="ri-star-fill"></i></h5>
                                                                    <div class="progress" role="progressbar">
                                                                        <div class="progress-bar" style="width: 50%">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">5
                                                                    </h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>2<i class="ri-star-fill"></i></h5>
                                                                    <div class="progress" role="progressbar">
                                                                        <div class="progress-bar" style="width: 25%">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">3
                                                                    </h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>1<i class="ri-star-fill"></i></h5>
                                                                    <div class="progress" role="progressbar">
                                                                        <div class="progress-bar" style="width: 10%">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">1
                                                                    </h5>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <button class="btn" data-bs-toggle="modal"
                                                            data-bs-target="#write-review" type="submit">
                                                            Write Review
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="review-people">
                                            <ul class="review-list">
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <div class="user-round">
                                                                    <h4>J</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name">
                                                                <a href="#!" class="name">John Due</a>
                                                                <h6 class="text-content"> 10 Aug 2024 11:05:AM </h6>
                                                                <ul class="product-rating">
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-line"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-line"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="reply">
                                                                <p>"Wow! This fashion product exceeded all my
                                                                    expectations! From the moment I opened the
                                                                    package, I could tell it was something special.
                                                                    The quality of the materials is outstanding.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <div class="user-round">
                                                                    <h4>R</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name">
                                                                <a href="#!" class="name">Rhoda Mayer</a>
                                                                <h6 class="text-content"> 10 Aug 2024 11:05:AM
                                                                </h6>
                                                                <ul class="product-rating">
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="reply">
                                                                <p>"Nice the attention to detail in the
                                                                    craftsmanship is truly impressive. Not only
                                                                    does
                                                                    it look fabulous, but it feels incredibly
                                                                    comfortable too. I've received so many
                                                                    compliments whenever I wear it!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="people-box">
                                                        <div>
                                                            <div class="people-image people-text">
                                                                <div class="user-round">
                                                                    <h4>J</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="people-comment">
                                                            <div class="people-name">
                                                                <a href="#!" class="name">Jack Deo</a>
                                                                <h6 class="text-content"> 10 Aug 2024 11:05:AM </h6>
                                                                <ul class="product-rating">
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-fill"></i>
                                                                    </li>
                                                                    <li class="star-rating">
                                                                        <i class="ri-star-line"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="reply">
                                                                <p>"The product boasts impressive craftsmanship,
                                                                    meticulous attention to detail, and a stunning
                                                                    appearance, resulting in a comfortable feel and
                                                                    numerous compliments."
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel">
                            <div class="post-question-box">
                                <h4>Have Doubts Regarding This Product ? <a href="#ask-question"
                                        data-bs-toggle="modal">Post
                                        Your Question</a>
                                </h4>
                            </div>
                            <div class="question-answer">
                                <ul>
                                    <li>
                                        <div class="question-box">
                                            <h5>Q1</h5>
                                            <h6 class="font-weight-bold que">Does
                                                the dress offer any UV
                                                protection?</h6>
                                            <ul class="link-dislike-box">
                                                <li><a href="#!"><span><i class="ri-thumb-up-fill"></i>
                                                            0</span></a></li>
                                                <li><a href="#!"><span><i class="ri-thumb-down-fill"></i>
                                                            0</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="answer-box">
                                            <div class="answer-box">
                                                <h5>A1</h5>
                                                <p class="ans">Yes, the dress
                                                    offers UV protection. It blocks
                                                    harmful UV rays, providing an additional layer of sun
                                                    safety. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="question-box">
                                            <h5>Q2</h5>
                                            <h6 class="font-weight-bold que">Are
                                                there any pockets, and if so,
                                                how many and where are they located?</h6>
                                            <ul class="link-dislike-box">
                                                <li><a href="#!"><span><i class="ri-thumb-up-fill"></i>
                                                            0</span></a></li>
                                                <li><a href="#!"><span><i class="ri-thumb-down-fill"></i>
                                                            0</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="answer-box">
                                            <div class="answer-box">
                                                <h5>A2</h5>
                                                <p class="ans">Yes, there are
                                                    pockets. There are two pockets,
                                                    one on each side of the garment. </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="question-box">
                                            <h5>Q3</h5>
                                            <h6 class="font-weight-bold que">Is the
                                                fabric breathable and
                                                quick-drying?</h6>
                                            <ul class="link-dislike-box">
                                                <li><a href="#!"><span><i class="ri-thumb-up-fill"></i>
                                                            0</span></a></li>
                                                <li><a href="#!"><span><i class="ri-thumb-down-fill"></i>
                                                            0</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="answer-box">
                                            <div class="answer-box">
                                                <h5>A3</h5>
                                                <p class="ans">Yes, the fabric is
                                                    breathable, allowing for
                                                    excellent airflow. Additionally, it is quick-drying,
                                                    ensuring comfort during and after
                                                    activities. </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab ends -->

@endsection
    <!-- Footer Section Start -->
  