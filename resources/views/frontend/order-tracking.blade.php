
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Order tracking</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Order tracking</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- tracking page start -->
    <section class="tracking-page section-b-space">
        <div class="container">
            <div class="title-header mb-3">
                <h5>Order Number: #1021</h5>
                <!-- <button class="btn btn-md theme-bg-color ms-auto">Invoice <i
                        class="ri-download-2-fill ms-2"></i></button> -->
            </div>

            <div class="table-responsive">
                <table class="table tacking-table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Full Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-image">
                                <img src="../assets/images/product-details/product/17.jpg" class="img-fluid" alt="">
                            </td>
                            <td>
                                <h6>Gym Coords Set (Brown)</h6>
                            </td>
                            <td>
                                <h6>$16.00</h6>
                            </td>
                            <td>
                                <h6>1</h6>
                            </td>
                            <td>
                                <h6>$16.00</h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-image">
                                <img src="../assets/images/fashion-1/product/17.jpg" class="img-fluid" alt="">
                            </td>
                            <td>
                                <h6>Orange Coords Set</h6>
                            </td>
                            <td>
                                <h6>$15.69</h6>
                            </td>
                            <td>
                                <h6>2</h6>
                            </td>
                            <td>
                                <h6>$34.69</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="summary-details my-3">
                <div class="row g-4">
                    <div class="col-xxl-8 col-lg-12 col-md-7">
                        <div class="details-box">
                            <h3 class="order-title">Consumer Details</h3>
                            <div class="customer-detail tracking-wrapper">
                                <ul class="row g-3">
                                    <li class="col-sm-6">
                                        <label>Billing Address:</label>
                                        <h4> 26, Starts Hollow Colony Denver Colorado United States 80014 <br> Phone
                                            : +1 5551855359 </h4>
                                    </li>
                                    <li class="col-sm-6">
                                        <label>Shipping Address:</label>
                                        <h4> 26, Starts Hollow Colony Denver Colorado United States 80014 <br> Phone
                                            : +1 5551855359 </h4>
                                    </li>
                                    <li class="col-sm-6">
                                        <label>Delivery Slot:</label>
                                        <h4>Standard Delivery | Approx 5 to 7 Days</h4>
                                    </li>
                                    <li class="col-sm-3">
                                        <label>Payment Mode:</label>
                                        <div class="d-flex align-items-center gap-2">
                                            <h4>PAYPAL</h4>
                                        </div>
                                    </li>
                                    <li class="col-sm-3">
                                        <label>Payment Status:</label>
                                        <div class="d-flex align-items-center gap-2">
                                            <h4>COMPLETED</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-12 col-md-5">
                        <div class="details-box">
                            <h3 class="fw-semibold mb-3 order-title"> Summary </h3>
                            <ul class="tracking-total tracking-wrapper">
                                <li>Sub Total <span>$29.25</span></li>
                                <li>Shipping <span>$0.00</span></li>
                                <li>Tax <span>$1.46</span></li>
                                <li>Total <span>$30.71</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table tacking-table">
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Order Date</th>
                            <th>Total Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-image">
                                <h6>#1022</h6>
                            </td>
                            <td>
                                <h6>30 Aug 2024 03:08:PM</h6>
                            </td>
                            <td>
                                <h6>$16.00</h6>
                            </td>
                            <td>
                                <h6>pending</h6>
                            </td>
                            <td>
                                <h6>
                                    <i class="ri-eye-line"></i>
                                </h6>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-image">
                                <h6>#1023</h6>
                            </td>
                            <td>
                                <h6>36 Jun 2024 12:30:PM</h6>
                            </td>
                            <td>
                                <h6>$14.25</h6>
                            </td>
                            <td>
                                <h6>pending</h6>
                            </td>
                            <td>
                                <h6>
                                    <i class="ri-eye-line"></i>
                                </h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- tracking page end -->

@endsection
    <!-- Footer Section Start -->
   