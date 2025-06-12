
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  


    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Element Breadcrumb</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active">Element Breadcrumb</li>
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
                            <a class="nav-link active" href="element-breadcrumb.html">breadcrumb</a>
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
                            <a class="nav-link" href="element-footer.html">footer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 content component-col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold mb-0">Theme Breadcrumb</h5>
                    </div>
                    <div class="card-body">
                        <div class="content-preview">
                            <div class="breadcrumb-section">
                                <div class="container">
                                    <h2>element </h2>
                                    <nav class="theme-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                            <li class="breadcrumb-item">element breadcrumb</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#breadcrumb"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="breadcrumb"><code data-lang="html">&lt;div class=&quot;breadcrumb-section&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;h2&gt;Element Breadcrumb&lt;/h2&gt;
        &lt;nav class=&quot;theme-breadcrumb&quot;&gt;
            &lt;ol class=&quot;breadcrumb&quot;&gt;
                &lt;li class=&quot;breadcrumb-item&quot;&gt;&lt;a href=&quot;index.html&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
                &lt;li class=&quot;breadcrumb-item active&quot;&gt;Element Breadcrumb&lt;/li&gt;
            &lt;/ol&gt;
        &lt;/nav&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold mb-0">Bootstrap Breadcrumb</h5>
                    </div>
                    <div class="card-body">
                        <div class="content-preview">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </nav>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                    <li class="breadcrumb-item active">Library</li>
                                </ol>
                            </nav>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Library</a></li>
                                    <li class="breadcrumb-item active">Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active">HTML</a>
                        </li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#bs-breadcrumb"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="bs-breadcrumb"><code data-lang="html"><pre><code data-lang="html">&lt;nav aria-label="breadcrumb"&gt;
&lt;ol class="breadcrumb"&gt;
&lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
&lt;ol class="breadcrumb"&gt;
&lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
&lt;ol class="breadcrumb"&gt;
&lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Library&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;</code></pre></code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold mb-0">Custom Dividers</h5>
                    </div>
                    <div class="card-body">
                        <div class="content-preview">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                    <li class="breadcrumb-item active">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#bs-custom"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="bs-custom"><code data-lang="html">&lt;nav style="--bs-breadcrumb-divider: '&gt;';" aria-label="breadcrumb"&gt;
&lt;ol class="breadcrumb"&gt;
&lt;li class="breadcrumb-item"&gt;&lt;a href="#!"&gt;Home&lt;/a&gt;&lt;/li&gt;
&lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
&lt;/ol&gt;
&lt;/nav&gt;</code></pre></code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- theme setting start -->
    @endsection