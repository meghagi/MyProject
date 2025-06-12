
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Element Category</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Element Category</li>
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
                            <a class="nav-link active" href="element-category.html">category</a>
                        </li>
                        <li class="nav-item direct">
                            <a class="nav-link" href="element-footer.html">footer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 content component-col">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/category/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner1"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner1"><code data-lang="html">&lt;section class=&quot;section-b-space&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;title2 text-start&quot;&gt;
            &lt;h2 class=&quot;title-inner2 p-0&quot;&gt;Shop By Category&lt;/h2&gt;
        &lt;/div&gt;
        &lt;div class=&quot;row margin-default ratio_square&quot;&gt;
            &lt;div class=&quot;col-xl-2 col-sm-3 col-4&quot;&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/fashion-5/category/1.png&quot; class=&quot;img-fluid bg-img&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt; Bikiniwear &lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-xl-2 col-sm-3 col-4&quot;&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/fashion-5/category/2.png&quot; class=&quot;img-fluid bg-img&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt; Loungewear &lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-xl-2 col-sm-3 col-4&quot;&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/fashion-5/category/3.png&quot; class=&quot;img-fluid bg-img&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt; Panties &lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-xl-2 col-sm-3 col-4&quot;&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/fashion-5/category/4.png&quot; class=&quot;img-fluid bg-img&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt; Shapewear &lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-xl-2 col-sm-3 col-4&quot;&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/fashion-5/category/5.png&quot; class=&quot;img-fluid bg-img&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt; Sleepwear &lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col-xl-2 col-sm-3 col-4&quot;&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/fashion-5/category/6.png&quot; class=&quot;img-fluid bg-img&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt; Swimwear &lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/section&gt;
                            </code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/category/2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner2"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner2"><code data-lang="html">&lt;div class=&quot;container&quot;&gt;
    &lt;section class=&quot;category-style-1&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;div class=&quot;category-5 no-arrow&quot;&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;
                                &lt;img src=&quot;../assets/images/furniture-2/category/1.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;Chairs&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img class=&quot;furniture-icon&quot;
                                    src=&quot;../assets/images/furniture-2/category/2.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;Cupboards&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img class=&quot;furniture-icon&quot;
                                    src=&quot;../assets/images/furniture-2/category/3.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;Lamps&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img class=&quot;furniture-icon&quot;
                                    src=&quot;../assets/images/furniture-2/category/4.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;Sofas&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img class=&quot;furniture-icon&quot;
                                    src=&quot;../assets/images/furniture-2/category/5.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;Tables&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img class=&quot;furniture-icon&quot;
                                    src=&quot;../assets/images/furniture-2/category/6.png&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;Chairs&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/category/3.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner3"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner3"><code data-lang="html">&lt;div class=&quot;container category-button&quot;&gt;
    &lt;section class=&quot;section-b-space border-section border-bottom-0&quot;&gt;
        &lt;div class=&quot;row partition1&quot;&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline btn-block&quot;&gt;airbag&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline btn-block&quot;&gt;burn bag&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline btn-block&quot;&gt;briefcase&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline btn-block&quot;&gt;carpet bag&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline btn-block&quot;&gt;money bag&lt;/a&gt;
            &lt;/div&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline btn-block&quot;&gt;tucker bag&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/category/4.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner5"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner5"><code data-lang="html">&lt;section class=&quot;section-b-space ratio_portrait&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;div class=&quot;slide-4 category-m no-arrow&quot;&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;category-wrapper&quot;&gt;
                            &lt;div&gt;
                                &lt;div&gt;
                                    &lt;img src=&quot;../assets/images/watch/categories/1.png&quot;
                                        class=&quot;img-fluid blur-up lazyload bg-img&quot; alt=&quot;&quot;&gt;
                                &lt;/div&gt;
                                &lt;h4&gt;watch models&lt;/h4&gt;
                                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline&quot;&gt;view more&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div&gt;
                        &lt;div class=&quot;category-wrapper&quot;&gt;
                            &lt;div&gt;
                                &lt;div&gt;
                                    &lt;img src=&quot;../assets/images/watch/categories/2.png&quot;
                                        class=&quot;img-fluid blur-up lazyload bg-img&quot; alt=&quot;&quot;&gt;
                                &lt;/div&gt;
                                &lt;h4&gt;calculator watch&lt;/h4&gt;
                                &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline&quot;&gt;view more&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-wrapper&quot;&gt;
                        &lt;div&gt;
                            &lt;div&gt;
                                &lt;img src=&quot;../assets/images/watch/categories/3.png&quot;
                                    class=&quot;img-fluid blur-up lazyload bg-img&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                            &lt;h4&gt;Antimagnetic watch&lt;/h4&gt;
                            &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline&quot;&gt;view more&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-wrapper&quot;&gt;
                        &lt;div&gt;
                            &lt;div&gt;
                                &lt;img src=&quot;../assets/images/watch/categories/4.png&quot;
                                    class=&quot;img-fluid blur-up lazyload bg-img&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                            &lt;h4&gt;Smart watchs &lt;/h4&gt;
                            &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline&quot;&gt;view more&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-wrapper&quot;&gt;
                        &lt;div&gt;
                            &lt;div&gt;
                                &lt;img src=&quot;../assets/images/watch/categories/5.png&quot;
                                    class=&quot;img-fluid blur-up lazyload bg-img&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                            &lt;h4&gt; Luxury Watches &lt;/h4&gt;
                            &lt;a href=&quot;category-page.html&quot; class=&quot;btn btn-outline&quot;&gt;view more&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/section&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/category/5.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner6"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner6"><code data-lang="html">&lt;div class=&quot;container&quot;&gt;
    &lt;section class=&quot;section-b-space border-section border-top-0 category-width&quot;&gt;
        &lt;div class=&quot;row&quot;&gt;
            &lt;div class=&quot;col&quot;&gt;
                &lt;div class=&quot;slide-6 no-arrow&quot;&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/mask.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;covid&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/sugar-blood-level.svg&quot;
                                    alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;diabetic&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/eye-drops.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;eye care&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/diet.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;diet&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/holding-hands.svg&quot; alt=&quot;&quot;&gt;
                            &lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;mom &amp; kids&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/cream.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;skin care&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/mask.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;pain relief&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;category-block&quot;&gt;
                        &lt;a href=&quot;category-page.html&quot;&gt;
                            &lt;div class=&quot;category-image&quot;&gt;&lt;img src=&quot;../assets/svg/medical/drugs.svg&quot; alt=&quot;&quot;&gt;&lt;/div&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;category-details&quot;&gt;
                            &lt;a href=&quot;category-page.html&quot;&gt;
                                &lt;h5&gt;immunity&lt;/h5&gt;
                            &lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card border-0 shadow-none">
                    <div class="card-body p-0">
                        <div class="content-preview banner-design">
                            <img src="../assets/images/element/category/6.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#banner7"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="banner7"><code data-lang="html">&lt;section class=&quot;vector-category&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;vector-slide-8 category-slide margin-default ratio_square&quot;&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/book.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;combos&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/science-fiction.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;fiction&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/heart.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;romance&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/baking.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;cooking&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/pray.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;religion&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/life.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;health&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/science.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;science&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/childrens-book.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;kids&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/money.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;business&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/music.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;music&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/history.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;biography&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
            &lt;div&gt;
                &lt;a href=&quot;category-page.html&quot;&gt;
                    &lt;div class=&quot;img-category&quot;&gt;
                        &lt;div class=&quot;img-sec&quot;&gt;
                            &lt;img src=&quot;../assets/images/books/svg/journal.svg&quot; class=&quot;img-fluid&quot; alt=&quot;&quot;&gt;
                        &lt;/div&gt;
                        &lt;h4&gt;textbooks&lt;/h4&gt;
                    &lt;/div&gt;
                &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/section&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
    <!-- theme setting start -->