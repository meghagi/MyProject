    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Forgot password</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Forgot password</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="pwd-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <h2>Forget Your Password</h2>
                    <form class="theme-form">
                        <div class="form-row row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email" placeholder="Enter Your Email"
                                    required="">
                            </div><a href="#!" class="btn btn-solid w-auto">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


    <!-- Footer Section Start -->
   @endsection