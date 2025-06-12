
@extends('frontend.layout.main')
    @section('main-container')  
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Create account</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <li ><a href="https://vidhyasagarfoundation.intouchsoftwaresolution.com/">vidhyasagarfoundation.intouchsoftwaresolution.com</a></li>

                    </li>
                    <li class="breadcrumb-item active">
                    <a href="{{ route('register') }}"></a>
                    Create account</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="login-page section-b-space">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <div class="theme-card">
                        <form class="theme-form" method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-box">
                                <label for="email" class=" col-md-4 col-form-label "  style="color:grey;">Email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Enter your Email"name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                           
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-box">
                                <label for="review" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password"name="password" required autocomplete="current-password"
                                    placeholder="Enter your password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <!-- <a href="index-2.html" class="btn btn-solid">Login</a> -->
                            <!-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-solid">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                        <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p>
                        <a href="{{ route('register') }}" class="btn btn-solid">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
@endsection
