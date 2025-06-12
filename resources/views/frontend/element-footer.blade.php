
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Element Footer</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Element Footer</li>
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
                            <a class="nav-link" href="element-header.html">header</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-product.html">product box/style</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-category.html">category</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link active" href="element-footer.html">footer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 content component-col">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner1"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner1"><code data-lang="html">&lt;footer class=&quot;footer-style-1&quot;&gt;
    &lt;section class=&quot;section-b-space darken-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row footer-theme g-md-5 g-2&quot;&gt;
                &lt;div class=&quot;col-xl-3 col-lg-5 col-md-6 sub-title&quot;&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;footer-logo&quot;&gt;&lt;a href=&quot;index.html&quot;&gt;&lt;img alt=&quot;logo&quot; class=&quot;img-fluid&quot;
                                    src=&quot;../assets/images/logo-white.png&quot;&gt;
                            &lt;/a&gt;&lt;/div&gt;
                        &lt;p&gt; Discover the latest trends and enjoy seamless shopping
                            with our exclusive collections.
                        &lt;/p&gt;

                        &lt;ul class=&quot;contact-list&quot;&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-map-pin-line&quot;&gt;&lt;/i&gt;
                                Multikart Demo Store, Demo Store India 345-659 &lt;/li&gt;

                            &lt;li&gt;&lt;i class=&quot;ri-phone-line&quot;&gt;&lt;/i&gt;
                                Call Us: 123-456-7898 &lt;/li&gt;
                            &lt;li&gt;&lt;i class=&quot;ri-mail-line&quot;&gt;&lt;/i&gt;
                                Email Us: Support@Multikart.com &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-2 col-lg-3 col-md-4 col-md-6&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;Categories&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li class=&quot;&quot;&gt;&lt;a href=&quot;product-page(thumbnail).html&quot; class=&quot;text-content&quot;&gt;Baby
                                        Essentials&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;&quot;&gt;&lt;a href=&quot;product-page(thumbnail).html&quot; class=&quot;text-content&quot;&gt;Bag
                                        Emporium&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;&quot;&gt;&lt;a href=&quot;product-page(thumbnail).html&quot; class=&quot;text-content&quot;&gt;Books&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li class=&quot;&quot;&gt;&lt;a href=&quot;product-page(thumbnail).html&quot;
                                        class=&quot;text-content&quot;&gt;Christmas&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;&quot;&gt;&lt;a href=&quot;product-page(thumbnail).html&quot; class=&quot;text-content&quot;&gt;Classic
                                        Furnishings&lt;/a&gt;&lt;/li&gt;
                                &lt;li class=&quot;&quot;&gt;&lt;a href=&quot;product-page(thumbnail).html&quot; class=&quot;text-content&quot;&gt;Crystal
                                        Clarity Optics&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl col-lg-3 col-md-3&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;Useful Links&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;collection.html&quot;&gt;Collections&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;about-page.html&quot;&gt;About Us&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;blog(right-sidebar).html&quot;&gt;Blogs&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;offers.html&quot;&gt;Offers&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;search.html&quot;&gt;Search&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-2 col-md-3&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;Help Center&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;dashboard.html&quot;&gt;My
                                        Account&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;dashboard.html&quot;&gt;My
                                        Orders&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;order-tracking.html&quot;&gt;Track
                                        Order&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;wishlist.html&quot;&gt;Wishlist&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;faq.html&quot;&gt;Faq&apos;s&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a class=&quot;text-content&quot; href=&quot;contact.html&quot;&gt;Contact
                                        Us&lt;/a&gt;
                                &lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-3 col-lg-4 col-md-6&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;Follow Us&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;p class=&quot;mb-cls-content&quot;&gt;Never Miss Anything From
                                Store By Signing Up To Our Newsletter.&lt;/p&gt;
                            &lt;form novalidate=&quot;&quot; class=&quot;form-inline&quot;&gt;
                                &lt;div class=&quot;form-group me-sm-3 mb-2&quot;&gt;&lt;input type=&quot;email&quot; formcontrolname=&quot;email&quot;
                                        class=&quot;form-control&quot; placeholder=&quot;Enter Email Address&quot;&gt;
                                &lt;/div&gt;
                                &lt;button class=&quot;btn btn-solid mb-2&quot; id=&quot;subscribe&quot; type=&quot;submit&quot;&gt;
                                    &lt;div&gt;
                                        Subscribe &lt;/div&gt;
                                &lt;/button&gt;
                            &lt;/form&gt;
                            &lt;div class=&quot;footer-social&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://facebook.com/&quot;&gt;&lt;i
                                                class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://twitter.com/&quot;&gt;&lt;i
                                                class=&quot;ri-twitter-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://instagram.com/&quot;&gt;&lt;i
                                                class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;&lt;a target=&quot;_blank&quot; href=&quot;https://pinterest.com/&quot;&gt;&lt;i
                                                class=&quot;ri-pinterest-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
    &lt;div class=&quot;sub-footer dark-subfooter&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;img alt=&quot;payment options&quot; src=&quot;../assets/images/payment.png&quot; class=&quot;img-fluid&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner2"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner2"><code data-lang="html">&lt;footer&gt;
    &lt;div class=&quot;dark-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;section-b-space border-b&quot;&gt;
                &lt;div class=&quot;row footer-theme2&quot;&gt;
                    &lt;div class=&quot;col-lg-3&quot;&gt;
                        &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                            &lt;h4&gt;about&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;div class=&quot;footer-logo&quot;&gt;&lt;img src=&quot;../assets/images/fashion-2/logo-white.png&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                            &lt;p&gt;Discover the latest fashion trends, explore unique styles, and enjoy seamless
                                shopping with our exclusive collections, designed to elevate your
                                wardrobe.

                            &lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-6 subscribe-wrapper&quot;&gt;
                        &lt;div class=&quot;subscribe-block&quot;&gt;
                            &lt;h2&gt;newsletter&lt;/h2&gt;
                            &lt;form&gt;
                                &lt;div class=&quot;form-group&quot;&gt;
                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlInput3&quot;
                                        placeholder=&quot;Enter your email&quot;&gt;
                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-solid&quot;&gt;subscribe&lt;/button&gt;
                                &lt;/div&gt;
                            &lt;/form&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-3&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;store information&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul class=&quot;contact-details&quot;&gt;
                                &lt;li&gt;Multikart Demo Store, Demo store India 345-659&lt;/li&gt;
                                &lt;li&gt;Call Us: 123-456-7898&lt;/li&gt;
                                &lt;li&gt;Email Us: &lt;a href=&quot;#!&quot;&gt;Support@Multikart.com&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;Fax: 123456&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;dark-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;small-section&quot;&gt;
                &lt;div class=&quot;row footer-theme2&quot;&gt;
                    &lt;div class=&quot;col p-set&quot;&gt;
                        &lt;div class=&quot;footer-link&quot;&gt;
                            &lt;div class=&quot;footer-title&quot;&gt;
                                &lt;h4&gt;my account&lt;/h4&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;footer-content&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;mens&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;womans&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;clothing&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;accessories&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;featured&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-link-b&quot;&gt;
                            &lt;div class=&quot;footer-title&quot;&gt;
                                &lt;h4&gt;why we choose&lt;/h4&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;footer-content&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;shipping &amp; return&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;secure shopping&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;gallery&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;affiliates&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#!&quot;&gt;contacts&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sub-footer darker-subfooter&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;img src=&quot;../assets/images/payment.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/3.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner3"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner3"><code data-lang="html">&lt;footer class=&quot;footer-light&quot;&gt;
    &lt;div class=&quot;light-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;small-section border-section border-top-0&quot;&gt;
                &lt;div class=&quot;row&quot;&gt;
                    &lt;div class=&quot;col-lg-6&quot;&gt;
                        &lt;div class=&quot;subscribe&quot;&gt;
                            &lt;div&gt;
                                &lt;h4&gt;KNOW IT ALL FIRST!&lt;/h4&gt;
                                &lt;p&gt;Never Miss Anything From Multikart By Signing Up To Our Newsletter.&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-6&quot;&gt;
                        &lt;form
                            action=&quot;https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;amp;id=082f74cbda&quot;
                            class=&quot;form-inline subscribe-form auth-form needs-validation&quot; method=&quot;post&quot;
                            id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; target=&quot;_blank&quot;&gt;
                            &lt;div class=&quot;form-group mx-sm-3&quot;&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;EMAIL&quot; id=&quot;mce-EMAIL&quot;
                                    placeholder=&quot;Enter your email&quot; required=&quot;required&quot;&gt;
                            &lt;/div&gt;
                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-solid&quot; id=&quot;mc-submit&quot;&gt;subscribe&lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;section class=&quot;section-b-space light-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row footer-theme partition-f&quot;&gt;
                &lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
                    &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                        &lt;h4&gt;about&lt;/h4&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;footer-content&quot;&gt;
                        &lt;div class=&quot;footer-logo&quot;&gt;&lt;img src=&quot;../assets/images/fashion-3/logo.png&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;p&gt;Discover the latest fashion trends, explore unique styles, and enjoy seamless shopping
                            with our carefully curated exclusive collections, designed to elevate your wardrobe.

                        &lt;/p&gt;
                        &lt;div class=&quot;footer-social&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-twitter-x-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-tiktok-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col offset-xl-1&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;my account&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;mens&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;womans&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clothing&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;why we choose&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shipping &amp; return&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;secure shopping&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;gallery&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;affiliates&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;contacts&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;store information&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul class=&quot;contact-list&quot;&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-map-pin-2-fill&quot;&gt;&lt;/i&gt;Multikart Demo Store, Demo store India
                                    345-659&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123-456-7898&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-mail-fill&quot;&gt;&lt;/i&gt;Email Us: Support@Multikart.com&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-printer-fill&quot;&gt;&lt;/i&gt;Fax: 123456&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
    &lt;div class=&quot;sub-footer&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;img src=&quot;../assets/images/payment.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/4.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner5"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner5"><code data-lang="html">&lt;footer&gt;
    &lt;div class=&quot;dark-subscribe theme-color&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;small-section&quot;&gt;
                &lt;div class=&quot;row&quot;&gt;
                    &lt;div class=&quot;col-xl-6 m-auto&quot;&gt;
                        &lt;div class=&quot;subscribe&quot;&gt;
                            &lt;h4&gt;newsletter&lt;/h4&gt;
                            &lt;form class=&quot;form-inline subscribe-form classic-form&quot;&gt;
                                &lt;div class=&quot;form-group&quot;&gt;
                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlInput&quot;
                                        placeholder=&quot;Enter your email&quot;&gt;
                                &lt;/div&gt;
                                &lt;button type=&quot;submit&quot; class=&quot;btn btn-solid&quot;&gt;subscribe&lt;/button&gt;
                            &lt;/form&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;section class=&quot;section-b-space bg-light&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row footer-theme partition-f&quot;&gt;
                &lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
                    &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                        &lt;h4&gt;about&lt;/h4&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;footer-content&quot;&gt;
                        &lt;div class=&quot;footer-logo&quot;&gt;&lt;img src=&quot;../assets/images/fashion-5/logo.png&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;p&gt;Discover the latest fashion trends, explore unique styles, and enjoy seamless shopping
                            with our carefully curated exclusive collections, designed to elevate your wardrobe.&lt;/p&gt;
                        &lt;div class=&quot;footer-social&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-twitter-x-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-tiktok-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col offset-xl-1&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;my account&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;mens&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;womans&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clothing&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;why we choose&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shipping &amp; return&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;secure shopping&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;gallery&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;affiliates&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;contacts&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;store information&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul class=&quot;contact-list&quot;&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-map-pin-2-fill&quot;&gt;&lt;/i&gt;Multikart Demo Store, Demo store India
                                    345-659&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123-456-7898&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-mail-fill&quot;&gt;&lt;/i&gt;Email Us: &lt;a href=&quot;#&quot;&gt;Support@Multikart.com&lt;/a&gt;
                                &lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-printer-fill&quot;&gt;&lt;/i&gt;Fax: 123456&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
    &lt;div class=&quot;sub-footer&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;img src=&quot;../assets/images/payment.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/5.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner6"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner6"><code data-lang="html">&lt;footer class=&quot;jewel-footer&quot;&gt;
    &lt;div class=&quot;white-layout&quot;&gt;
        &lt;section class=&quot;p-0 &quot;&gt;
            &lt;div class=&quot;container-fluid&quot;&gt;
                &lt;div class=&quot;row footer-theme2 section-light footer-border&quot;&gt;
                    &lt;div class=&quot;col&quot;&gt;
                        &lt;div class=&quot;footer-block&quot;&gt;
                            &lt;div class=&quot;footer-container&quot;&gt;
                                &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                                    &lt;h4&gt;about&lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;footer-content&quot;&gt;
                                    &lt;div class=&quot;footer-logo&quot;&gt;
                                        &lt;img src=&quot;../assets/images/jewellery-1/logo-dark.png&quot; alt=&quot;&quot;&gt;
                                    &lt;/div&gt;
                                    &lt;div class=&quot;social-white&quot;&gt;
                                        &lt;ul&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-twitter-x-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                            &lt;li&gt;
                                                &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-tiktok-fill aria-hidden=&quot; true&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                            &lt;/li&gt;
                                        &lt;/ul&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col form-p p-0&quot;&gt;
                        &lt;div class=&quot;footer-block&quot;&gt;
                            &lt;div class=&quot;subscribe-white&quot;&gt;
                                &lt;h2 class=&quot;text-white&quot;&gt;newsletter&lt;/h2&gt;
                                &lt;form&gt;
                                    &lt;div class=&quot;form-group&quot;&gt;
                                        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlInput&quot;
                                            placeholder=&quot;Enter your email&quot;&gt;
                                        &lt;button type=&quot;submit&quot; class=&quot;btn btn-solid black-btn&quot;&gt;subscribe&lt;/button&gt;
                                    &lt;/div&gt;
                                &lt;/form&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col&quot;&gt;
                        &lt;div class=&quot; footer-block&quot;&gt;
                            &lt;div class=&quot;footer-container&quot;&gt;
                                &lt;div class=&quot;footer-title&quot;&gt;
                                    &lt;h4&gt;store information&lt;/h4&gt;
                                &lt;/div&gt;
                                &lt;div class=&quot;footer-content&quot;&gt;
                                    &lt;ul class=&quot;contact-details&quot;&gt;
                                        &lt;li&gt;Multikart Demo Store, Demo store India 345-659&lt;/li&gt;
                                        &lt;li&gt;Call Us: 123-456-7898&lt;/li&gt;
                                        &lt;li&gt;Email Us: &lt;a href=&quot;#&quot;&gt;Support@Multikart.com&lt;/a&gt;&lt;/li&gt;
                                        &lt;li&gt;Fax: 123456&lt;/li&gt;
                                    &lt;/ul&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/section&gt;
    &lt;/div&gt;
    &lt;div class=&quot;white-layout box-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;small-section&quot;&gt;
                &lt;div class=&quot;row footer-theme2&quot;&gt;
                    &lt;div class=&quot;col&quot;&gt;
                        &lt;div class=&quot;footer-link link-white&quot;&gt;
                            &lt;div class=&quot;footer-title&quot;&gt;
                                &lt;h4&gt;my account&lt;/h4&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;footer-content&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;mens&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;womans&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clothing&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;service&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;my order&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;new product&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured product&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sub-footer black-subfooter &quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row &quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;img src=&quot;../assets/images/payment.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/6.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner7"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner7"><code data-lang="html">&lt;footer class=&quot;bg-img-gym overlay-cls effect-cls footer-effect&quot;&gt;
    &lt;img src=&quot;../assets/images/game/full-banner/3.jpg&quot; alt=&quot;&quot; class=&quot;bg-img blur-up lazyload&quot;&gt;
    &lt;div class=&quot;dark-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;section-b-space border-b&quot;&gt;
                &lt;div class=&quot;row footer-theme2&quot;&gt;
                    &lt;div class=&quot;col-lg-3&quot;&gt;
                        &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                            &lt;h4&gt;about&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;div class=&quot;footer-logo&quot;&gt;
                                &lt;img src=&quot;../assets/images/game/logo-white.png&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                            &lt;p&gt;Discover the latest fashion trends, explore unique styles, and enjoy seamless
                                shopping with our carefully curated exclusive collections, designed to elevate your
                                wardrobe.&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-6 subscribe-wrapper&quot;&gt;
                        &lt;div class=&quot;subscribe-block&quot;&gt;
                            &lt;h2&gt;newsletter&lt;/h2&gt;
                            &lt;form&gt;
                                &lt;div class=&quot;form-group&quot;&gt;
                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlInput3&quot;
                                        placeholder=&quot;Enter your email&quot;&gt;
                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-solid &quot;&gt;subscribe&lt;/button&gt;
                                &lt;/div&gt;
                            &lt;/form&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-3&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;store information&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul class=&quot;contact-details&quot;&gt;
                                &lt;li&gt;Multikart Demo Store, Demo store India 345-659&lt;/li&gt;
                                &lt;li&gt;Call Us: 123-456-7898&lt;/li&gt;
                                &lt;li&gt;Email Us: &lt;a href=&quot;#&quot;&gt;Support@Multikart.com&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;Fax: 123456&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;dark-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;small-section&quot;&gt;
                &lt;div class=&quot;row footer-theme2&quot;&gt;
                    &lt;div class=&quot;col p-set&quot;&gt;
                        &lt;div class=&quot;footer-link&quot;&gt;
                            &lt;div class=&quot;footer-title&quot;&gt;
                                &lt;h4&gt;my account&lt;/h4&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;footer-content&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;mens&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;womans&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clothing&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-link-b&quot;&gt;
                            &lt;div class=&quot;footer-title&quot;&gt;
                                &lt;h4&gt;why we choose&lt;/h4&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;footer-content&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shipping &amp; return&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;secure shopping&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;gallery&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;affiliates&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;contacts&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sub-footer darker-subfooter&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;img src=&quot;../assets/images/payment.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/7.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner8"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner8"><code data-lang="html">&lt;footer class=&quot;footer-5&quot;&gt;
    &lt;div class=&quot;dark-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;section-b-space&quot;&gt;
                &lt;div class=&quot;row footer-theme2&quot;&gt;
                    &lt;div class=&quot;col-lg-3&quot;&gt;
                        &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                            &lt;h4&gt;about&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;div class=&quot;footer-logo&quot;&gt;
                                &lt;img src=&quot;../assets/images/marijuana/logo-white.png&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et.Lorem ipsum dolor sit amet, consectetur adipiscing&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-6 subscribe-wrapper&quot;&gt;
                        &lt;div class=&quot;subscribe-block&quot;&gt;
                            &lt;h2&gt;newsletter&lt;/h2&gt;
                            &lt;form&gt;
                                &lt;div class=&quot;form-group&quot;&gt;
                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlInput3&quot;
                                        placeholder=&quot;Enter your email&quot;&gt;
                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-solid btn-green&quot;&gt;subscribe&lt;/button&gt;
                                &lt;/div&gt;
                            &lt;/form&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-3&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;store information&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul class=&quot;contact-details&quot;&gt;
                                &lt;li&gt;Multikart Demo Store, Demo store India 345-659&lt;/li&gt;
                                &lt;li&gt;Call Us: 123-456-7898&lt;/li&gt;
                                &lt;li&gt;Email Us: &lt;a href=&quot;#&quot;&gt;Support@Multikart.com&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;Fax: 123456&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sub-footer&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/visa.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/mastercard.png&quot; alt=&quot;&quot;&gt;
                                &lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/paypal.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/american-express.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/discover.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/8.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner9"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner9"><code data-lang="html">&lt;footer class=&quot;footer-light pet-layout-footer&quot;&gt;
    &lt;div class=&quot;white-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;small-section&quot;&gt;
                &lt;div class=&quot;row footer-theme2&quot;&gt;
                    &lt;div class=&quot;col&quot;&gt;
                        &lt;div class=&quot;footer-link link-white&quot;&gt;
                            &lt;div class=&quot;footer-brand-logo&quot;&gt;
                                &lt;a href=&quot;#&quot;&gt;
                                    &lt;img src=&quot;../assets/images/pets/logo.png&quot; class=&quot;img-fluid blur-up lazyload&quot;
                                        alt=&quot;&quot;&gt;
                                &lt;/a&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;social-white&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-twitter-x-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                    &lt;li&gt;
                                        &lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-tiktok-fill aria-hidden=&quot; true&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                                &lt;h4&gt;my account&lt;/h4&gt;
                            &lt;/div&gt;
                            &lt;div class=&quot;footer-content&quot;&gt;
                                &lt;ul&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;mens&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;womans&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clothing&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;service&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;cart&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;my order&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;FAQ&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;new product&lt;/a&gt;&lt;/li&gt;
                                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured product&lt;/a&gt;&lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class=&quot;sub-footer black-subfooter &quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row &quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap
                        &lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;img src=&quot;../assets/images/payment.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/footer/9.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner9"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner10"><code data-lang="html">&lt;footer class=&quot;footer-light&quot;&gt;
    &lt;div class=&quot;light-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;section class=&quot;small-section border-section border-top-0&quot;&gt;
                &lt;div class=&quot;row&quot;&gt;
                    &lt;div class=&quot;col-lg-6&quot;&gt;
                        &lt;div class=&quot;subscribe&quot;&gt;
                            &lt;div&gt;
                                &lt;h4&gt;KNOW IT ALL FIRST!&lt;/h4&gt;
                                &lt;p&gt;Never Miss Anything From Multikart By Signing Up To Our Newsletter.&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;col-lg-6&quot;&gt;
                        &lt;form
                            action=&quot;https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;amp;id=082f74cbda&quot;
                            class=&quot;form-inline subscribe-form auth-form needs-validation&quot; method=&quot;post&quot;
                            id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; target=&quot;_blank&quot;&gt;
                            &lt;div class=&quot;form-group mx-sm-3&quot;&gt;
                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; name=&quot;EMAIL&quot; id=&quot;mce-EMAIL&quot;
                                    placeholder=&quot;Enter your email&quot; required=&quot;required&quot;&gt;
                            &lt;/div&gt;
                            &lt;button type=&quot;submit&quot; class=&quot;btn btn-solid&quot; id=&quot;mc-submit&quot;&gt;subscribe&lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;section class=&quot;section-b-space light-layout&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row footer-theme partition-f&quot;&gt;
                &lt;div class=&quot;col-lg-4 col-md-6&quot;&gt;
                    &lt;div class=&quot;footer-title footer-mobile-title&quot;&gt;
                        &lt;h4&gt;about&lt;/h4&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;footer-content&quot;&gt;
                        &lt;div class=&quot;footer-logo&quot;&gt;&lt;img src=&quot;../assets/images/furniture-3/logo.png&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;p&gt;Discover the latest fashion trends, explore unique styles, and enjoy seamless
                            shopping with our carefully curated exclusive collections, designed to elevate your
                            wardrobe.&lt;/p&gt;
                        &lt;div class=&quot;footer-social&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-facebook-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-google-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-twitter-x-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-instagram-fill&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;ri-tiktok-fill aria-hidden=&quot; true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col offset-xl-1&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;my account&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;mens&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;womans&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;clothing&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;accessories&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;featured&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;why we choose&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;shipping &amp; return&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;secure shopping&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;gallery&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;affiliates&lt;/a&gt;&lt;/li&gt;
                                &lt;li&gt;&lt;a href=&quot;#&quot;&gt;contacts&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col&quot;&gt;
                    &lt;div class=&quot;sub-title&quot;&gt;
                        &lt;div class=&quot;footer-title&quot;&gt;
                            &lt;h4&gt;store information&lt;/h4&gt;
                        &lt;/div&gt;
                        &lt;div class=&quot;footer-content&quot;&gt;
                            &lt;ul class=&quot;contact-list&quot;&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-map-pin-2-fill&quot;&gt;&lt;/i&gt;Multikart Demo Store, Demo store India
                                    345-659&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-phone-fill&quot;&gt;&lt;/i&gt;Call Us: 123-456-7898&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-mail-fill&quot;&gt;&lt;/i&gt;Email Us: Support@Multikart.com&lt;/li&gt;
                                &lt;li&gt;&lt;i class=&quot;ri-printer-fill&quot;&gt;&lt;/i&gt;Fax: 123456&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
    &lt;div class=&quot;sub-footer&quot;&gt;
        &lt;div class=&quot;container&quot;&gt;
            &lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;footer-end&quot;&gt;
                        &lt;p&gt;&lt;i class=&quot;ri-copyright-line&quot;&gt;&lt;/i&gt; 2024-25 themeforest powered by
                            pixelstrap&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class=&quot;col-xl-6 col-md-6 col-sm-12&quot;&gt;
                    &lt;div class=&quot;payment-card-bottom&quot;&gt;
                        &lt;ul&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/visa.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/mastercard.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/paypal.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/american-express.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                            &lt;li&gt;
                                &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;../assets/images/icon/discover.png&quot; alt=&quot;&quot;&gt;&lt;/a&gt;
                            &lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/footer&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
    <!-- theme setting start -->
    