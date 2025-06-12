<style>
    /* Mobile-specific adjustments */
@media (max-width: 768px) {
    .cart-table {
        font-size: 14px;
    }

    .cart-table img {
        width: 70px; /* Resize product images */
        height: auto;
    }

    .cart-table .table-head {
        display: none; /* Hide table headers on small screens */
    }

    .cart-table tbody tr {
        display: block; /* Stack rows for better readability */
        margin-bottom: 15px;
        border: 1px solid #ddd;
        padding: 10px;
    }

    .cart-table td {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
    }

    .cart-buttons {
        flex-direction: column;
    }

    .cart-buttons .btn {
        width: 100%;
        margin-bottom: 10px;
    }
}

    </style>



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
                        <li ><a href="https://vidhyasagarfoundation.intouchsoftwaresolution.com/">vidhyasagarfoundation.intouchsoftwaresolution.com</a></li>

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
                        {{-- @foreach($cart as $product) --}}
                        <tr>
                            <td data-label="ID">{{$cart->id}}</td>
                            <td data-label="Product ID">{{$cart->productid}}</td>
                            <td data-label="Price">{{$cart->price}}</td>
                            <td data-label="Quantity">
                                <input type="number" class="form-control" value="{{$cart->quantity}}" min="1">
                            </td>
                            <td data-label="Action">
                                <a href="{{Route('cart',['id'=>$cart->id])}}"title="Change Status" id="{{$cart->id}}"class="delete_btn_ajax " data-toggle="tooltip"><span class="fas fa-trash material-icons" style="color:red;"></a><input type="hidden" class="delete_id_value " value='{{$cart->id}}'>

                                </a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
            
            <div class="row cart-buttons">
                <div class="col-6">
                    <a href="{{url('/index')}}" class="btn btn-solid text-capitalize">continue
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