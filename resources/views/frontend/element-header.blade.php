
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Element Header</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Element Header</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!-- section start -->
    <section class="section-b-space container element-page">
        <div class="row">
            <div class="left-sidebar col-lg-3">
                <a href="#!" class="btn btn-solid btn-sm d-lg-none d-inline-block mb-4 element-btn"><i
                        class="ri-bar-chart-horizontal-line me-2"></i> all elements</a>
                <div class="sticky-sidebar">
                    <div class="collection-mobile-back">
                        <span class="filter-back"><i class="fa fa-angle-left"></i> back</span>
                    </div>
                    <ul class="nav list-unstyled nav-sidebar doc-nav">
                        <li class="nav-item direct">
                            <a class="nav-link" href="elements.html">Buttons</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-title.html">Title</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-breadcrumb.html">breadcrumb</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link active" href="element-header.html">header</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-product.html">product box/style</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-category.html">category</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-footer.html">footer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 content component-col">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/1.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header1"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header1"><code data-lang="html">
&lt;header&gt;
    &lt;div class=&quot;top-header&quot;&gt;
        &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist&quot;&gt;
                            &lt;a href=&quot;#!&quot;&gt;
                                &lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;
                            &lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;
                            &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar&quot;&gt;
                            &lt;a href=&quot;#!&quot; onclick=&quot;openNav()&quot;&gt;
                                &lt;div class=&quot;bar-style&quot;&gt;
                                    &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                            &lt;div id=&quot;mySidenav&quot; class=&quot;sidenav&quot;&gt;
                                &lt;a href=&quot;#!&quot; class=&quot;sidebar-overlay&quot; onclick=&quot;closeNav()&quot;&gt;&lt;/a&gt;
                                &lt;nav&gt;
                                    &lt;div onclick=&quot;closeNav()&quot;&gt;
                                        &lt;div class=&quot;sidebar-back text-start&quot;&gt;
                                            &lt;i class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt;
                                            Back
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                    &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;clothing&lt;/a&gt;
                                            &lt;ul class=&quot;mega-menu clothing-menu&quot;&gt;
                                                &lt;li&gt;
                                                    &lt;div class=&quot;row m-0&quot;&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;h5&gt;women's fashion&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;dresses&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;skirts&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;western wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;ethic wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;sport wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                                &lt;h5&gt;men's fashion&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;sports wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;western wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;ethic wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;h5&gt;accessories&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;fashion jewellery&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;caps and hats&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;precious jewellery&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;necklaces&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;earrings&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;wrist wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;ties&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;cufflinks&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;pockets squares&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;a href=&quot;#!&quot; class=&quot;mega-menu-banner&quot;&gt;
                                                                &lt;img src=&quot;../assets/images/mega-menu/fashion.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid blur-up lazyload&quot;&gt;
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;bags&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;shopper bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;laptop bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;clutches&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wallets&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;leathers&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;satchels&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;bags&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;shopper bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;laptop bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;clutches&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wallets&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;leathers&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;satchels&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;bags&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;shopper bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;laptop bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;clutches&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wallets&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;leathers&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;satchels&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt; 
                                            &lt;a href=&quot;#!&quot;&gt;footwear&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;sport shoes&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;formal shoes&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;casual shoes&lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;watches&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;Accessories&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;fashion jewellery&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;caps and hats&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;precious jewellery&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;more..&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;necklaces&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;earrings&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wrist wear&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;accessories&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;ties&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;cufflinks&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;pockets squares&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;helmets&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;scarves&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;more...&lt;/a&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;#!&quot;&gt;accessory gift sets&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;#!&quot;&gt;travel accessories&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;#!&quot;&gt;phone cases&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;belts &amp; more&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wearable&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;house of design&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;beauty &amp; personal care&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;makeup&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;skincare&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;premium beauty&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;more&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;fragrances&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;luxury beauty&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;hair care&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;tools &amp; brushes&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;home &amp; decor&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;kitchen&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/nav&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;
                                &lt;img src=&quot;../assets/images/logo.png&quot; class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/2.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header2"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header2"><code data-lang="html">&lt;header&gt;
    &lt;div class=&quot;container layout3-menu&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left around-border&quot;&gt;
                        &lt;div class=&quot;navbar&quot;&gt; 
                            &lt;a href=&quot;#!&quot; onclick=&quot;openNav()&quot;&gt;
                                &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                            &lt;/a&gt;
                            &lt;div id=&quot;mySidenav&quot; class=&quot;sidenav&quot;&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-overlay&quot; onclick=&quot;closeNav()&quot;&gt;&lt;/a&gt;
                                &lt;nav&gt;
                                    &lt;a href=&quot;javascript:void(0)&quot; onclick=&quot;closeNav()&quot;&gt;
                                        &lt;div class=&quot;sidebar-back text-start&quot;&gt;
                                            &lt;i class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt;
                                            Back
                                        &lt;/div&gt;
                                    &lt;/a&gt;
                                    &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;clothing&lt;/a&gt;
                                            &lt;ul class=&quot;mega-menu clothing-menu&quot;&gt;
                                                &lt;li&gt;
                                                    &lt;div class=&quot;row m-0&quot;&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;h5&gt;women's fashion&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;dresses&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;skirts&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;western wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;ethic wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;sport wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                                &lt;h5&gt;men's fashion&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;sports wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;western wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;ethic wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;h5&gt;accessories&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;fashion jewellery&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;caps and hats&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;precious jewellery&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;necklaces&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;earrings&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;wrist wear&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;ties&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;cufflinks&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;#!&quot;&gt;pockets squares&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;a href=&quot;#!&quot; class=&quot;mega-menu-banner&quot;&gt;
                                                                &lt;img src=&quot;../assets/images/mega-menu/bag.jpg&quot; alt=&quot;&quot; class=&quot;img-fluid blur-up lazyload&quot;&gt;
                                                            &lt;/a&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt; 
                                            &lt;a href=&quot;#!&quot;&gt;bags&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;shopper bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;laptop bags&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;clutches&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt; 
                                                    &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;purses&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wallets&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;leathers&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;satchels&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt; 
                                            &lt;a href=&quot;#!&quot;&gt;footwear&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;sport shoes&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;formal shoes&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;casual shoes&lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;watches&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt; 
                                            &lt;a href=&quot;#!&quot;&gt;Accessories&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;fashion jewellery&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;caps and hats&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;precious jewellery&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt; 
                                                    &lt;a href=&quot;#!&quot;&gt;more..&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;necklaces&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;earrings&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wrist wear&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt; 
                                                            &lt;a href=&quot;#!&quot;&gt;accessories&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;ties&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;cufflinks&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;pockets squares&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;helmets&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;#!&quot;&gt;scarves&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt; 
                                                                    &lt;a href=&quot;#!&quot;&gt;more...&lt;/a&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;#!&quot;&gt;accessory gift sets&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;#!&quot;&gt;travel accessories&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;#!&quot;&gt;phone cases&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;belts &amp; more&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;wearable&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;house of design&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt; 
                                            &lt;a href=&quot;#!&quot;&gt;beauty &amp; personal care&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;makeup&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;skincare&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;premium beauty&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt; 
                                                    &lt;a href=&quot;#!&quot;&gt;more&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;fragrances&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;luxury beauty&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;hair care&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;
                                                            &lt;a href=&quot;#!&quot;&gt;tools &amp; brushes&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;home &amp; decor&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;kitchen&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/nav&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;main-menu-right&quot;&gt;
                            &lt;nav id=&quot;main-nav&quot;&gt;
                                &lt;div class=&quot;toggle-nav&quot;&gt;
                                    &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                                &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                    &lt;li class=&quot;mobile-box&quot;&gt;
                                        &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;invoice template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;invoice-1.html&quot;&gt;invoice 1&lt;/a&gt; 
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;invoice-2.html&quot;&gt;invoice 2&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;invoice-3.html&quot;&gt;invoice 3&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;invoice-4.html&quot;&gt;invoice 4&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;invoice-5.html&quot;&gt;invoice 5&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;elements&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;elements.html&quot;&gt;
                                                                                elements page
                                                                                &lt;i class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/offer-2.html&quot;&gt;offer 2&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/featured-products.html&quot;&gt;featured product&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/black-friday.html&quot;&gt;black friday&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/flash-sale.html&quot;&gt;flash sale&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/email-order-success.html&quot;&gt;order success&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a target=&quot;_blank&quot; href=&quot;../email-template/email-order-success-two.html&quot;&gt;order success 2&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;index.html&quot;&gt;bottom&lt;i class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;search&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax search&lt;i class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;model&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;index.html&quot;&gt;exit&lt;i class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;furniture-3.html&quot;&gt;black friday&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;fashion-4.html&quot;&gt;cyber monday&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new year&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;add to cart&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;nursery.html&quot;&gt;cart modal popup&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;vegetables.html&quot;&gt;qty. counter &lt;i class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot; class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product Image&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(slider).html&quot;&gt;Product Slider&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product Accordion&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product Sticky&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product Vertical Tab&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product Sidebar Left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product Sidebar Right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product No Sidebar&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product Column Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product Thumbnail Image Outside&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant Rectangle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant Circle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant Image Swatch&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant Color&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant Radio Button&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant Dropdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product Simple&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product Classified&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Size Chart&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Delivery &amp; Return&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product Review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Ask an Expert&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle (Cross Sale)&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot Stock Progress&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out Stock&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale Countdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product Zoom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product 360 View&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Social Share&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related Products&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist &amp; Compare&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot; class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;grid-2-col.html&quot;&gt;grid 2&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;grid-3-col.html&quot;&gt;grid 3&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;grid-4-col.html&quot;&gt;grid 4&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/nav&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;absolute-logo&quot;&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;
                                &lt;img alt=&quot;&quot; src=&quot;../assets/images/fashion-2/logo.png&quot;&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;menu-right pull-right&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;icon-nav&quot;&gt;
                                    &lt;ul&gt;
                                        &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                            &lt;div&gt;
                                                &lt;i class=&quot;ri-equalizer-2-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;show-div setting&quot;&gt;
                                                &lt;h6&gt;language&lt;/h6&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;#!&quot;&gt;english&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;#!&quot;&gt;french&lt;/a&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                                &lt;h6&gt;currency&lt;/h6&gt;
                                                &lt;ul class=&quot;list-inline&quot;&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;#!&quot;&gt;euro&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;#!&quot;&gt;rupees&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;#!&quot;&gt;pound&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;
                                                        &lt;a href=&quot;#!&quot;&gt;dollar&lt;/a&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/3.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header3"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header3"><code data-lang="html">&lt;header class=&quot;header-2 position-relative w-auto&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header&quot;&gt;
        &lt;div class=&quot;container container-lg&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill  text-white&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 -
                                7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;
                                wishlist&lt;/a&gt;&lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;&lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My
                            Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container container-lg layout3-menu&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left around-border&quot;&gt;
                        &lt;div class=&quot;navbar d-xl-none&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot; onclick=&quot;openNav()&quot;&gt;
                                &lt;div class=&quot;bar-style&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;main-menu-right&quot;&gt;
                            &lt;nav id=&quot;main-nav&quot;&gt;
                                &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                                &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                    &lt;li class=&quot;mobile-box&quot;&gt;
                                        &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;invoice template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-1.html&quot;&gt;invoice
                                                                                1&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-2.html&quot;&gt;invoice
                                                                                2&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-3.html&quot;&gt;invoice
                                                                                3&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-4.html&quot;&gt;invoice
                                                                                4&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-5.html&quot;&gt;invoice
                                                                                5&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;elements&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                                elements page&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                                2&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                                product&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                                friday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                                sale&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                                success&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                                success 2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;search&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                                search&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;model&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                                friday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                                monday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                                year&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;add to cart&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                                popup&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                                &lt;i
                                                                                    class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                        class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                                Image&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                                Slider&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Accordion&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                                Sticky&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                                Vertical Tab&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                Sidebar Left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                                Sidebar Right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                No Sidebar&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Column Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                                Thumbnail Image Outside&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                Rectangle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                                Circle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                                Image Swatch&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                Color&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                                Radio Button&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                                Dropdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Simple&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                Classified&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                                Chart&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                                &amp; Return&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                Review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                                an Expert&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                                (Cross Sale)&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                                Stock
                                                                                Progress&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                                Stock&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                                Countdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                Zoom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                                360 View&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                                Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                                Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                                Share&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                                Products&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                                &amp; Compare&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                                class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                    2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                    3&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                    4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/nav&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;absolute-logo&quot;&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;../assets/images/fashion-4/logo.png&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;menu-right pull-right&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;icon-nav&quot;&gt;
                                    &lt;ul&gt;
                                        &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                            &lt;div&gt;&lt;i class=&quot;ri-equalizer-2-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;show-div setting&quot;&gt;
                                                &lt;h6&gt;language&lt;/h6&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                                &lt;h6&gt;currency&lt;/h6&gt;
                                                &lt;ul class=&quot;list-inline&quot;&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/4.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header4"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header4"><code data-lang="html">&lt;header class=&quot;header-style-1&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header dark-top&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account px-0&quot;&gt; &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;nav class=&quot;navbar navbar-expand navbar-light p-0 d-md-none d-block&quot;&gt;
                    &lt;div class=&quot;collapse navbar-collapse&quot;&gt;
                        &lt;ul class=&quot;navbar-nav me-auto&quot;&gt;
                            &lt;li class=&quot;nav-item active&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Women &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Men&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Kids&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li class=&quot;nav-item&quot;&gt;
                                &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Home decor&lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/nav&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bg-light-xl&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-sm-12&quot;&gt;
                    &lt;div class=&quot;main-menu&quot;&gt;
                        &lt;div class=&quot;menu-left&quot;&gt;
                            &lt;div class=&quot;brand-logo me-4&quot;&gt;
                                &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/fashion-5/logo.png&quot;
                                        class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/div&gt;
                            &lt;nav class=&quot;navbar navbar-expand-sm navbar-light pe-0 d-none d-md-block&quot;&gt;
                                &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot;
                                    data-bs-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot;
                                    aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
                                    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
                                &lt;/button&gt;
                                &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
                                    &lt;ul class=&quot;navbar-nav me-auto&quot;&gt;
                                        &lt;li class=&quot;nav-item active&quot;&gt;
                                            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Women &lt;span
                                                    class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;nav-item&quot;&gt;
                                            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Men&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;nav-item&quot;&gt;
                                            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Kids&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;nav-item&quot;&gt;
                                            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Home decor&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/nav&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;menu-right pull-right&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;icon-nav&quot;&gt;
                                    &lt;ul&gt;
                                        &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                            &lt;div&gt;&lt;i class=&quot;ri-equalizer-2-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;show-div setting&quot;&gt;
                                                &lt;h6&gt;language&lt;/h6&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                                &lt;h6&gt;currency&lt;/h6&gt;
                                                &lt;ul class=&quot;list-inline&quot;&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;d-sm-none d-block&quot;&gt;
                                &lt;a href=&quot;#&quot; class=&quot;btn btn-solid btn-xs btn-rounded&quot;&gt;login&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bg-light&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;col-12&quot;&gt;
                &lt;nav id=&quot;main-nav&quot;&gt;
                    &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                    &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                        &lt;li class=&quot;mobile-box&quot;&gt;
                            &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                        &lt;li class=&quot;mega hover-cls&quot;&gt;
                            &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                            &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                &lt;li&gt;
                                    &lt;div class=&quot;container&quot;&gt;
                                        &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;invoice template&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-1.html&quot;&gt;invoice
                                                                    1&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-2.html&quot;&gt;invoice
                                                                    2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-3.html&quot;&gt;invoice
                                                                    3&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-4.html&quot;&gt;invoice
                                                                    4&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-5.html&quot;&gt;invoice
                                                                    5&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;elements&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                    elements page&lt;i
                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                &lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;email template&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                    2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                    product&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;email template&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                    friday&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                    sale&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                    success&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                    href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                    success 2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;search&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                    search&lt;i
                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;model&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                    friday&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                    monday&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                    year&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;add to cart&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                    popup&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                    &lt;i class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col-12&quot;&gt;
                                                &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                    class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li&gt;
                            &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                            &lt;ul&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;mega hover-cls&quot;&gt;
                            &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                            &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                &lt;li&gt;
                                    &lt;div class=&quot;container&quot;&gt;
                                        &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;Product Page&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                    Thumbnail&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                    Image&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                    Slider&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                    Accordion&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                    Sticky&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                    Vertical Tab&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;Product Page&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                    Sidebar Left&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                    Sidebar Right&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                    No Sidebar&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                    Column Thumbnail&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                    Thumbnail Image Outside&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                    Rectangle&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                    Circle&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                    Image Swatch&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                    Color&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                    Radio Button&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                    Dropdown&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;Product Features&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                    Simple&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                    Classified&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                    Chart&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                    &amp; Return&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                    Review&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                    an Expert&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;Product Features&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                    (Cross Sale)&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                    Stock
                                                                    Progress&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                    Stock&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                    Countdown&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                    Zoom&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                    360 View&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;

                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                &lt;div class=&quot;link-section&quot;&gt;
                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                        &lt;h5&gt;Product Features&lt;/h5&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                    Checkout&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                    Checkout&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                    Share&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                    Products&lt;/a&gt;
                                                            &lt;/li&gt;
                                                            &lt;li&gt;
                                                                &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                    &amp; Compare&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;row&quot;&gt;
                                            &lt;div class=&quot;col-12&quot;&gt;
                                                &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                    class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/div&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                            &lt;ul&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                        2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                        3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                        4&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                        &lt;li&gt;
                            &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/nav&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/5.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header5"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header5"><code data-lang="html">&lt;header class=&quot;header-2 position-relative w-auto&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header&quot;&gt;
        &lt;div class=&quot;container container-lg&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill  text-white&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 -
                                7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;
                                wishlist&lt;/a&gt;&lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;&lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My
                            Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container container-lg layout3-menu&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left around-border&quot;&gt;
                        &lt;div class=&quot;navbar d-xl-none&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot; onclick=&quot;openNav()&quot;&gt;
                                &lt;div class=&quot;bar-style&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;main-menu-right&quot;&gt;
                            &lt;nav id=&quot;main-nav&quot;&gt;
                                &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                                &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                    &lt;li class=&quot;mobile-box&quot;&gt;
                                        &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;invoice template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-1.html&quot;&gt;invoice
                                                                                1&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-2.html&quot;&gt;invoice
                                                                                2&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-3.html&quot;&gt;invoice
                                                                                3&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-4.html&quot;&gt;invoice
                                                                                4&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-5.html&quot;&gt;invoice
                                                                                5&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;elements&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                                elements page&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                                2&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                                product&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                                friday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                                sale&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                                success&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                                success 2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;search&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                                search&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;model&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                                friday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                                monday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                                year&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;add to cart&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                                popup&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                                &lt;i
                                                                                    class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                        class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                                Image&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                                Slider&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Accordion&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                                Sticky&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                                Vertical Tab&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                Sidebar Left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                                Sidebar Right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                No Sidebar&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Column Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                                Thumbnail Image Outside&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                Rectangle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                                Circle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                                Image Swatch&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                Color&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                                Radio Button&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                                Dropdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Simple&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                Classified&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                                Chart&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                                &amp; Return&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                Review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                                an Expert&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                                (Cross Sale)&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                                Stock
                                                                                Progress&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                                Stock&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                                Countdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                Zoom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                                360 View&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                                Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                                Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                                Share&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                                Products&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                                &amp; Compare&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                                class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                    2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                    3&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                    4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/nav&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;absolute-logo&quot;&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;#&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;../assets/images/fashion-4/logo.png&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;menu-right pull-right&quot;&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;icon-nav&quot;&gt;
                                    &lt;ul&gt;
                                        &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                            &lt;div&gt;&lt;i class=&quot;ri-equalizer-2-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;show-div setting&quot;&gt;
                                                &lt;h6&gt;language&lt;/h6&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                                &lt;h6&gt;currency&lt;/h6&gt;
                                                &lt;ul class=&quot;list-inline&quot;&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/6.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header6"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header6"><code data-lang="html">&lt;header class=&quot;header-2&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header top-header-dark&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;
                                wishlist&lt;/a&gt;&lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;&lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My
                            Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu border-section border-top-0&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar&quot;&gt;&lt;a href=&quot;javascript:void(0)&quot; onclick=&quot;openNav()&quot;&gt;&lt;i
                                    class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;div id=&quot;mySidenav&quot; class=&quot;sidenav&quot;&gt;
                                &lt;a href=&quot;javascript:void(0)&quot; class=&quot;sidebar-overlay&quot; onclick=&quot;closeNav()&quot;&gt;&lt;/a&gt;
                                &lt;nav&gt;
                                    &lt;a href=&quot;javascript:void(0)&quot; onclick=&quot;closeNav()&quot;&gt;
                                        &lt;div class=&quot;sidebar-back text-start&quot;&gt;&lt;i class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt;
                                            Back&lt;/div&gt;
                                    &lt;/a&gt;
                                    &lt;!-- Vertical Menu --&gt;
                                    &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clothing&lt;/a&gt;
                                            &lt;ul class=&quot;mega-menu clothing-menu&quot;&gt;
                                                &lt;li&gt;
                                                    &lt;div class=&quot;row m-0&quot;&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;h5&gt;women&apos;s fashion&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dresses&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skirts&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;westarn wear&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport wear&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                                &lt;h5&gt;men&apos;s fashion&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sports wear&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;western wear&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;h5&gt;accessories&lt;/h5&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col-xl-4&quot;&gt;
                                                            &lt;a href=&quot;#&quot; class=&quot;mega-menu-banner&quot;&gt;&lt;img
                                                                    src=&quot;../assets/images/mega-menu/furniture/1.jpg&quot;
                                                                    alt=&quot;&quot; class=&quot;img-fluid blur-up lazyload&quot;&gt;&lt;/a&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;bags&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shopper bags&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;laptop bags&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clutches&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wallets&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;leathers&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;satchels&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;footwear&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport shoes&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;formal shoes&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;casual shoes&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;watches&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Accessories&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;more..&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;helmets&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;scarves&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;more...&lt;/a&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessory gift sets&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;travel accessories&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;phone cases&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;belts &amp; more&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wearable&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;house of design&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;beauty &amp; personal care&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;makeup&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skincare&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;premium beauty&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;more&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fragrances&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;luxury beauty&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;hair care&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;tools &amp; brushes&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;home &amp; decor&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;kitchen&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/nav&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;brand-logo layout2-logo&quot;&gt;
                        &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/furniture-1/logo.png&quot;
                                class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;div class=&quot;icon-nav&quot;&gt;
                            &lt;ul&gt;
                                &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                    &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                        &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                    &lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                    &lt;div&gt;&lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;show-div setting&quot;&gt;
                                        &lt;h6&gt;language&lt;/h6&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                        &lt;h6&gt;currency&lt;/h6&gt;
                                        &lt;ul class=&quot;list-inline&quot;&gt;
                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                    &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                        &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                    &lt;/div&gt;
                                    &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-lg-12&quot;&gt;
                &lt;div class=&quot;main-nav-center&quot;&gt;
                    &lt;nav id=&quot;main-nav&quot;&gt;
                        &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                            &lt;li class=&quot;mobile-box&quot;&gt;
                                &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                            &lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                            &lt;li class=&quot;mega hover-cls&quot;&gt;
                                &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                    &lt;li&gt;
                                        &lt;div class=&quot;container&quot;&gt;
                                            &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;invoice template&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-1.html&quot;&gt;invoice
                                                                        1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-2.html&quot;&gt;invoice
                                                                        2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-3.html&quot;&gt;invoice
                                                                        3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-4.html&quot;&gt;invoice
                                                                        4&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;invoice-5.html&quot;&gt;invoice
                                                                        5&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;elements&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                        elements page&lt;i
                                                                            class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                    &lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;email template&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                        2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                        product&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;email template&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                        friday&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                        sale&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                        success&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                        href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                        success 2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                            class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;search&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                        search&lt;i
                                                                            class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;model&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                            class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                        friday&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                        monday&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                        year&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;add to cart&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                        popup&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                        &lt;i class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;row&quot;&gt;
                                                &lt;div class=&quot;col-12&quot;&gt;
                                                    &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                        class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/li&gt;
                            &lt;li class=&quot;mega hover-cls&quot;&gt;
                                &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                    &lt;li&gt;
                                        &lt;div class=&quot;container&quot;&gt;
                                            &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;Product Page&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                        Thumbnail&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                        Image&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                        Slider&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                        Accordion&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                        Sticky&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                        Vertical Tab&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;Product Page&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                        Sidebar Left&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                        Sidebar Right&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                        No Sidebar&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                        Column Thumbnail&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                        Thumbnail Image Outside&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                        Rectangle&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                        Circle&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                        Image Swatch&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                        Color&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                        Radio Button&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                        Dropdown&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;Product Features&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                        Simple&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                        Classified&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                        Chart&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                        &amp; Return&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                        Review&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                        an Expert&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;Product Features&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                        (Cross Sale)&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                        Stock
                                                                        Progress&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                        Stock&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                        Countdown&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                        Zoom&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                        360 View&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;

                                                &lt;div class=&quot;col mega-box&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;div class=&quot;menu-title&quot;&gt;
                                                            &lt;h5&gt;Product Features&lt;/h5&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;menu-content&quot;&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                        Checkout&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                        Checkout&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                        Share&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                        Products&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li&gt;
                                                                    &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                        &amp; Compare&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;row&quot;&gt;
                                                &lt;div class=&quot;col-12&quot;&gt;
                                                    &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                        class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                        class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                            2&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                            3&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                            4&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/nav&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/7.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header7"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header7"><code data-lang="html">&lt;header class=&quot;header-style-5 style-light&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header top-header-dark2&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt; &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar d-block d-xl-none&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot;&gt;
                                &lt;div class=&quot;bar-style&quot; id=&quot;toggle-sidebar-res&quot;&gt;&lt;i
                                        class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/furniture-2/logo.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;form class=&quot;form_search&quot; role=&quot;form&quot;&gt;
                            &lt;input id=&quot;query search-autocomplete&quot; type=&quot;search&quot;
                                placeholder=&quot;Search any Device or Gadgets...&quot; class=&quot;nav-search nav-search-field&quot;
                                aria-expanded=&quot;true&quot;&gt;
                            &lt;button type=&quot;submit&quot; name=&quot;nav-submit-button&quot; class=&quot;btn-search&quot;&gt;
                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li class=&quot;onhover-div mobile-search d-xl-none d-inline-block&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt;&lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bottom-part bottom-light&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-3&quot;&gt;
                    &lt;div class=&quot;category-menu d-none d-xl-block h-100&quot;&gt;
                        &lt;div id=&quot;toggle-sidebar&quot; class=&quot;toggle-sidebar&quot;&gt;
                            &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                            &lt;h5 class=&quot;mb-0&quot;&gt;shop by category&lt;/h5&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;sidenav fixed-sidebar marketplace-sidebar svg-icon-menu&quot;&gt;
                        &lt;nav&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;sidebar-back text-start d-xl-none d-block&quot;&gt;&lt;i
                                        class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt; Back&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;fruits &amp; vegetable&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;eggs, meat, fish&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;makeup&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skincare&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;premium beauty&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fragrances&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;luxury beauty&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;hair care&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;tools &amp; brushes&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;food grains&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shopper bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;laptop bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clutches&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wallets&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;leathers&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;satchels&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;bakery &amp; dairy&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;formal shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;casual shoes&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;beverages&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;snacks&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more..&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;helmets&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;scarves&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more...&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessory gift sets&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;travel accessories&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;phone cases&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;belts &amp; more&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wearable&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;beauty product&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;gourment&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;kitchen, garden&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;kitchen, garden&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-9&quot;&gt;
                    &lt;div class=&quot;main-nav-center&quot;&gt;
                        &lt;nav id=&quot;main-nav&quot; class=&quot;text-start&quot;&gt;
                            &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                            &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                &lt;li class=&quot;mobile-box&quot;&gt;
                                    &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;invoice template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-1.html&quot;&gt;invoice
                                                                            1&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-2.html&quot;&gt;invoice
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-3.html&quot;&gt;invoice
                                                                            3&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-4.html&quot;&gt;invoice
                                                                            4&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-5.html&quot;&gt;invoice
                                                                            5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;elements&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                            elements page&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                            product&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                            sale&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                            success&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                            success 2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;search&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                            search&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;model&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                            monday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                            year&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;add to cart&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                            popup&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                            &lt;i
                                                                                class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                            Image&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                            Slider&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Accordion&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                            Sticky&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                            Vertical Tab&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Sidebar Left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                            Sidebar Right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            No Sidebar&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Column Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                            Thumbnail Image Outside&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Rectangle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                            Circle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                            Image Swatch&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Color&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                            Radio Button&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                            Dropdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Simple&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Classified&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                            Chart&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                            &amp; Return&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            Review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                            an Expert&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                            (Cross Sale)&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                            Stock
                                                                            Progress&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                            Stock&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                            Countdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Zoom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                            360 View&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                            Share&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                            Products&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                            &amp; Compare&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                4&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/8.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header6"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header6"><code data-lang="html">&lt;header class=&quot;header-5 text-light-header&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt; &lt;img src=&quot;../assets/images/furniture-3/logo.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;div&gt;
                            &lt;nav id=&quot;main-nav&quot;&gt;
                                &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                                &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                    &lt;li class=&quot;mobile-box&quot;&gt;
                                        &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;invoice template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-1.html&quot;&gt;invoice
                                                                                1&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-2.html&quot;&gt;invoice
                                                                                2&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-3.html&quot;&gt;invoice
                                                                                3&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-4.html&quot;&gt;invoice
                                                                                4&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;invoice-5.html&quot;&gt;invoice
                                                                                5&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;elements&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                                elements page&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                            &lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                                2&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                                product&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;email template&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                                friday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                                sale&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                                success&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                                success 2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;search&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                                search&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;model&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                    class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                                friday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                                monday&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                                year&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;add to cart&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                                popup&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                                &lt;i
                                                                                    class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                        class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;mega hover-cls&quot;&gt;
                                        &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                        &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                            &lt;li&gt;
                                                &lt;div class=&quot;container&quot;&gt;
                                                    &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                                Image&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                                Slider&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Accordion&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                                Sticky&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                                Vertical Tab&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                Sidebar Left&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                                Sidebar Right&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                No Sidebar&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Column Thumbnail&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                                Thumbnail Image Outside&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                Rectangle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                                Circle&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                                Image Swatch&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                Color&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                                Radio Button&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                                Dropdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                Simple&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                Classified&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                                Chart&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                                &amp; Return&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                Review&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                                an Expert&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                                (Cross Sale)&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                                Stock
                                                                                Progress&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                                Stock&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                                Countdown&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                Zoom&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                                360 View&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;

                                                        &lt;div class=&quot;col mega-box&quot;&gt;
                                                            &lt;div class=&quot;link-section&quot;&gt;
                                                                &lt;div class=&quot;menu-title&quot;&gt;
                                                                    &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;menu-content&quot;&gt;
                                                                    &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                                Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                                Checkout&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                                Share&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                                Products&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt;
                                                                            &lt;a
                                                                                href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                                &amp; Compare&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                    &lt;/ul&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;row&quot;&gt;
                                                        &lt;div class=&quot;col-12&quot;&gt;
                                                            &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                                class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                    2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                    3&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                    4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                            &lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                            &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/nav&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;top-header&quot;&gt;
                            &lt;ul class=&quot;header-dropdown&quot;&gt;
                                &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;
                                        &lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt; &lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;
                                    &lt;i class=&quot;ri-user-6-line&quot;&gt;&lt;/i&gt;
                                    &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#&quot; data-lng=&quot;en&quot;&gt;
                                                Login
                                            &lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#&quot; data-lng=&quot;es&quot;&gt;
                                                Logout
                                            &lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt;
                                            &lt;i class=&quot;ri-equalizer-2-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt; &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt; &lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt; &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt; &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt; &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;doller&lt;/a&gt; &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/9.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header9"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header9"><code data-lang="html"> &lt;header class=&quot;header-tools header-style&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;logo-menu-part&quot;&gt;
        &lt;div class=&quot;container border-bottom-0&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-sm-12&quot;&gt;
                    &lt;div class=&quot;main-menu&quot;&gt;
                        &lt;div class=&quot;menu-left&quot;&gt;
                            &lt;div class=&quot;brand-logo&quot;&gt;
                                &lt;a href=&quot;index.html&quot;&gt; &lt;img src=&quot;../assets/images/bicycle/logo.png&quot;
                                        class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;menu-right pull-right&quot;&gt;
                            &lt;div&gt;
                                &lt;nav id=&quot;main-nav&quot;&gt;
                                    &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                    &lt;/div&gt;
                                    &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                        &lt;li class=&quot;mobile-box&quot;&gt;
                                            &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                        &lt;li class=&quot;mega hover-cls&quot;&gt;
                                            &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                            &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                                &lt;li&gt;
                                                    &lt;div class=&quot;container&quot;&gt;
                                                        &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;invoice template&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;invoice-1.html&quot;&gt;invoice
                                                                                    1&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;invoice-2.html&quot;&gt;invoice
                                                                                    2&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;invoice-3.html&quot;&gt;invoice
                                                                                    3&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;invoice-4.html&quot;&gt;invoice
                                                                                    4&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;invoice-5.html&quot;&gt;invoice
                                                                                    5&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;elements&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                                    elements page&lt;i
                                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                                &lt;/a&gt;&lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;email template&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                                    2&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                                    product&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;email template&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                                    friday&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                                    sale&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                                    success&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                                    href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                                    success 2&lt;/a&gt;&lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom
                                                                                    left&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom
                                                                                    right&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;search&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                                    search&lt;i
                                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;model&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                        class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a
                                                                                    href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                                    friday&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                                    monday&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                                    year&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;add to cart&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                                    popup&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty.
                                                                                    counter
                                                                                    &lt;i
                                                                                        class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-12&quot;&gt;
                                                                &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                    class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category
                                                        Slider&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;mega hover-cls&quot;&gt;
                                            &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                            &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                                &lt;li&gt;
                                                    &lt;div class=&quot;container&quot;&gt;
                                                        &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                    Thumbnail&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                                    Image&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                                    Slider&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                    Accordion&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                                    Sticky&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                                    Vertical Tab&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;Product Page&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                    Sidebar Left&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                                    Sidebar Right&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                    No Sidebar&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                    Column Thumbnail&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                                    Thumbnail Image Outside&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                    Rectangle&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                                    Circle&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                                    Image Swatch&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                                    Color&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                                    Radio Button&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                                    Dropdown&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                                    Simple&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                                    Classified&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                                    Chart&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                                    &amp; Return&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                                    Review&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                                    an Expert&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                                    (Cross Sale)&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                                    Stock
                                                                                    Progress&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                                    Stock&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                                    Countdown&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                                    Zoom&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                                    360 View&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;

                                                            &lt;div class=&quot;col mega-box&quot;&gt;
                                                                &lt;div class=&quot;link-section&quot;&gt;
                                                                    &lt;div class=&quot;menu-title&quot;&gt;
                                                                        &lt;h5&gt;Product Features&lt;/h5&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;menu-content&quot;&gt;
                                                                        &lt;ul&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                                    Checkout&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                                    Checkout&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                                    Share&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                                    Products&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                            &lt;li&gt;
                                                                                &lt;a
                                                                                    href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                                    &amp; Compare&lt;/a&gt;
                                                                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-12&quot;&gt;
                                                                &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                                    class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                        2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                        3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                        4&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;
                                                    &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/nav&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;top-header&quot;&gt;
                                &lt;ul class=&quot;header-dropdown&quot;&gt;
                                    &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                    &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;
                                        &lt;i class=&quot;ri-user-line&quot;&gt;&lt;/i&gt;
                                        &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#&quot; data-lng=&quot;en&quot;&gt;
                                                    Login
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#&quot; data-lng=&quot;es&quot;&gt;
                                                    Logout
                                                &lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;icon-nav&quot;&gt;
                                    &lt;ul&gt;
                                        &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                            &lt;div&gt;

                                                &lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;div class=&quot;show-div setting&quot;&gt;
                                                &lt;h6&gt;language&lt;/h6&gt;
                                                &lt;ul&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt; &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt; &lt;/li&gt;
                                                &lt;/ul&gt;
                                                &lt;h6&gt;currency&lt;/h6&gt;
                                                &lt;ul class=&quot;list-inline&quot;&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt; &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt; &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt; &lt;/li&gt;
                                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;doller&lt;/a&gt; &lt;/li&gt;
                                                &lt;/ul&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                        &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                            &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                                &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                            &lt;/div&gt;
                                            &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/10.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header10"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header10"><code data-lang="html">&lt;header class=&quot;header-style-5&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header top-header-dark&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt; &lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar d-block d-xl-none&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot;&gt;
                                &lt;div class=&quot;bar-style&quot; id=&quot;toggle-sidebar-res&quot;&gt;&lt;i
                                        class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/electronics-3/logo.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;form class=&quot;form_search&quot; role=&quot;form&quot;&gt;
                            &lt;input id=&quot;query search-autocomplete&quot; type=&quot;search&quot;
                                placeholder=&quot;Search any Device or Gadgets...&quot; class=&quot;nav-search nav-search-field&quot;
                                aria-expanded=&quot;true&quot;&gt;
                            &lt;button type=&quot;submit&quot; name=&quot;nav-submit-button&quot; class=&quot;btn-search&quot;&gt;
                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;/nav&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li class=&quot;onhover-div d-xl-none d-inline-block mobile-search&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt; &lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bottom-part bottom-light&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-3&quot;&gt;
                    &lt;div class=&quot;category-menu d-none d-xl-block h-100&quot;&gt;
                        &lt;div id=&quot;toggle-sidebar&quot; class=&quot;toggle-sidebar&quot;&gt;
                            &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                            &lt;h5 class=&quot;mb-0&quot;&gt;shop by category&lt;/h5&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;sidenav fixed-sidebar marketplace-sidebar&quot;&gt;
                        &lt;nav&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;sidebar-back text-start d-xl-none d-block&quot;&gt;&lt;i
                                        class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt; Back&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;TV &amp; Audio&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu clothing-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;row m-0&quot;&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;women&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dresses&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skirts&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;westarn wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;h5&gt;men&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sports wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;western wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;accessories&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;a href=&quot;#&quot; class=&quot;mega-menu-banner&quot;&gt;&lt;img
                                                            src=&quot;../assets/images/mega-menu/fashion.jpg&quot; alt=&quot;&quot;
                                                            class=&quot;img-fluid blur-up lazyload&quot;&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;air conditioners&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;makeup&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skincare&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;premium beauty&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fragrances&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;luxury beauty&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;hair care&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;tools &amp; brushes&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Refrigerators&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shopper bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;laptop bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clutches&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wallets&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;leathers&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;satchels&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Washing Machines&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;formal shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;casual shoes&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Kitchen &amp; Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Gaming Consoles&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;cameras&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more..&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;helmets&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;scarves&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more...&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessory gift sets&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;travel accessories&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;phone cases&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;belts &amp; more&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wearable&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Heating &amp; Cooling&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All accessories &lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All Electronics &lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-9&quot;&gt;
                    &lt;div class=&quot;main-nav-center&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                &lt;li class=&quot;mobile-box&quot;&gt;
                                    &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;invoice template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-1.html&quot;&gt;invoice
                                                                            1&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-2.html&quot;&gt;invoice
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-3.html&quot;&gt;invoice
                                                                            3&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-4.html&quot;&gt;invoice
                                                                            4&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-5.html&quot;&gt;invoice
                                                                            5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;elements&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                            elements page&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                            product&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                            sale&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                            success&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                            success 2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;search&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                            search&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;model&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                            monday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                            year&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;add to cart&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                            popup&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                            &lt;i
                                                                                class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                            Image&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                            Slider&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Accordion&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                            Sticky&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                            Vertical Tab&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Sidebar Left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                            Sidebar Right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            No Sidebar&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Column Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                            Thumbnail Image Outside&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Rectangle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                            Circle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                            Image Swatch&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Color&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                            Radio Button&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                            Dropdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Simple&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Classified&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                            Chart&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                            &amp; Return&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            Review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                            an Expert&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                            (Cross Sale)&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                            Stock
                                                                            Progress&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                            Stock&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                            Countdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Zoom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                            360 View&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                            Share&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                            Products&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                            &amp; Compare&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                4&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/12.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header12"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header12"><code data-lang="html">&lt;header class=&quot;header-style-5 color-style&quot; id=&quot;sticky-header&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header top-header-theme&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact text-end&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-truck-line&quot;&gt;&lt;/i&gt;Track Order&lt;/li&gt;
                            &lt;li class=&quot;pe-0&quot;&gt;&lt;i class=&quot;ri-gift-line&quot;&gt;&lt;/i&gt;Gift Cards&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar d-block d-xl-none&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot;&gt;
                                &lt;div class=&quot;bar-style&quot; id=&quot;toggle-sidebar-res&quot;&gt;&lt;i
                                        class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/marketplace-2/logo.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;form class=&quot;form_search ajax-search the-basics&quot; role=&quot;form&quot;&gt;
                            &lt;input type=&quot;search&quot; placeholder=&quot;Search any Device or Gadgets...&quot;
                                class=&quot;nav-search nav-search-field typeahead&quot; aria-expanded=&quot;true&quot;&gt;
                            &lt;button type=&quot;submit&quot; name=&quot;nav-submit-button&quot; class=&quot;btn-search&quot;&gt;
                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;/nav&gt;
                        &lt;div class=&quot;top-header d-block&quot;&gt;
                            &lt;ul class=&quot;header-dropdown&quot;&gt;
                                &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;
                                    &lt;a href=&quot;login.html&quot;&gt;
                                        &lt;i class=&quot;ri-user-line&quot;&gt;&lt;/i&gt;
                                    &lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li class=&quot;onhover-div d-xl-none d-inline-block mobile-search&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt;&lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bottom-part&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-3&quot;&gt;
                    &lt;div class=&quot;category-menu d-none d-xl-block h-100&quot;&gt;
                        &lt;div id=&quot;toggle-sidebar&quot; class=&quot;toggle-sidebar&quot;&gt;
                            &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                            &lt;h5 class=&quot;mb-0&quot;&gt;shop by category&lt;/h5&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;sidenav fixed-sidebar marketplace-sidebar&quot;&gt;
                        &lt;nav&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;sidebar-back text-start d-xl-none d-block&quot;&gt;&lt;i
                                        class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt; Back&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;TV &amp; Audio&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu clothing-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;row m-0&quot;&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;women&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dresses&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skirts&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;westarn wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;h5&gt;men&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sports wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;western wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;accessories&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;a href=&quot;#&quot; class=&quot;mega-menu-banner&quot;&gt;&lt;img
                                                            src=&quot;../assets/images/mega-menu/fashion.jpg&quot; alt=&quot;&quot;
                                                            class=&quot;img-fluid blur-up lazyload&quot;&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;air conditioners&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;makeup&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skincare&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;premium beauty&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fragrances&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;luxury beauty&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;hair care&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;tools &amp; brushes&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Refrigerators&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shopper bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;laptop bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clutches&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wallets&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;leathers&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;satchels&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Washing Machines&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;formal shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;casual shoes&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Kitchen &amp; Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Gaming Consoles&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;cameras&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more..&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;helmets&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;scarves&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more...&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessory gift sets&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;travel accessories&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;phone cases&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;belts &amp; more&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wearable&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Heating &amp; Cooling&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All accessories &lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All Electronics &lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xxl-6 col-xl-9 position-unset&quot;&gt;
                    &lt;div class=&quot;main-nav-center&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                &lt;li class=&quot;mobile-box&quot;&gt;
                                    &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;invoice template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-1.html&quot;&gt;invoice
                                                                            1&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-2.html&quot;&gt;invoice
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-3.html&quot;&gt;invoice
                                                                            3&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-4.html&quot;&gt;invoice
                                                                            4&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-5.html&quot;&gt;invoice
                                                                            5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;elements&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                            elements page&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                            product&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                            sale&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                            success&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                            success 2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;search&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                            search&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;model&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                            monday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                            year&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;add to cart&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                            popup&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                            &lt;i
                                                                                class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                            Image&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                            Slider&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Accordion&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                            Sticky&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                            Vertical Tab&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Sidebar Left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                            Sidebar Right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            No Sidebar&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Column Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                            Thumbnail Image Outside&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Rectangle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                            Circle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                            Image Swatch&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Color&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                            Radio Button&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                            Dropdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Simple&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Classified&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                            Chart&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                            &amp; Return&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            Review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                            an Expert&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                            (Cross Sale)&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                            Stock
                                                                            Progress&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                            Stock&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                            Countdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Zoom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                            360 View&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                            Share&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                            Products&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                            &amp; Compare&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                4&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xxl-3 d-none d-xxl-inline-block&quot;&gt;
                    &lt;div class=&quot;header-options&quot;&gt;
                        &lt;div class=&quot;vertical-slider no-arrow&quot;&gt;
                            &lt;div&gt;
                                &lt;span&gt;&lt;i class=&quot;ri-truck-line&quot;&gt;&lt;/i&gt;Free Shipping on Orders
                                    $100+&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div&gt;
                                &lt;span&gt;&lt;i class=&quot;ri-megaphone-line&quot;&gt;&lt;/i&gt;Buy One Get Two
                                    Free&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div&gt;
                                &lt;span&gt;&lt;i class=&quot;ri-gift-line&quot;&gt;&lt;/i&gt;Gift Card for all the
                                    season&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/16.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header12"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header12"><code data-lang="html">&lt;header class=&quot;header-style-5 color-style style-classic&quot; id=&quot;sticky-header&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header top-header-theme&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact text-end&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-truck-line&quot;&gt;&lt;/i&gt;Track Order&lt;/li&gt;
                            &lt;li class=&quot;pe-0&quot;&gt;&lt;i class=&quot;ri-gift-line&quot;&gt;&lt;/i&gt;Gift Cards&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar d-block d-xl-none&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot;&gt;
                                &lt;div class=&quot;bar-style&quot; id=&quot;toggle-sidebar-res&quot;&gt;&lt;i
                                        class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/marketplace-2/logo.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;form class=&quot;form_search ajax-search the-basics&quot; role=&quot;form&quot;&gt;
                            &lt;input type=&quot;search&quot; placeholder=&quot;Search any Device or Gadgets...&quot;
                                class=&quot;nav-search nav-search-field typeahead&quot; aria-expanded=&quot;true&quot;&gt;
                            &lt;button type=&quot;submit&quot; name=&quot;nav-submit-button&quot; class=&quot;btn-search&quot;&gt;
                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;/nav&gt;
                        &lt;div class=&quot;top-header d-block&quot;&gt;
                            &lt;ul class=&quot;header-dropdown&quot;&gt;
                                &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;
                                    &lt;a href=&quot;login.html&quot;&gt;
                                        &lt;i class=&quot;ri-user-line&quot;&gt;&lt;/i&gt;
                                    &lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li class=&quot;onhover-div d-xl-none d-inline-block mobile-search&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt;&lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bottom-part&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-3&quot;&gt;
                    &lt;div class=&quot;category-menu d-none d-xl-block h-100&quot;&gt;
                        &lt;div id=&quot;toggle-sidebar&quot; class=&quot;toggle-sidebar&quot;&gt;
                            &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                            &lt;h5 class=&quot;mb-0&quot;&gt;shop by category&lt;/h5&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;sidenav fixed-sidebar marketplace-sidebar&quot;&gt;
                        &lt;nav&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;sidebar-back text-start d-xl-none d-block&quot;&gt;&lt;i
                                        class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt; Back&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;TV &amp; Audio&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu clothing-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;row m-0&quot;&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;women&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dresses&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skirts&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;westarn wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;h5&gt;men&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sports wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;western wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;accessories&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;a href=&quot;#&quot; class=&quot;mega-menu-banner&quot;&gt;&lt;img
                                                            src=&quot;../assets/images/mega-menu/fashion.jpg&quot; alt=&quot;&quot;
                                                            class=&quot;img-fluid blur-up lazyload&quot;&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;air conditioners&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;makeup&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skincare&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;premium beauty&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fragrances&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;luxury beauty&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;hair care&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;tools &amp; brushes&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Refrigerators&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shopper bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;laptop bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clutches&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wallets&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;leathers&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;satchels&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Washing Machines&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;formal shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;casual shoes&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Kitchen &amp; Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Gaming Consoles&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;cameras&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more..&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;helmets&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;scarves&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more...&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessory gift sets&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;travel accessories&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;phone cases&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;belts &amp; more&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wearable&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Heating &amp; Cooling&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All accessories &lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All Electronics &lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-9&quot;&gt;
                    &lt;div class=&quot;main-nav-center&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                &lt;li class=&quot;mobile-box&quot;&gt;
                                    &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;invoice template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-1.html&quot;&gt;invoice
                                                                            1&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-2.html&quot;&gt;invoice
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-3.html&quot;&gt;invoice
                                                                            3&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-4.html&quot;&gt;invoice
                                                                            4&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-5.html&quot;&gt;invoice
                                                                            5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;elements&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                            elements page&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                            product&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                            sale&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                            success&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                            success 2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;search&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                            search&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;model&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                            monday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                            year&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;add to cart&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                            popup&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                            &lt;i
                                                                                class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                            Image&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                            Slider&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Accordion&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                            Sticky&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                            Vertical Tab&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Sidebar Left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                            Sidebar Right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            No Sidebar&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Column Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                            Thumbnail Image Outside&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Rectangle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                            Circle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                            Image Swatch&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Color&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                            Radio Button&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                            Dropdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Simple&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Classified&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                            Chart&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                            &amp; Return&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            Review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                            an Expert&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                            (Cross Sale)&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                            Stock
                                                                            Progress&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                            Stock&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                            Countdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Zoom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                            360 View&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                            Share&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                            Products&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                            &amp; Compare&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                4&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/13.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header13"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header13"><code data-lang="html">&lt;header class=&quot;header-style-5 color-style&quot; id=&quot;sticky-header&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header top-header-theme&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123 - 456 - 7890&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact text-end&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-truck-line&quot;&gt;&lt;/i&gt;Track Order&lt;/li&gt;
                            &lt;li class=&quot;pe-0&quot;&gt;&lt;i class=&quot;ri-gift-line&quot;&gt;&lt;/i&gt;Gift Cards&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar d-block d-xl-none&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot;&gt;
                                &lt;div class=&quot;bar-style&quot; id=&quot;toggle-sidebar-res&quot;&gt;&lt;i
                                        class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/marketplace-2/logo.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;form class=&quot;form_search ajax-search the-basics&quot; role=&quot;form&quot;&gt;
                            &lt;input type=&quot;search&quot; placeholder=&quot;Search any Device or Gadgets...&quot;
                                class=&quot;nav-search nav-search-field typeahead&quot; aria-expanded=&quot;true&quot;&gt;
                            &lt;button type=&quot;submit&quot; name=&quot;nav-submit-button&quot; class=&quot;btn-search&quot;&gt;
                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                        &lt;/nav&gt;
                        &lt;div class=&quot;top-header d-block&quot;&gt;
                            &lt;ul class=&quot;header-dropdown&quot;&gt;
                                &lt;li class=&quot;mobile-wishlist&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-line&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;
                                    &lt;a href=&quot;login.html&quot;&gt;
                                        &lt;i class=&quot;ri-user-line&quot;&gt;&lt;/i&gt;
                                    &lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li class=&quot;onhover-div d-xl-none d-inline-block mobile-search&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt;&lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bottom-part&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-3&quot;&gt;
                    &lt;div class=&quot;category-menu d-none d-xl-block h-100&quot;&gt;
                        &lt;div id=&quot;toggle-sidebar&quot; class=&quot;toggle-sidebar&quot;&gt;
                            &lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;
                            &lt;h5 class=&quot;mb-0&quot;&gt;shop by category&lt;/h5&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;sidenav fixed-sidebar marketplace-sidebar&quot;&gt;
                        &lt;nav&gt;
                            &lt;div&gt;
                                &lt;div class=&quot;sidebar-back text-start d-xl-none d-block&quot;&gt;&lt;i
                                        class=&quot;fa fa-angle-left pe-2&quot;&gt;&lt;/i&gt; Back&lt;/div&gt;
                            &lt;/div&gt;
                            &lt;ul id=&quot;sub-menu&quot; class=&quot;sm pixelstrap sm-vertical&quot;&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;TV &amp; Audio&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu clothing-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;row m-0&quot;&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;women&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dresses&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skirts&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;westarn wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                        &lt;h5&gt;men&apos;s fashion&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sports wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;western wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ethic wear&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;div class=&quot;link-section&quot;&gt;
                                                        &lt;h5&gt;accessories&lt;/h5&gt;
                                                        &lt;ul&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                            &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;/ul&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;col-xl-4&quot;&gt;
                                                    &lt;a href=&quot;#&quot; class=&quot;mega-menu-banner&quot;&gt;&lt;img
                                                            src=&quot;../assets/images/mega-menu/fashion.jpg&quot; alt=&quot;&quot;
                                                            class=&quot;img-fluid blur-up lazyload&quot;&gt;&lt;/a&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;air conditioners&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;makeup&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;skincare&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;premium beauty&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fragrances&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;luxury beauty&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;hair care&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;tools &amp; brushes&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Refrigerators&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shopper bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;laptop bags&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clutches&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;purses&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wallets&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;leathers&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;satchels&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;Washing Machines&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;sport shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;formal shoes&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;casual shoes&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Kitchen &amp; Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Gaming Consoles&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;cameras&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;fashion jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;caps and hats&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;precious jewellery&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more..&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;necklaces&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;earrings&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wrist wear&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt; &lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;ties&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cufflinks&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pockets squares&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;helmets&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;#&quot;&gt;scarves&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt; &lt;a href=&quot;#&quot;&gt;more...&lt;/a&gt;
                                                            &lt;ul&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessory gift sets&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;travel accessories&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;phone cases&lt;/a&gt;&lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;belts &amp; more&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;wearable&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;Heating &amp; Cooling&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All accessories &lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;All Electronics &lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xxl-6 col-xl-9 position-unset&quot;&gt;
                    &lt;div class=&quot;main-nav-center&quot;&gt;
                        &lt;nav class=&quot;text-start&quot;&gt;
                            &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                &lt;li class=&quot;mobile-box&quot;&gt;
                                    &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;invoice template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-1.html&quot;&gt;invoice
                                                                            1&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-2.html&quot;&gt;invoice
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-3.html&quot;&gt;invoice
                                                                            3&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-4.html&quot;&gt;invoice
                                                                            4&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-5.html&quot;&gt;invoice
                                                                            5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;elements&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                            elements page&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                            product&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                            sale&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                            success&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                            success 2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;search&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                            search&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;model&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                            monday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                            year&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;add to cart&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                            popup&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                            &lt;i
                                                                                class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                            Image&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                            Slider&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Accordion&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                            Sticky&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                            Vertical Tab&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Sidebar Left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                            Sidebar Right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            No Sidebar&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Column Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                            Thumbnail Image Outside&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Rectangle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                            Circle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                            Image Swatch&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Color&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                            Radio Button&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                            Dropdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Simple&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Classified&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                            Chart&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                            &amp; Return&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            Review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                            an Expert&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                            (Cross Sale)&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                            Stock
                                                                            Progress&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                            Stock&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                            Countdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Zoom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                            360 View&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                            Share&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                            Products&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                            &amp; Compare&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                4&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xxl-3 d-none d-xxl-inline-block&quot;&gt;
                    &lt;div class=&quot;header-options&quot;&gt;
                        &lt;div class=&quot;vertical-slider no-arrow&quot;&gt;
                            &lt;div&gt;
                                &lt;span&gt;&lt;i class=&quot;ri-truck-line&quot;&gt;&lt;/i&gt;Free Shipping on Orders
                                    $100+&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div&gt;
                                &lt;span&gt;&lt;i class=&quot;ri-megaphone-line&quot;&gt;&lt;/i&gt;Buy One Get Two
                                    Free&lt;/span&gt;
                            &lt;/div&gt;
                            &lt;div&gt;
                                &lt;span&gt;&lt;i class=&quot;ri-gift-line&quot;&gt;&lt;/i&gt;Gift Card for all the
                                    season&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/14.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header14"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header14"><code data-lang="html">&lt;header class=&quot;header-style-7&quot;&gt;
    &lt;div class=&quot;container-fluid px-sm-5&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;navbar d-lg-none d-inline-block&quot;&gt;
                            &lt;a href=&quot;javascript:void(0)&quot;&gt;
                                &lt;div class=&quot;bar-style&quot;&gt;
                                    &lt;i class=&quot;ri-bar-chart-horizontal-line&quot;&gt;&lt;/i&gt;
                                &lt;/div&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/icon/logo/37.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;form class=&quot;form_search ms-5&quot; role=&quot;form&quot;&gt;
                        &lt;input id=&quot;query search-autocomplete&quot; type=&quot;search&quot;
                            placeholder=&quot;Search any Device or Gadgets...&quot; class=&quot;nav-search nav-search-field&quot;
                            aria-expanded=&quot;true&quot;&gt;
                        &lt;button type=&quot;submit&quot; name=&quot;nav-submit-button&quot; class=&quot;btn-search&quot;&gt;
                        &lt;/button&gt;
                    &lt;/form&gt;
                    &lt;div class=&quot;menu-right ms-auto d-flex align-items-center&quot;&gt;
                        &lt;div class=&quot;d-flex align-items-center&quot;&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul class=&quot;d-flex align-items-center&quot;&gt;
                                    &lt;li data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#deliveryarea&quot;
                                        class=&quot;delivery-area d-xl-none d-inline-flex&quot;&gt;
                                        &lt;img src=&quot;../assets/images/icon/location-pin.png&quot;
                                            class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
                                    &lt;/li&gt;
                                    &lt;li data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#deliveryarea&quot;
                                        class=&quot;delivery-area d-xl-inline-flex d-none&quot;&gt;
                                        &lt;div&gt;
                                            &lt;i class=&quot;ri-map-pin-2-fill&quot;&gt;&lt;/i&gt;
                                            &lt;h6&gt;201 World Way, California&lt;/h6&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-search d-xl-none&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;img src=&quot;../assets/images/icon/magnifier-zoom.png&quot;
                                                class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt;&lt;img src=&quot;../assets/images/icon/global.png&quot;
                                                class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;img src=&quot;../assets/images/icon/trolley.png&quot;
                                                class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="content-preview">
                            <img src="../assets/images/element/15.jpg" class="img-fluid border-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#header15"
                                title="Copy"><i class="ri-file-copy-line"></i>copy</button>
                            <pre class="language-html" id="header15"><code data-lang="html">&lt;header id=&quot;sticky-header&quot; class=&quot;style-light header-compact&quot;&gt;
    &lt;div class=&quot;mobile-fix-option&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;top-header top-header-theme&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-6&quot;&gt;
                    &lt;div class=&quot;header-contact&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;Welcome to Our store Multikart&lt;/li&gt;
                            &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot; class=&quot;text-white fw-bold&quot;&gt;Become a Vendor&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-lg-6 text-end&quot;&gt;
                    &lt;ul class=&quot;header-dropdown&quot;&gt;
                        &lt;li class=&quot;mobile-wishlist pe-0&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-heart-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;/li&gt;
                        &lt;li class=&quot;onhover-dropdown mobile-account&quot;&gt;&lt;i class=&quot;ri-user-fill&quot;&gt;&lt;/i&gt;
                            My Account
                            &lt;ul class=&quot;onhover-show-div&quot;&gt;
                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;Login&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col-sm-12&quot;&gt;
                &lt;div class=&quot;main-menu&quot;&gt;
                    &lt;div class=&quot;menu-left&quot;&gt;
                        &lt;div class=&quot;brand-logo&quot;&gt;
                            &lt;a href=&quot;index.html&quot;&gt;&lt;img src=&quot;../assets/images/vegetables-4/logo.png&quot;
                                    class=&quot;img-fluid blur-up lazyload&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;form class=&quot;form_search&quot; role=&quot;form&quot;&gt;
                            &lt;input id=&quot;query search-autocomplete&quot; type=&quot;search&quot;
                                placeholder=&quot;Search any Device or Gadgets...&quot; class=&quot;nav-search nav-search-field&quot;
                                aria-expanded=&quot;true&quot;&gt;
                            &lt;button type=&quot;submit&quot; name=&quot;nav-submit-button&quot; class=&quot;btn-search&quot;&gt;
                                &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                            &lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;menu-right pull-right&quot;&gt;
                        &lt;div&gt;
                            &lt;div class=&quot;icon-nav&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li class=&quot;onhover-div mobile-search&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#searchModal&quot;&gt;
                                            &lt;i class=&quot;ri-search-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;

                                    &lt;li class=&quot;onhover-div mobile-setting&quot;&gt;
                                        &lt;div&gt;&lt;i class=&quot;ri-settings-2-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                        &lt;div class=&quot;show-div setting&quot;&gt;
                                            &lt;h6&gt;language&lt;/h6&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;english&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;french&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                            &lt;h6&gt;currency&lt;/h6&gt;
                                            &lt;ul class=&quot;list-inline&quot;&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;euro&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;rupees&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;pound&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;dollar&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;

                                    &lt;li class=&quot;onhover-div mobile-cart&quot;&gt;
                                        &lt;div data-bs-toggle=&quot;offcanvas&quot; data-bs-target=&quot;#cartOffcanvas&quot;&gt;
                                            &lt;i class=&quot;ri-shopping-cart-line&quot;&gt;&lt;/i&gt;
                                        &lt;/div&gt;
                                        &lt;span class=&quot;cart_qty_cls&quot;&gt;2&lt;/span&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;bottom-part bottom-light&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-12 menu-row&quot;&gt;
                    &lt;div data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#deliveryarea&quot;
                        class=&quot;delivery-area d-md-flex d-none&quot;&gt;
                        &lt;i data-feather=&quot;map-pin&quot;&gt;&lt;/i&gt;
                        &lt;div&gt;
                            &lt;h6&gt;Delivery to&lt;/h6&gt;
                            &lt;h5&gt;400520&lt;/h5&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;main-nav-center&quot;&gt;
                        &lt;nav id=&quot;main-nav&quot; class=&quot;text-start&quot;&gt;
                            &lt;div class=&quot;toggle-nav&quot;&gt;&lt;i class=&quot;ri-bar-chart-horizontal-line sidebar-bar&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                            &lt;ul id=&quot;main-menu&quot; class=&quot;sm pixelstrap sm-horizontal&quot;&gt;
                                &lt;li class=&quot;mobile-box&quot;&gt;
                                    &lt;div class=&quot;mobile-back text-end&quot;&gt;Menu&lt;i class=&quot;ri-close-line&quot;&gt;&lt;/i&gt;&lt;/div&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;feature &lt;div class=&quot;lable-nav&quot;&gt;new&lt;/div&gt;&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;invoice template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-1.html&quot;&gt;invoice
                                                                            1&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-2.html&quot;&gt;invoice
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-3.html&quot;&gt;invoice
                                                                            3&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-4.html&quot;&gt;invoice
                                                                            4&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;invoice-5.html&quot;&gt;invoice
                                                                            5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;elements&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;elements.html&quot;&gt;
                                                                            elements page&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;
                                                                        &lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/welcome.html&quot;&gt;welcome&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/new-product-announcement.html&quot;&gt;announcement&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/abandonment-email.html&quot;&gt;abandonment&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer.html&quot;&gt;offer&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/offer-2.html&quot;&gt;offer
                                                                            2&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/product-review.html&quot;&gt;review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/featured-products.html&quot;&gt;featured
                                                                            product&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;email template&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/black-friday.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/cyber-monday.html&quot;&gt;cyber-monday&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/flash-sale.html&quot;&gt;flash
                                                                            sale&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success.html&quot;&gt;order
                                                                            success&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a target=&quot;_blank&quot;
                                                                            href=&quot;../email-template/email-order-success-two.html&quot;&gt;order
                                                                            success 2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;cookie bar&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;bottom&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;bottom left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bicycle.html&quot;&gt;bottom right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;search&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-2.html&quot;&gt;ajax
                                                                            search&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;model&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;Newsletter&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;index.html&quot;&gt;exit&lt;i
                                                                                class=&quot;ms-2 fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;christmas.html&quot;&gt;christmas&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;furniture-3.html&quot;&gt;black
                                                                            friday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;fashion-4.html&quot;&gt;cyber
                                                                            monday&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;marketplace-demo-3.html&quot;&gt;new
                                                                            year&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;add to cart&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;nursery.html&quot;&gt;cart modal
                                                                            popup&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;vegetables.html&quot;&gt;qty. counter
                                                                            &lt;i
                                                                                class=&quot;fa fa-bolt icon-trend&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;bags.html&quot;&gt;cart top&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;shoes.html&quot;&gt;cart bottom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;watch.html&quot;&gt;cart left&lt;/a&gt;&lt;/li&gt;
                                                                    &lt;li&gt;&lt;a href=&quot;tools.html&quot;&gt;cart right&lt;/a&gt;&lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;shop&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(vegetables).html&quot;&gt;tab style&lt;span
                                                    class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(top-filter).html&quot;&gt;top filter&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(modern).html&quot;&gt;modern&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page.html&quot;&gt;left sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(right).html&quot;&gt;right sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(category-slider).html&quot;&gt;Category Slider&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(sidebar-popup).html&quot;&gt;sidebar popup&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(metro).html&quot;&gt;metro&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(full-width).html&quot;&gt;full width&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(load-more).html&quot;&gt;load more&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(2-grid).html&gt;two grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=category-page(3-grid).html&gt;three grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(4-grid).html&quot;&gt;four grid&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;category-page(list-view).html&quot;&gt;list view&lt;/a&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;mega hover-cls&quot;&gt;
                                    &lt;a href=&quot;#!&quot;&gt;product&lt;/a&gt;
                                    &lt;ul class=&quot;mega-menu full-mega-menu&quot;&gt;
                                        &lt;li&gt;
                                            &lt;div class=&quot;container&quot;&gt;
                                                &lt;div class=&quot;row g-xl-4 g-0&quot;&gt;
                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(4-image).html&quot;&gt;Product
                                                                            Image&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(slider).html&quot;&gt;Product
                                                                            Slider&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Accordion&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Product
                                                                            Sticky&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Product
                                                                            Vertical Tab&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Page&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Sidebar Left&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Product
                                                                            Sidebar Right&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            No Sidebar&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Column Thumbnail&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(image-outside).html&quot;&gt;Product
                                                                            Thumbnail Image Outside&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Variants Style&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Rectangle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Variant
                                                                            Circle&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Variant
                                                                            Image Swatch&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(3-column).html&quot;&gt;Variant
                                                                            Color&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Variant
                                                                            Radio Button&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(sticky).html&quot;&gt;Variant
                                                                            Dropdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Product
                                                                            Simple&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(left-sidebar).html&quot;&gt;Product
                                                                            Classified&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Size
                                                                            Chart&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Delivery
                                                                            &amp; Return&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Product
                                                                            Review&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(no-sidebar).html&quot;&gt;Ask
                                                                            an Expert&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(bundle).html&quot;&gt;Bundle
                                                                            (Cross Sale)&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Hot
                                                                            Stock
                                                                            Progress&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Out
                                                                            Stock&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Sale
                                                                            Countdown&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Product
                                                                            Zoom&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(360-view).html&quot;&gt;Product
                                                                            360 View&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;col mega-box&quot;&gt;
                                                        &lt;div class=&quot;link-section&quot;&gt;
                                                            &lt;div class=&quot;menu-title&quot;&gt;
                                                                &lt;h5&gt;Product Features&lt;/h5&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;menu-content&quot;&gt;
                                                                &lt;ul&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Sticky
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(accordian).html&quot;&gt;Secure
                                                                            Checkout&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(vertical-tab).html&quot;&gt;Social
                                                                            Share&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(thumbnail).html&quot;&gt;Related
                                                                            Products&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                    &lt;li&gt;
                                                                        &lt;a href=&quot;product-page(right-sidebar).html&quot;&gt;Wishlist
                                                                            &amp; Compare&lt;/a&gt;
                                                                    &lt;/li&gt;
                                                                &lt;/ul&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                                &lt;div class=&quot;row&quot;&gt;
                                                    &lt;div class=&quot;col-12&quot;&gt;
                                                        &lt;img src=&quot;../assets/images/menu-banner.jpg&quot;
                                                            class=&quot;img-fluid mega-img d-xl-block d-none&quot;&gt;
                                                    &lt;/div&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;pages&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;vendor&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-dashboard.html&quot;&gt;vendor dashboard&lt;/a&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;vendor-profile.html&quot;&gt;vendor profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;become-vendor.html&quot;&gt;become vendor&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;account&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;wishlist.html&quot;&gt;wishlist&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;cart.html&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;dashboard.html&quot;&gt;Dashboard&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;login.html&quot;&gt;login&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;register.html&quot;&gt;register&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;contact.html&quot;&gt;contact&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;forget_pwd.html&quot;&gt;forget password&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;profile.html&quot;&gt;profile&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;checkout.html&quot;&gt;checkout&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-success.html&quot;&gt;order success&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;order-tracking.html&quot;&gt;order tracking&lt;span
                                                            class=&quot;new-tag&quot;&gt;new&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;portfolio&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;grid&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-2-col.html&quot;&gt;grid
                                                                2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-3-col.html&quot;&gt;grid
                                                                3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;grid-4-col.html&quot;&gt;grid
                                                                4&lt;/a&gt;&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;&quot;&gt;masonry&lt;/a&gt;
                                                    &lt;ul&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-2-grid.html&quot;&gt;grid 2&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-3-grid.html&quot;&gt;grid 3&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-4-grid.html&quot;&gt;grid 4&lt;/a&gt;&lt;/li&gt;
                                                        &lt;li&gt;&lt;a href=&quot;masonary-fullwidth.html&quot;&gt;full width&lt;/a&gt;
                                                        &lt;/li&gt;
                                                    &lt;/ul&gt;
                                                &lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;about-page.html&quot;&gt;about us&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;search.html&quot;&gt;search&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;review.html&quot;&gt;review&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;
                                            &lt;a href=&quot;#!&quot;&gt;compare&lt;/a&gt;
                                            &lt;ul&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare.html&quot;&gt;compare&lt;/a&gt;&lt;/li&gt;
                                                &lt;li&gt;&lt;a href=&quot;compare-2.html&quot;&gt;compare-2&lt;/a&gt;&lt;/li&gt;
                                            &lt;/ul&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;collection.html&quot;&gt;collection&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;lookbook.html&quot;&gt;lookbook&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;sitemap.html&quot;&gt;site map&lt;/a&gt;
                                        &lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;404.html&quot;&gt;404&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;coming-soon.html&quot;&gt;coming soon&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;faq.html&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                                &lt;li&gt;
                                    &lt;a href=&quot;#!&quot;&gt;blog&lt;/a&gt;
                                    &lt;ul&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-page.html&quot;&gt;left sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(right-sidebar).html&quot;&gt;right sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog(no-sidebar).html&quot;&gt;no sidebar&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;&lt;a href=&quot;blog-details.html&quot;&gt;blog details&lt;/a&gt;&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/nav&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;delivery-area d-xl-flex d-none ms-auto me-0&quot;&gt;
                        &lt;div&gt;
                            &lt;h5&gt;Call us: 123-456-7898&lt;/h5&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/header&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
    <!-- theme setting start -->
 