
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
    <!-- <section class="login-page section-b-space">
        <div class="container">
            <h3>create account</h3>

            <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                
                <div class="theme-card">
                <form class="theme-form" method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="name" class="form-label col-md-4 col-form-label text-md-end">First Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="fname" placeholder="First Name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                           
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="email" class="form-label col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"name="email"  placeholder="Email"type="email"value="{{ old('name') }}"
                                required  autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                            <label for="password" class="form-label col-md-4  col-form-label text-md-end">{{ __('Password') }}</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="confirmpassword" class="form-label col-md-4  col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="ConfirmPassword" required autocomplete="new-password">
     
                            </div>
                        </div>
                        <div class="col-12">
                        <button type="submit" class="btn btn-primarybtn btn-solid w-auto">
                                    {{ __('Register') }}
                                </button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </section> -->
    <!-- Section ends -->
    <section class="login-page section-b-space">
        <div class="container">
            <h3>create account</h3>
            <div class="theme-card">
            <form class="theme-form" method="POST" action="{{ route('register') }}">
            @csrf
                <form class="theme-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box" >
                            @csrf
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="fname" placeholder="First Name" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="Email" class="form-label">Email</label>
                                <input type="Email" class="form-control @error('email') is-invalid @enderror" id="email"name="email"  placeholder="Email"type="email"value="{{ old('name') }}"
                                required  autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                          

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="email" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                                @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

                            
                            
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-box">
                                <label for="review" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="ConfirmPassword" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="col-12">
                        <!-- <button type="submit" class="btn btn-solid w-auto">
                                    {{ __('Register') }}
                                </button>
                        </div> -->

                        
                        <button type="submit" class="btn btn-primarybtn btn-solid w-auto">
                                    {{ __('Register') }}
                                </button>
                    
                    </div>
                </form>
            </div>
        </div>
    </section>
 
@endsection
    <!-- Footer Section Start -->
   