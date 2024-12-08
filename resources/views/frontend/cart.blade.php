
    <!-- header end -->

    @extends('frontend.layout.main')
    @section('main-container')  
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Cart</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <!-- <div class="cart_counter">
                <div class="countdownholder">
                    Your cart will be expired in<span id="timer"></span> minutes!
                </div>
                <a href="checkout.html" class="cart_checkout btn btn-solid btn-xs">check out</a>
            </div> -->
            <div class="table-responsive">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th>id</th>
                            <th>productid</th>
                            <th>price</th>
                            <th>quantity</th>
                            
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $product)
                        <tr>
                            {{-- <td>
                                <a href="product-page(accordian).html">
                                    <img src="{{ asset('uploads/' . $product->file1) }}" width="50px">
                                </a>
                            </td> --}}
                            <td>
                                <a href="product-page(accordian).html">

                                    {{$product->id}}
                                </a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group qty-container">
                                                <button class="btn qty-btn-minus">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </button>
                                                <input type="number" readonly="" name="qty"
                                                    class="form-control input-qty" value="1">
                                                <button class="btn qty-btn-plus">
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col table-price">
                                        <h2 class="td-color">{{$product->productid}}</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="product-page(accordian).html" class="icon remove-btn">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td class="table-price">
                                <h2>{{$product->price}}</h2>
                            </td>
                            <td>
                                <h2>{{$product->quantity}}</h2>
                                {{-- <div class="qty-box"> <h2>{{$product->quantity}}</h2>
                                    <div class="input-group qty-container">
                                        <button class="btn qty-btn-minus">
                                            <i class="ri-arrow-left-s-line"></i>
                                        </button>
                                        <input type="number" readonly="" name="qty" class="form-control input-qty"
                                            value="1">
                                        <button class="btn qty-btn-plus">
                                            <i class="ri-arrow-right-s-line"></i>
                                        </button>
                                    </div> --}}
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">{{$product->price}}</h2>
                            </td>
                            <td>
                                <a href="{{Route('deleteproduct',['id'=>$product->id])}}"title="Change Status" id="{{$product->id}}"class="delete_btn_ajax icon remove-btn" data-toggle="tooltip"><span class="fas fa-trash material-icons" style="color:red;"></a><input type="hidden" class="delete_id_value " value='{{$product->id}}'>
                                {{-- <a href="#!" class="icon remove-btn"> --}}
                                    <i class="ri-close-line"></i>
                                </a>
                            </td>
                        </tr>
                        
                    </tbody>
                    {{-- <tbody>
                        <tr>
                            <td>
                                <a href="product-page(accordian).html">
                                    <img src="../assets/images/fashion-1/product/18.jpg" class="img-fluid" alt="">
                                </a>
                            </td>
                            <td><a href="product-page(accordian).html">Tan Cargo Shorts</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group qty-container">
                                                <button class="btn qty-btn-minus">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </button>
                                                <input type="number" readonly="" name="qty"
                                                    class="form-control input-qty" value="3">
                                                <button class="btn qty-btn-plus">
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col table-price">
                                        <h2 class="td-color">$9.96 <del>$12.00</del></h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="#!" class="icon remove-btn">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td class="table-price">
                                <h2>$9.96 <del>$12.00</del></h2>
                                <h6 class="theme-color">You Save : $2.04</h6>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group qty-container">
                                        <button class="btn qty-btn-minus">
                                            <i class="ri-arrow-left-s-line"></i>
                                        </button>
                                        <input type="number" readonly="" name="qty" class="form-control input-qty"
                                            value="3">
                                        <button class="btn qty-btn-plus">
                                            <i class="ri-arrow-right-s-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">$29.88</h2>
                            </td>
                            <td>
                                <a href="#!" class="icon remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody> --}}
                        {{-- <tr>
                            <td>
                                <a href="product-page(accordian).html">
                                    <img src="../assets/images/product-details/product/17.jpg" class="img-fluid" alt="">
                                </a>
                            </td>
                            <td><a href="product-page(accordian).html">Gym Coords Set (Brown)</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group qty-container">
                                                <button class="btn qty-btn-minus">
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </button>
                                                <input type="number" readonly="" name="qty"
                                                    class="form-control input-qty" value="1">
                                                <button class="btn qty-btn-plus">
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col table-price">
                                        <h2 class="td-color">$63.00</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="#!" class="icon remove-btn">
                                                <i class="ri-close-line"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td class="table-price">
                                <h2>$20.00</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group qty-container">
                                        <button class="btn qty-btn-minus">
                                            <i class="ri-arrow-left-s-line"></i>
                                        </button>
                                        <input type="number" readonly="" name="qty" class="form-control input-qty"
                                            value="1">
                                        <button class="btn qty-btn-plus">
                                            <i class="ri-arrow-right-s-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">$20.00</h2>
                            </td>
                            <td>
                                <a href="#!" class="icon remove-btn">
                                    <i class="ri-close-line"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot> --}}
                        
                    @endforeach
                </table>
            </div>

            <div class="row cart-buttons">
                <div class="col-6">
                    <a href="{{url('/product')}}" class="btn btn-solid text-capitalize">continue
                        shopping</a>
                </div>
                <div class="col-6">
                    <a href="{{url('/checkout')}}" class="btn btn-solid text-capitalize">check out</a>
                </div>
            </div>
        </div>
    </section>
    <!--section end-->


   @endsection