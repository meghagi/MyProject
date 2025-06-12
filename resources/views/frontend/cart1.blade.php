@extends('frontend.layout.main')
@section('main-container')  
<div class="container">
    <h1>Our Products</h1>
    <div class="row">
        {{-- @foreach($products as $product) --}}
        @if($products)

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ url('uploads/' . $products->file1) }}" class="card-img-top" alt="{{ $products->product_name }}">
                <div class="card-body">
                    <a class="product-title" href="{{ route('product-page(accordian)', ['id' => $products->id]) }}" title="{{ $products->product_name }}">
                        <h5 class="card-title" style="color:black;">{{ $products->product_name }}</h5>
                    </a>
                    <p class="card-text">{{ $products->description }}</p>
                    <p class="card-text"><strong>Price:</strong> ₹{{ $products->price }}</p>
                    <div class="qty-box">
                        <div class="input-group qty-container">
                            <button class="btn qty-btn-minus">
                                <i class="ri-subtract-line"></i>
                            </button>
                            <input type="number" readonly name="qty" class="form-control input-qty" value="1">
                            <button class="btn qty-btn-plus">
                                <i class="ri-add-line"></i>
                            </button>
                        </div>
                    </div>
                    <a href="{{Route('cart',['id'=>$products->id])}}"> <button type="button" class="btn btn-dark mt-3" style="width:100px;">Save</button></a>
                    <button type="button" class="btn btn-danger mt-2 delete_btn_ajax" style="width:100px;" id="{{ $products->id }}">Remove</button>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
        @endif

    </div>

    <div class="table-responsive mt-5">
        <h2>Cart Summary</h2>
        <table class="table cart-table">
            <thead>
                <tr class="table-head">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($products as $product) --}}
                <tr>
                    <td data-label="ID">{{ $products->id }}</td>
                    <td data-label="Product Name">{{ $products->product_name }}</td>
                    <td data-label="Price">₹{{ $products->price }}</td>
                    <td data-label="Quantity">{{ $products->quantity }}</td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.3/dist/sweetalert2.all.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete_btn_ajax').click(function(e) {
            e.preventDefault();
            var deleteid = $(this).attr('id');
            var url = "{{ route('deleteproduct', ':id') }}";
            var table_row = $(this).closest('tr');

            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#9A2124',
                confirmButtonColor: '#34A853',
                confirmButtonText: 'Yes, Delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: url.replace(':id', deleteid),
                        data: {
                            _token: '{{ csrf_token() }}',
                            delete_id: deleteid
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Your record has been deleted.',
                                'success'
                            ).then(() => {
                                table_row.remove();
                            });
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Something went wrong. Please try again.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
