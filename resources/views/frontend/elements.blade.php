@extends('frontend.layout.main')
@section('main-container')  
    <!-- header end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Element Button</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active">Element Button</li>
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
                            <a class="nav-link active" href="elements.html">Buttons</a>
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
                            <a class="nav-link" href="element-footer.html">footer</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 content component-col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold mb-0">Theme Buttons</h5>
                    </div>
                    <div class="card-body">
                        <div class="content-preview btn-group-element">
                            <a href="#!" class="btn btn-solid me-3">solid</a>
                            <a href="#!" class="btn btn-outline me-3">outline</a>
                            <a href="#!" class="btn btn-solid black-btn me-3">black</a>
                            <a href="#!" class="btn btn-solid btn-sm me-3">small</a>
                            <a href="#!" class="btn btn-solid btn-sm btn-xs me-3">x-small</a>
                            <a href="#!" class="btn btn-solid hover-solid btn-animation me-3">animated</a>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#button-theme"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="button-theme"><code data-lang="html"><div><div>&lt;a href="#!" class="btn btn-solid me-3"&gt;solid&lt;/a&gt;</div>
<div>&lt;a href="#!" class="btn btn-outline me-3"&gt;outline&lt;/a&gt;</div>
<div>&lt;a href="#!" class="btn btn-solid black-btn me-3"&gt;black&lt;/a&gt;</div>
<div>&lt;a href="#!" class="btn btn-solid btn-sm me-3"&gt;small&lt;/a&gt;</div>
<div>&lt;a href="#!" class="btn btn-solid btn-sm btn-xs me-3"&gt;x-small&lt;/a&gt;</div>
<div>&lt;a href="#!" class="btn btn-solid hover-solid btn-animation me-3"&gt;animated&lt;/a&gt;</div>
</div></code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold mb-0">Bootstrap Button</h5>
                    </div>
                    <div class="card-body">
                        <div class="content-preview btn-group-element">
                            <button type="button" class="me-2 btn btn-primary">Primary</button>
                            <button type="button" class="me-2 btn btn-secondary">Secondary</button>
                            <button type="button" class="me-2 btn btn-success">Success</button>
                            <button type="button" class="me-2 btn btn-danger">Danger</button>
                            <button type="button" class="me-2 btn btn-warning">Warning</button>
                            <button type="button" class="me-2 btn btn-info">Info</button>
                            <button type="button" class="me-2 btn btn-light">Light</button>
                            <button type="button" class="me-2 btn btn-dark">Dark</button>
                            <button type="button" class="me-2 btn btn-link">Link</button>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#button-copy"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="button-copy"><code data-lang="html">&lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
&lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
&lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
&lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
&lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
&lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
&lt;button type="button" class="btn btn-light"&gt;Light&lt;/button&gt;
&lt;button type="button" class="btn btn-dark"&gt;Dark&lt;/button&gt;
&lt;button type="button" class="btn btn-link"&gt;Link&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold mb-0">Button Outline</h5>
                    </div>
                    <div class="card-body">
                        <div class="content-preview btn-group-element">
                            <button type="button" class="btn me-2 btn-outline-primary">Primary</button>
                            <button type="button" class="btn me-2 btn-outline-secondary">Secondary</button>
                            <button type="button" class="btn me-2 btn-outline-success">Success</button>
                            <button type="button" class="btn me-2 btn-outline-danger">Danger</button>
                            <button type="button" class="btn me-2 btn-outline-warning">Warning</button>
                            <button type="button" class="btn me-2 btn-outline-info">Info</button>
                            <button type="button" class="btn me-2 btn-outline-dark">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#button-outline"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html" id="button-outline"><code data-lang="html"><div><div>&lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;</div>
<div>&lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;</div>
<div>&lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;</div>
<div>&lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;</div>
<div>&lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;</div>
<div>&lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;</div>
<div>&lt;button type="button" class="btn btn-outline-dark"&gt;Dark&lt;/button&gt;</div>
</div></code></pre>
                        </div>
                    </div>
                </div>
                <hr class="style-element">
                <div class="card">
                    <div class="card-header">
                        <h5 class="font-weight-bold mb-0">Disabled buttons using the &lt;a&gt;</h5>
                    </div>
                    <div class="card-body">
                        <div class="content-preview btn-group-element">
                            <a href="#!" class="btn btn-primary btn-lg disabled me-3" tabindex="-1" role="button"
                                aria-disabled="true">Primary link</a>
                            <a href="#!" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button"
                                aria-disabled="true">Link</a>
                        </div>
                    </div>
                </div>
                <div class="code-section">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active">HTML</a></li>
                    </ul>
                    <div class="fluid-container">
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#button-disable"
                                title="Copy"><i class="fa fa-files-o"></i>copy</button>
                            <pre class="language-html"
                                id="button-disable"><code data-lang="html">&lt;a href="#!" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"&gt;Primary link&lt;/a&gt;
&lt;a href="#!" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true"&gt;Link&lt;/a&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

@endsection