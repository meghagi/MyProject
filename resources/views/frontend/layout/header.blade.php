<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart - Multi-purpose E-commerce Html Template">
    <meta name="keywords" content="multikart, e-commerce, HTML template">
    <meta name="author" content="Multikart">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{url('../assets/images/vidhyasagar.jpg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('../assets/images/vidhyasagar.jpg')}}" type="image/x-icon">
    <title>VidyasagarFoundation</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome CSS -->
     <!-- Font Awesome CDN (Proper link) -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMRZDHgP3g5paNdF+LuygX/lJGOA+2p2FrcC5zV" crossorigin="anonymous"> -->

     <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">

       <link rel="stylesheet" type="text/css" href="{{url('../assets/css/vendors/font-awesome.css')}}">

    <!-- Other Icons -->
    <link rel="stylesheet" href="{{url('../assets/css/flaticon_expovent.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{url('../assets/css/vendors/remixicon.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{url('../assets/css/vendors/themify-icons.css')}}">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('../assets/css/vendors/slick.css')}}">

    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('../assets/css/vendors/animate.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('../assets/css/vendors/bootstrap.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('../assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</head>

<script>
    $(document).ready(function() {
        $('.home-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });
    });
</script>







<body class="theme-color-1">


    <!-- header start -->
    <header>
        <div class="top-header">
            <div class="mobile-fix-option"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our VidyasagarFoundation</li>
                                <li><i class="ri-phone-fill"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="{{url('/wishlist')}}"><i class="ri-heart-fill"></i></a>
                            </li>
                            <li class="onhover-dropdown">
                                <div class="cart-media name-usr">
                                    @auth
                                        <span>{{ Auth::user()->name }}</span>
                                    @endauth
                                    <i data-feather="user"></i>
                                </div>
                            </li>

                            {{-- <li class="onhover-dropdown mobile-account"> <i class="ri-user-fill"></i>
                                My Account
                                <ul class="onhover-show-div">
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">register</a></li>
                                </ul>
                            </li> --}}
                            <li class="onhover-dropdown mobile-account">
                                <i class="ri-user-fill"></i> My Account
                                <ul class="onhover-show-div">
                                    @if (Route::has('login'))
                                        @auth
                                            @if (Auth::user()->role === "admin")
                                                <li>
                                                    <a href="{{ route('admindashboard') }}">Admin Dashboard</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('userdashboard1') }}">Dashboard</a>
                                                </li>
                                            @endif
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('login') }}">Login</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}">Register</a>
                                            </li>
                                        @endauth
                                    @endif
                                </ul>
                            </li>
                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="navbar">
                                <a href="#!" onclick="openNav()">
                                    {{-- <div class="bar-style"><i class="ri-bar-chart-horizontal-line sidebar-bar"></i>
                                    </div> --}}
                                </a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="#!" class="sidebar-overlay" onclick="closeNav()"></a>
                                  {{--  <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-start"><i
                                                    class="ri-arrow-left-s-line pe-2"></i>
                                                Back</div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li> <a href="#!">clothing</a>
                                                <ul class="mega-menu clothing-menu">
                                                    <li>
                                                        <div class="row m-0">
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>women's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#!">dresses</a></li>
                                                                        <li><a href="#!">skirts</a></li>
                                                                        <li><a href="#!">western wear</a></li>
                                                                        <li><a href="#!">ethic wear</a></li>
                                                                        <li><a href="#!">sport wear</a></li>
                                                                    </ul>
                                                                    <h5>men's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#!">sports wear</a></li>
                                                                        <li><a href="#!">western wear</a></li>
                                                                        <li><a href="#!">ethic wear</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>accessories</h5>
                                                                    <ul>
                                                                        <li><a href="#!">fashion jewellery</a>
                                                                        </li>
                                                                        <li><a href="#!">caps and hats</a></li>
                                                                        <li><a href="#!">precious jewellery</a>
                                                                        </li>
                                                                        <li><a href="#!">necklaces</a></li>
                                                                        <li><a href="#!">earrings</a></li>
                                                                        <li><a href="#!">wrist wear</a></li>
                                                                        <li><a href="#!">ties</a></li>
                                                                        <li><a href="#!">cufflinks</a></li>
                                                                        <li><a href="#!">pockets squares</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="#!" class="mega-menu-banner"><img
                                                                        src="{{url('../assets/images/mega-menu/fashion.jpg')}}"
                                                                        alt="" class="img-fluid blur-up lazyload"></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#!">bags</a>
                                                <ul>
                                                    <li><a href="#!">shopper bags</a></li>
                                                    <li><a href="#!">laptop bags</a></li>
                                                    <li><a href="#!">clutches</a></li>
                                                    <li> <a href="#!">purses</a>
                                                        <ul>
                                                            <li><a href="#!">purses</a></li>
                                                            <li><a href="#!">wallets</a></li>
                                                            <li><a href="#!">leathers</a></li>
                                                            <li><a href="#!">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#!">bags</a>
                                                <ul>
                                                    <li><a href="#!">shopper bags</a></li>
                                                    <li><a href="#!">laptop bags</a></li>
                                                    <li><a href="#!">clutches</a></li>
                                                    <li> <a href="#!">purses</a>
                                                        <ul>
                                                            <li><a href="#!">purses</a></li>
                                                            <li><a href="#!">wallets</a></li>
                                                            <li><a href="#!">leathers</a></li>
                                                            <li><a href="#!">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#!">bags</a>
                                                <ul>
                                                    <li><a href="#!">shopper bags</a></li>
                                                    <li><a href="#!">laptop bags</a></li>
                                                    <li><a href="#!">clutches</a></li>
                                                    <li> <a href="#!">purses</a>
                                                        <ul>
                                                            <li><a href="#!">purses</a></li>
                                                            <li><a href="#!">wallets</a></li>
                                                            <li><a href="#!">leathers</a></li>
                                                            <li><a href="#!">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#!">footwear</a>
                                                <ul>
                                                    <li><a href="#!">sport shoes</a></li>
                                                    <li><a href="#!">formal shoes</a></li>
                                                    <li><a href="#!">casual shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#!">watches</a></li>
                                            <li> <a href="#!">Accessories</a>
                                                <ul>
                                                    <li><a href="#!">fashion jewellery</a></li>
                                                    <li><a href="#!">caps and hats</a></li>
                                                    <li><a href="#!">precious jewellery</a></li>
                                                    <li> <a href="#!">more..</a>
                                                        <ul>
                                                            <li><a href="#!">necklaces</a></li>
                                                            <li><a href="#!">earrings</a></li>
                                                            <li><a href="#!">wrist wear</a></li>
                                                            <li> <a href="#!">accessories</a>
                                                                <ul>
                                                                    <li><a href="#!">ties</a></li>
                                                                    <li><a href="#!">cufflinks</a></li>
                                                                    <li><a href="#!">pockets squares</a></li>
                                                                    <li><a href="#!">helmets</a></li>
                                                                    <li><a href="#!">scarves</a></li>
                                                                    <li> <a href="#!">more...</a>
                                                                        <ul>
                                                                            <li><a href="#!">accessory gift
                                                                                    sets</a>
                                                                            </li>
                                                                            <li><a href="#!">travel
                                                                                    accessories</a>
                                                                            </li>
                                                                            <li><a href="#!">phone cases</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#!">belts & more</a></li>
                                                            <li><a href="#!">wearable</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#!">house of design</a></li>
                                            <li> <a href="#!">beauty & personal care</a>
                                                <ul>
                                                    <li><a href="#!">makeup</a></li>
                                                    <li><a href="#!">skincare</a></li>
                                                    <li><a href="#!">premium beauty</a></li>
                                                    <li> <a href="#!">more</a>
                                                        <ul>
                                                            <li><a href="#!">fragrances</a></li>
                                                            <li><a href="#!">luxury beauty</a></li>
                                                            <li><a href="#!">hair care</a></li>
                                                            <li><a href="#!">tools & brushes</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#!">home & decor</a></li>
                                            <li><a href="#!">kitchen</a></li>
                                        </ul>
                                    </nav> --}}
                                </div>
                            </div>
                            <div class="brand-logo">
                                <a href="{{url('/home')}}">
                                    <img src="{{url('../assets/images/vidhyasagar2.jpg')}}" class="w-350 img-fluid blur-up lazyload" alt=""style="width: 100%; height: 100%;">
                                </a>
                            </div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="ri-bar-chart-horizontal-line sidebar-bar"></i>
                                    </div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li class="mobile-box">
                                            <div class="mobile-back text-end">Menu<i class="ri-close-line"></i></div>
                                        </li>
                                        <li><a href="{{url('/index')}}">Home</a></li>
                                        <li class="mega hover-cls">
                                            <a href="{{url('/about')}}">About <div class="lable-nav">new</div></a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row g-xl-4 g-0">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>invoice template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="{{url('frontend/invoice-1.php')}}">invoice
                                                                                    1</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="{{url('frontend/invoice-2.php')}}">invoice
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="{{url('frontend/invoice-3.php')}}">invoice
                                                                                    3</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="{{url('frontend/invoice-4.php')}}">invoice
                                                                                    4</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="{{url('frontend/invoice-5.php')}}">invoice
                                                                                    5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title">
                                                                        <h5>elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="elements.html">
                                                                                    elements page<i
                                                                                        class="ms-2 ri-flashlight-fill icon-trend"></i>
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/welcome.html">welcome</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/new-product-announcement.html">announcement</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/abandonment-email.html">abandonment</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/offer.html">offer</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/offer-2.html">offer
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/product-review.html">review</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/featured-products.html">featured
                                                                                    product</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/black-friday.html">black
                                                                                    friday</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/christmas.html">christmas</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/cyber-monday.html">cyber-monday</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/flash-sale.html">flash
                                                                                    sale</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/email-order-success.html">order
                                                                                    success</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="https://themes.pixelstrap.com/multikart/email-template/email-order-success-two.html">order
                                                                                    success 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>cookie bar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="{{url('frontend/index-2.php')}}">bottom<i
                                                                                        class="ms-2 ri-flashlight-fill icon-trend"></i></a>
                                                                            </li>
                                                                            <li><a href="{{url('fashion-4.php')}}">bottom left</a>
                                                                            </li>
                                                                            <li><a href="{{url('frontend/bicycle.php')}}">bottom right</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title">
                                                                        <h5>search heare</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="marketplace-demo-2.html">ajax
                                                                                    search<i
                                                                                        class="ms-2 ri-flashlight-fill icon-trend"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>model</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="{{url('frontend/index-2.php')}}">Newsletter</a></li>
                                                                            <li><a href="{{url('frontend/index-2.php')}}">exit<i
                                                                                        class="ms-2 ri-flashlight-fill icon-trend"></i></a>
                                                                            </li>
                                                                            <li><a href="{{url('frontend/christmas.php')}}">christmas</a>
                                                                            </li>
                                                                            <li><a href="{{url('frontend/furniture-3.php')}}">black
                                                                                    friday</a></li>
                                                                            <li><a href="{{url('frontend/fashion-4.php')}}">cyber
                                                                                    monday</a></li>
                                                                            <li><a href="marketplace-demo-3.php')}}">new
                                                                                    year</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="{{url('frontend/nursery.php')}}">cart modal
                                                                                    popup</a></li>
                                                                            <li><a href="{{url('frontend/bags.php')}}">cart top</a></li>
                                                                            <li><a href="{{url('frontend/shoes.php')}}">cart bottom</a>
                                                                            </li>
                                                                            <li><a href="{{url('frontend/watch.php')}}">cart left</a></li>
                                                                            <li><a href="{{url('frontend/tools.php')}}">cart right</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="{{url('../assets/images/menu-banner.jpg')}}" alt=""
                                                                    class="img-fluid mega-img d-xl-block d-none">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('/gelpens')}}">Gelpens</a>
                                            <ul>
                                                <li>
                                                    <a href="{{url('frontend/category-page(vegetables).php')}}">tab style<span
                                                            class="new-tag">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(top-filter).php')}}">top filter</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(modern).php')}}">modern</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page.php')}}">left sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(right).php')}}">right sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(no-sidebar).php')}}">no sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(category-slider).php')}}">Category Slider</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(sidebar-popup).php')}}">sidebar popup</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(metro).php')}}">metro</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(full-width).php')}}">full width</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(load-more).php')}}">load more</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(2-grid).php')}}">two grid</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(3-grid).ht.php')}}">three grid</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('frontend/category-page(4-grid).ht.php')}}">four grid</a>
                                                </li>
                                                <li>
                                                    <a href="category-page(list-view).ht.php')}}">list view</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega hover-cls">
                                            {{-- <a href="{{url('/cart1')}}">cart</a> --}}
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row g-xl-4 g-0">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Page</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="{{url('frontend/product-page(thumbnail).php')}}">Product
                                                                                    Thumbnail</a>
                                                                            </li>
                                                                            <li>
                                                                                Image</a>
                                                                            </li>
                                                                            <li>
                                                                                Slider</a>
                                                                                <a href="{{url('product-page(4-image).php')}}">Product
                                                                            </li>
                                                                            <li>
                                                                                Accordion</a>
                                                                                <a href="{{url('product-page(slider).php')}}">Product
                                                                            </li>
                                                                            <li>
                                                                                Sticky</a>
                                                                                <a href="{{url('frontend/product-page(accordian).php')}}">Product
                                                                            </li>
                                                                            <li>
                                                                                
                                                                                <a href="{{url('frontend/product-page(sticky).php')}}">Product
                                                                                    
                                                                                    Vertical Tab</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Page</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a
                                                                                    href="{{url('product-page(left-sidebar).php')}}">Product
                                                                                    Sidebar Left</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="{{url('product-page(right-sidebar).php')}}">Product
                                                                                    Sidebar Right</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('product-page(accordian).php')}}">Product
                                                                                    No Sidebar</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('product-page(accordian).php')}}">Product
                                                                                    Column Thumbnail</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="{{url('product-page(image-outside).php')}}">Product
                                                                                    Thumbnail Image Outside</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Variants Style</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="{{url('/product-page(3-column).php')}}">Variant
                                                                                    Rectangle</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Variant
                                                                                    Circle</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Variant
                                                                                    Image Swatch</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(3-column).php')}}">Variant
                                                                                    Color</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="{{url('/product-page(vertical-tab).php')}}">Variant
                                                                                    Radio Button</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(sticky).php')}}">Variant
                                                                                    Dropdown</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Features</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Product
                                                                                    Simple</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="{{url('/product-page(left-sidebar).php')}}">Product
                                                                                    Classified</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Size
                                                                                    Chart</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Delivery
                                                                                    & Return</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Product
                                                                                    Review</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('product-page(accordian).php')}}">Ask
                                                                                    an Expert</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Features</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="{{url('/product-page(bundle).php')}}">Bundle
                                                                                    (Cross Sale)</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Hot
                                                                                    Stock
                                                                                    Progress</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Out
                                                                                    Stock</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(thumbnail).php')}}">Sale
                                                                                    Countdown</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(thumbnail).php')}}">Product
                                                                                    Zoom</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>Product Features</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Sticky
                                                                                    Checkout</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(accordian).php')}}">Secure
                                                                                    Checkout</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="{{url('/product-page(vertical-tab).php')}}">Social
                                                                                    Share</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{url('/product-page(thumbnail).php')}}">Related
                                                                                    Products</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="{{url('/product-page(right-sidebar).php')}}">Wishlist
                                                                                    & Compare</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="{{url('../assets/images/menu-banner.jpg')}}" alt=""
                                                                    class="img-fluid mega-img d-xl-block d-none">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('/pencil')}}">Pencils</a></li>
                                        <li>
                                            {{-- <a href="#">Pages</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ url('/admindashboard') }}">Vendor</a>
                                                    <ul>
                                                        <li><a href="{{ url('/category') }}">Category Dashboard</a></li>
                                                        <li><a href="{{ url('/customer') }}">Customer</a></li>
                                                        <li><a href="{{ url('/') }}">Become Vendor</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                         --}}
                                               {{--<li>
                                                    <a href="#!">account</a>
                                                    <ul>
                                                        <li><a href="{{url('/wishlist.php')}}">wishlist</a></li>
                                                        <li><a href="{{url('/cart.php')}}">cart</a></li>
                                                        <li><a href="{{url('/dashboard.php')}}">Dashboard</a></li>
                                                        <li><a href="{{url('/login.php')}}">login</a></li>
                                                        <li><a href="{{url('/register.php')}}">register</a></li>
                                                        <li><a href="{{url('/contact.php')}}">contact</a></li>
                                                        <li><a href="{{url('/forget_pwd.php')}}">forget password</a></li>
                                                        <li><a href="{{url('/profile.php')}}">profile</a></li>
                                                        <li><a href="{{url('/checkout.php')}}">checkout</a></li>
                                                        <li><a href="{{url('/order-success.php')}}">order success</a></li>
                                                        <li><a href="{{url('/order-tracking.php')}}">order tracking<span
                                                                    class="new-tag">new</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#!">portfolio</a>
                                                    <ul>
                                                        <li><a href="#">grid</a>
                                                            <ul>
                                                                <li><a href="{{url('/grid-2-col.php')}}">grid
                                                                        2</a></li>
                                                                <li><a href="{{url('/grid-3-col.php')}}">grid
                                                                        3</a></li>
                                                                <li><a href="{{url('/grid-4-col.php')}}">grid
                                                                        4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">masonry</a>
                                                            <ul>
                                                                <li><a href="{{url('/masonary-2-grid.php')}}">grid 2</a></li>
                                                                <li><a href="{{url('/masonary-3-grid.php')}}">grid 3</a></li>
                                                                <li><a href="{{url('/masonary-4-grid.php')}}">grid 4</a></li>
                                                                <li><a href="{{url('/masonary-fullwidth.php')}}">full width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{url('/about-page.php')}}">about us</a></li>
                                                <li><a href="{{url('/search.php')}}">search</a></li>
                                                <li><a href="{{url('/review.php')}}">review</a>
                                                </li>
                                                <li>
                                                    <a href="#!">compare</a>
                                                    <ul>
                                                        <li><a href="{{url('f/compare.php')}}">compare</a></li>
                                                        <li><a href="{{url('/compare-2.php')}}">compare-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{url('/collection.php')}}">collection</a></li>
                                                <li><a href="{{url('/lookbook.php')}}">lookbook</a></li>
                                                <li><a href="{{url('/sitemap.php')}}">site map</a>
                                                </li>
                                                <li><a href="{{url('')}}">404</a></li>
                                                <li><a href="{{url('/coming-soon.php')}}">coming soon</a></li>
                                                <li><a href="{{url('/faq.php')}}">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">blog</a>
                                            <ul>
                                                <li><a href="{{url('/blog-page.php')}}">left sidebar</a></li>
                                                <li><a href="{{url('/blog(right-sidebar).php')}}">right sidebar</a></li>
                                                <li><a href="{{url('/blog(no-sidebar).php')}}">no sidebar</a></li>
                                                <li><a href="{{url('/blog-details.php')}}">blog details</a></li>
                                            </ul>
                                        </li>--}} 
                                    {{-- </ul> --}}
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                        <li class="onhover-div mobile-search">
                                            <div data-bs-toggle="modal" data-bs-target="#searchModal">
                                                <i class="ri-search-line"></i>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-setting">
                                            <div><i class="ri-equalizer-2-line"></i></div>
                                            <div class="show-div setting">
                                                <h6>language</h6>
                                                <ul>
                                                    <li><a href="#!">english</a></li>
                                                    <li><a href="#!">french</a></li>
                                                </ul>
                                                <h6>currency</h6>
                                                <ul class="list-inline">
                                                    <li><a href="#!">euro</a></li>
                                                    <li><a href="#!">rupees</a></li>
                                                    <li><a href="#!">pound</a></li>
                                                    <li><a href="#!">dollar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        @isset($cart)

                                        <li class="onhover-div mobile-cart">
                                            <div data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas">
                                                <i class="ri-shopping-cart-line"></i>
                                            </div>
                                           
                                            <span class="cart_qty_cls">{{ $cart->id }}</span>
                                        </li>
                                        @endisset

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
<html>