
    <!-- header end -->

    @extends('frontend.layout.main')
    @section('main-container')  
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Create account</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Create account</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <h3>create account</h3>
            <div class="theme-card">
                <form class="theme-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="email" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="First Name" required="">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="review" class="form-label">Last Name</label>
                                <input type="password" class="form-control" id="lname" placeholder="Last Name"
                                    required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="email" class="form-label">email</label>
                                <input type="text" class="form-control" id="email" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="review" class="form-label">Password</label>
                                <input type="password" class="form-control" id="review"
                                    placeholder="Enter your password" required="">
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="index-2.html" class="btn btn-solid w-auto">create Account</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Section ends-->

@endsection
    <!-- Footer Section Start -->
   