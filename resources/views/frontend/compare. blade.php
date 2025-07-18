@extends('frontend.layout.main')
    @section('main-container')  
    <!-- header end -->


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
            <div class="row">
                <div class="col-sm-12">
                    <div class="compare-page">
                        <div class="table-wrapper table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="th-compare">
                                        <td>Action</td>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                        <th class="item-row">
                                            <button type="button" class="remove-compare">Remove</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-compare">
                                    <tr>
                                        <th class="product-name">Product Name</th>
                                        <td class="grid-link__title">Cut Dress</td>
                                        <td class="grid-link__title">Floral Dress</td>
                                        <td class="grid-link__title">Notched Dress</td>
                                        <td class="grid-link__title">Notched Dress</td>
                                    </tr>
                                    <tr>
                                        <th class="product-name">Product Image</th>
                                        <td class="item-row"><img src="../assets/images/pro3/1.jpg" alt=""
                                                class="featured-image">
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                        <td class="item-row"><img src="../assets/images/pro3/33.jpg" alt=""
                                                class="featured-image">
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                        <td class="item-row"><img src="../assets/images/pro3/35.jpg" alt=""
                                                class="featured-image">
                                            <div class="compare-lable"><span class="lable4">on sale</span></div>
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                        <td class="item-row"><img src="../assets/images/pro3/27.jpg" alt=""
                                                class="featured-image">
                                            <div class="product-price product_price"><strong>On Sale:
                                                </strong><span>$89,00</span></div>
                                            <form class="variants clearfix">
                                                <input type="hidden">
                                                <button title="Add to Cart" class="add-to-cart btn btn-solid">Add to
                                                    Cart</button>
                                            </form>
                                            <p class="grid-link__title hidden">Cut Dress</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="product-name">Product Description</th>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                        <td class="item-row">
                                            <p class="description-compare">Add an extra dose of style with this raw look
                                                henley t-shirt from the house...</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="product-name">Availability</th>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                        <td class="available-stock">
                                            <p>Available In stock</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- Footer Section Start -->
  @endsection