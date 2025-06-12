@extends('frontend.layout.main')

@section('main-container')  
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Cart</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="https://vidhyasagarfoundation.intouchsoftwaresolution.com/">
                            vidhyasagarfoundation.intouchsoftwaresolution.com
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="table-responsive">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th>ID</th>
                            <th>Product ID</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart1 as $cart2)
                        <tr>
                            <td data-label="ID">{{ $cart2->id }}</td>
                            <td data-label="Product ID">{{ $cart2->productid }}</td>
                            <td data-label="Price">{{ $cart2->price }}</td>
                            <td data-label="Quantity">
                                <input type="number" class="form-control" name="quantity[]" 
                                       value="{{ $cart2->quantity }}" min="1">
                            </td>
                            <td data-label="Action">
                                <a href="{{ route('deletecart', ['id' => $cart2->id]) }}" 
                                   title="Delete Item" class="delete_btn_ajax" data-toggle="tooltip">
                                    <span class="fas fa-trash material-icons" style="color:red;"></span>
                                </a>
                                <input type="hidden" class="delete_id_value" value="{{ $cart2->id }}">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="row cart-buttons">
                <div class="col-6">
                    <a href="{{ url('/product') }}" class="btn btn-solid text-capitalize">
                        Continue Shopping
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{ url('/checkout') }}" class="btn btn-solid text-capitalize">
                        Checkout
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
@endsection
