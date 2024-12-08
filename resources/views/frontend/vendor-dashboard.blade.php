
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Vendor dashboard</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Vendor dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space user-dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image vendor-image">
                                <img src="../assets/images/logos/17.png" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>Fashion Store</h5>
                                <h6>750 followers | 10 review</h6>
                                <h6>mark.enderess@mail.com</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" class="nav-link active" href="#dashboard"><i
                                            class="ri-home-line"></i> dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" class="nav-link" href="#products"><i
                                            class="ri-product-hunt-line"></i> products</a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" class="nav-link" href="#orders"><i
                                            class="ri-file-text-line"></i> orders</a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" class="nav-link" href="#profile"><i
                                            class="ri-user-3-line"></i> profile</a>
                                </li>
                                <li class="nav-item">
                                    <a data-bs-toggle="tab" class="nav-link" href="#settings"><i
                                            class="ri-settings-line"></i> settings</a>
                                </li>
                                <li class="nav-item logout-cls">
                                    <a href="index-2.html" class="btn loagout-btn">
                                        <i class="ri-logout-box-r-line"></i> Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="faq-content tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="counter-section">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="../assets/images/icon/dashboard/order.png" alt=""
                                                class="img-fluid">
                                            <div>
                                                <h3>25</h3>
                                                <h5>total products</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="../assets/images/icon/dashboard/sale.png" alt=""
                                                class="img-fluid">
                                            <div>
                                                <h3>12500</h3>
                                                <h5>total sales</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="counter-box">
                                            <img src="../assets/images/icon/dashboard/homework.png" alt=""
                                                class="img-fluid">
                                            <div>
                                                <h3>50</h3>
                                                <h5>order pending</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="chart-order"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-sm-4 g-3">
                                <div class="col-12">
                                    <div class="dashboard-table">
                                        <div class="wallet-table">
                                            <div class="top-sec mb-3">
                                                <h3>trending products</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table cart-table order-table">
                                                    <thead>
                                                        <tr>
                                                            <th>image</th>
                                                            <th>product name</th>
                                                            <th>price</th>
                                                            <th>sales</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="image-box">
                                                                <img src="../assets/images/fashion-1/product/5.jpg"
                                                                    alt="" class="blur-up lazyloaded">
                                                            </td>
                                                            <td>neck velvet dress</td>
                                                            <td>$205</td>
                                                            <td>1000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="image-box">
                                                                <img src="../assets/images/fashion-1/product/13.jpg"
                                                                    alt="" class="blur-up lazyloaded">
                                                            </td>
                                                            <td>belted trench coat</td>
                                                            <td>$350</td>
                                                            <td>800</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="image-box">
                                                                <img src="../assets/images/fashion-1/product/9.jpg"
                                                                    alt="" class="blur-up lazyloaded">
                                                            </td>
                                                            <td>man print tee</td>
                                                            <td>$150</td>
                                                            <td>750</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="dashboard-table">
                                        <div class="wallet-table">
                                            <div class="top-sec mb-3">
                                                <h3>recent orders</h3>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table cart-table order-table">
                                                    <thead>
                                                        <tr>
                                                            <th>order id</th>
                                                            <th>product details</th>
                                                            <th>status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>#21515</td>
                                                            <td>neck velvet dress</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-pending custom-badge rounded-0">pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#78153</td>
                                                            <td>belted trench coat</td>

                                                            <td>
                                                                <span
                                                                    class="badge bg-debit custom-badge rounded-0">cancelled</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#51512</td>
                                                            <td>man print tee</td>

                                                            <td>
                                                                <span
                                                                    class="badge bg-credit custom-badge rounded-0">shipped</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#78153</td>
                                                            <td>belted trench coat</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-pending custom-badge rounded-0">pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#51512</td>
                                                            <td>man print tee</td>
                                                            <td>
                                                                <span
                                                                    class="badge bg-credit custom-badge rounded-0">shipped</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="products">
                            <div class="dashboard-table">
                                <div class="wallet-table">
                                    <div class="top-sec">
                                        <h3>all products</h3>
                                        <a href="#!" class="btn btn-sm btn-solid">+ add new</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table cart-table order-table">
                                            <thead>
                                                <tr>
                                                    <th>image</th>
                                                    <th>product name</th>
                                                    <th>category</th>
                                                    <th>price</th>
                                                    <th>stock</th>
                                                    <th>sales</th>
                                                    <th>edit/delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="image-box">
                                                        <img src="../assets/images/fashion-1/product/5.jpg" alt=""
                                                            class="blur-up lazyloaded">
                                                    </td>
                                                    <td>neck velvet dress</td>
                                                    <td>women clothes</td>
                                                    <td class="fw-bold text-theme">$205</td>
                                                    <td>1000</td>
                                                    <td>2000</td>
                                                    <td>
                                                        <a href="#!">
                                                            <i class="fa fa-pencil-square-o me-1"></i>
                                                        </a>
                                                        <a href="#!">
                                                            <i class="fa fa-trash-o ms-1 text-theme"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image-box">
                                                        <img src="../assets/images/fashion-1/product/9.jpg" alt=""
                                                            class="blur-up lazyloaded">
                                                    </td>
                                                    <td>belted trench coat</td>
                                                    <td>women clothes</td>
                                                    <td class="fw-bold text-theme">$350</td>
                                                    <td>800</td>
                                                    <td>350</td>
                                                    <td>
                                                        <a href="#!">
                                                            <i class="fa fa-pencil-square-o me-1"></i>
                                                        </a>
                                                        <a href="#!">
                                                            <i class="fa fa-trash-o ms-1 text-theme"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image-box">
                                                        <img src="../assets/images/fashion-1/product/1.jpg" alt=""
                                                            class="blur-up lazyloaded">
                                                    </td>
                                                    <td>men print tee</td>
                                                    <td>men clothes</td>
                                                    <td class="fw-bold text-theme">$150</td>
                                                    <td>750</td>
                                                    <td>150</td>
                                                    <td>
                                                        <a href="#!">
                                                            <i class="fa fa-pencil-square-o me-1"></i>
                                                        </a>
                                                        <a href="#!">
                                                            <i class="fa fa-trash-o ms-1 text-theme"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image-box">
                                                        <img src="../assets/images/fashion-1/product/15.jpg" alt=""
                                                            class="blur-up lazyloaded">
                                                    </td>
                                                    <td>woman print tee</td>
                                                    <td>women clothes</td>
                                                    <td class="fw-bold text-theme">$150</td>
                                                    <td>750</td>
                                                    <td>150</td>
                                                    <td>
                                                        <a href="#!">
                                                            <i class="fa fa-pencil-square-o me-1"></i>
                                                        </a>
                                                        <a href="#!">
                                                            <i class="fa fa-trash-o ms-1 text-theme"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image-box">
                                                        <img src="../assets/images/fashion-1/product/12.jpg" alt=""
                                                            class="blur-up lazyloaded">
                                                    </td>
                                                    <td>men print tee</td>
                                                    <td>men clothes</td>
                                                    <td class="fw-bold text-theme">$150</td>
                                                    <td>750</td>
                                                    <td>150</td>
                                                    <td>
                                                        <a href="#!">
                                                            <i class="fa fa-pencil-square-o me-1"></i>
                                                        </a>
                                                        <a href="#!">
                                                            <i class="fa fa-trash-o ms-1 text-theme"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="image-box">
                                                        <img src="../assets/images/fashion-1/product/18.jpg" alt=""
                                                            class="blur-up lazyloaded">
                                                    </td>
                                                    <td>men print tee</td>
                                                    <td>men clothes</td>
                                                    <td class="fw-bold text-theme">$150</td>
                                                    <td>750</td>
                                                    <td>150</td>
                                                    <td>
                                                        <a href="#!">
                                                            <i class="fa fa-pencil-square-o me-1"></i>
                                                        </a>
                                                        <a href="#!">
                                                            <i class="fa fa-trash-o ms-1 text-theme"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <div class="dashboard-table">
                                <div class="wallet-table">
                                    <div class="top-sec">
                                        <h3>orders</h3>
                                        <a href="#!" class="btn btn-sm btn-solid">add product</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table cart-table order-table">
                                            <thead>
                                                <tr>
                                                    <th>order id</th>
                                                    <th>product details</th>
                                                    <th>status</th>
                                                    <th>price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#125021</td>
                                                    <td>neck velvet dress</td>
                                                    <td><span
                                                            class="badge bg-credit custom-badge rounded-0">shipped</span>
                                                    </td>
                                                    <td>$205</td>
                                                </tr>
                                                <tr>
                                                    <td>#521214</td>
                                                    <td>belted trench coat</td>
                                                    <td><span
                                                            class="badge bg-credit custom-badge rounded-0">shipped</span>
                                                    </td>
                                                    <td>$350</td>
                                                </tr>
                                                <tr>
                                                    <td>#521021</td>
                                                    <td>men print tee</td>
                                                    <td><span
                                                            class="badge bg-pending custom-badge rounded-0">pending</span>
                                                    </td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>#245021</td>
                                                    <td>woman print tee</td>
                                                    <td><span
                                                            class="badge bg-credit custom-badge rounded-0">shipped</span>
                                                    </td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>#122141</td>
                                                    <td>men print tee</td>
                                                    <td><span
                                                            class="badge bg-credit custom-badge rounded-0">shipped</span>
                                                    </td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>#125015</td>
                                                    <td>men print tee</td>
                                                    <td><span
                                                            class="badge bg-pending custom-badge rounded-0">pending</span>
                                                    </td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>#245021</td>
                                                    <td>woman print tee</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-credit custom-badge rounded-0">shipped</span>
                                                    </td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>#122141</td>
                                                    <td>men print tee</td>
                                                    <td><span
                                                            class="badge bg-debit custom-badge rounded-0">cancelled</span>
                                                    </td>
                                                    <td>$150</td>
                                                </tr>
                                                <tr>
                                                    <td>#125015</td>
                                                    <td>men print tee</td>
                                                    <td><span
                                                            class="badge bg-pending custom-badge rounded-0">pending</span>
                                                    </td>
                                                    <td>$150</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="dashboard-box">
                                <div class="dashboard-title">
                                    <h4>profile</h4>
                                    <span data-toggle="modal" data-bs-target="#edit-profile">edit</span>
                                </div>
                                <div class="dashboard-detail">
                                    <ul>
                                        <li class="details">
                                            <h5><span>company name</span> Fashion Store</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>email address</span> mark.enderess@mail.com</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>Country / Region</span> Downers Grove, IL</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>Year Established</span> 2018</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>Total Employees</span> Fashion Store</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>category</span> clothing</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>street address</span> 549 Sulphur Springs Road</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>city/state</span> Downers Grove, IL</h5>
                                        </li>
                                        <li class="details">
                                            <h5><span>zip</span> 96369</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <div class="dashboard-box">
                                <div class="dashboard-title">
                                    <h4>settings</h4>
                                </div>
                                <div class="dashboard-detail">
                                    <div class="account-setting">
                                        <h5>Notifications</h5>
                                        <ul class="setting-list">
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">Allow Desktop
                                                    Notifications</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios" id="exampleRadios2" value="option2">
                                                <label class="form-check-label" for="exampleRadios2">Enable
                                                    Notifications</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios" id="exampleRadios3" value="option3">
                                                <label class="form-check-label" for="exampleRadios3">Get
                                                    notification for my
                                                    own activity</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios" id="exampleRadios4" value="option4">
                                                <label class="form-check-label" for="exampleRadios4">DND</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="account-setting">
                                        <h5>deactivate account</h5>
                                        <ul class="setting-list">
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios1" id="exampleRadios45" value="option4" checked>
                                                <label class="form-check-label" for="exampleRadios45">
                                                    I have a privacy concern
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios1" id="exampleRadios5" value="option5">
                                                <label class="form-check-label" for="exampleRadios5">
                                                    This is temporary
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios1" id="exampleRadios6" value="option6">
                                                <label class="form-check-label" for="exampleRadios6">
                                                    other
                                                </label>
                                            </li>
                                        </ul>
                                        <button type="button" class="btn btn-solid btn-xs mt-4">Deactivate
                                            Account</button>
                                    </div>
                                    <div class="account-setting">
                                        <h5>Delete account</h5>
                                        <ul class="setting-list">
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios3" id="exampleRadios7" value="option7" checked>
                                                <label class="form-check-label" for="exampleRadios7">
                                                    No longer usable
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios3" id="exampleRadios8" value="option8">
                                                <label class="form-check-label" for="exampleRadios8">
                                                    Want to switch on other account
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="radio_animated form-check-input" type="radio"
                                                    name="exampleRadios3" id="exampleRadios9" value="option9">
                                                <label class="form-check-label" for="exampleRadios9">
                                                    other
                                                </label>
                                            </li>
                                        </ul>
                                        <button type="button" class="btn btn-solid btn-xs mt-3">Delete
                                            Account</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->

@endsection
    <!-- Footer Section Start -->
   