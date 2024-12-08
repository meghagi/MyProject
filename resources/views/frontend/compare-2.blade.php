  <!-- header end -->
  @extends('frontend.layout.main')
  @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Compare</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Compare</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="compare-padding">
        <div class="container">
            <div class="table-responsive">
                <table class="table compare-table">
                    <tbody>
                        <tr>
                            <td>
                                <button class="close-btn">
                                    <i class="ri-close-line"></i>
                                </button>
                                <div class="img-section">
                                    <img src="../assets/images/fashion-1/product/1.jpg" class="img-fluid" alt="">
                                    <a href="product-page(accordian).html">Boyfriend Shirts</a>
                                </div>
                            </td>
                            <td>
                                <button class="close-btn">
                                    <i class="ri-close-line"></i>
                                </button>
                                <div class="img-section">
                                    <img src="../assets/images/fashion-1/product/2.jpg" class="img-fluid" alt="">
                                    <a href="product-page(accordian).html">Classic Jacket</a>
                                </div>
                            </td>
                            <td>
                                <button class="close-btn">
                                    <i class="ri-close-line"></i>
                                </button>
                                <div class="img-section">
                                    <img src="../assets/images/fashion-1/product/3.jpg" class="img-fluid" alt="">
                                    <a href="product-page(accordian).html">Versatile Shacket</a>
                                </div>
                            </td>
                            <td>
                                <button class="close-btn">
                                    <i class="ri-close-line"></i>
                                </button>
                                <div class="img-section">
                                    <img src="../assets/images/fashion-1/product/4.jpg" class="img-fluid" alt="">
                                    <a href="product-page(accordian).html">Chic Denim</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="title-detail">Price</td>
                            <td class="title-detail">Price</td>
                            <td class="title-detail">Price</td>
                            <td class="title-detail">Price</td>
                        </tr>
                        <tr>
                            <td class="inner-detail">$9.40</td>
                            <td class="inner-detail">$10.56</td>
                            <td class="inner-detail">$24.36</td>
                            <td class="inner-detail">$7.69</td>
                        </tr>
                        <tr>
                            <td class="title-detail">Discount</td>
                            <td class="title-detail">Discount</td>
                            <td class="title-detail">Discount</td>
                            <td class="title-detail">Discount</td>
                        </tr>
                        <tr>
                            <td class="inner-detail">4</td>
                            <td class="inner-detail">3</td>
                            <td class="inner-detail">7</td>
                            <td class="inner-detail">8</td>
                        </tr>
                        <tr>
                            <td class="title-detail">Availability</td>
                            <td class="title-detail">Availability</td>
                            <td class="title-detail">Availability</td>
                            <td class="title-detail">Availability</td>
                        </tr>
                        <tr>
                            <td class="inner-detail">In stock</td>
                            <td class="inner-detail">In stock</td>
                            <td class="inner-detail">In stock</td>
                            <td class="inner-detail">In stock</td>
                        </tr>
                        <tr>
                            <td class="title-detail">Rating</td>
                            <td class="title-detail">Rating</td>
                            <td class="title-detail">Rating</td>
                            <td class="title-detail">Rating</td>
                        </tr>
                        <tr>
                            <td class="inner-detail">
                                <div class="compare-rating">
                                    <div class="rating-list">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(35 reviews)</span>
                                </div>
                            </td>
                            <td class="inner-detail">
                                <div class="compare-rating">
                                    <div class="rating-list">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(40 reviews)</span>
                                </div>
                            </td>
                            <td class="inner-detail">
                                <div class="compare-rating">
                                    <div class="rating-list">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(36 reviews)</span>
                                </div>
                            </td>
                            <td class="inner-detail">
                                <div class="compare-rating">
                                    <div class="rating-list">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <span>(65 reviews)</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="title-detail">Weight</td>
                            <td class="title-detail">Weight</td>
                            <td class="title-detail">Weight</td>
                            <td class="title-detail">Weight</td>
                        </tr>
                        <tr>
                            <td class="inner-detail">-</td>
                            <td class="inner-detail">-</td>
                            <td class="inner-detail">-</td>
                            <td class="inner-detail">-</td>
                        </tr>
                        <tr>
                            <td class="title-detail">Availability</td>
                            <td class="title-detail">Availability</td>
                            <td class="title-detail">Availability</td>
                            <td class="title-detail">Availability</td>
                        </tr>
                        <tr>
                            <td class="inner-detail">In stock</td>
                            <td class="inner-detail">In stock</td>
                            <td class="inner-detail">In stock</td>
                            <td class="inner-detail">In stock</td>
                        </tr>
                        <tr>
                            <td class="btn-part">
                                <button class="btn btn-solid">Add To Cart</button>
                            </td>
                            <td class="btn-part">
                                <button class="btn btn-solid">Add To Cart</button>
                            </td>
                            <td class="btn-part">
                                <button class="btn btn-solid">Add To Cart</button>
                            </td>
                            <td class="btn-part">
                                <button class="btn btn-solid">Add To Cart</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Section ends -->

@endsection
    <!-- Footer Section Start -->
   