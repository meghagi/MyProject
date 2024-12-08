
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Profile</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- personal deatail section start -->
    <section class="contact-page register-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>PERSONAL DETAIL</h3>
                    <form class="theme-form" action="{{ url('/profilestore') }}" method="POST">
                        @csrf <!-- CSRF Token -->
                        <div class="row g-sm-4 g-3">
                            <!-- First Name -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" id="name" name="Firstname" placeholder="Enter Your Name">
                                    <span class="text-danger">
                                        @error('Firstname') {{ $message }} @enderror
                                    </span>
                                </div>
                            </div>
    
                            <!-- Last Name -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" name="Lastname" placeholder="Enter Your Last Name">
                                    <span class="text-danger">
                                        @error('Lastname') {{ $message }} @enderror
                                    </span>
                                </div>
                            </div>
    
                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="phone-number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone-number" name="Phonenumber" placeholder="Enter Your Number">
                                    <span class="text-danger">
                                        @error('Phonenumber') {{ $message }} @enderror
                                    </span>
                                </div>
                            </div>
    
                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="Email" placeholder="Enter Your Email">
                                    <span class="text-danger">
                                        @error('Email') {{ $message }} @enderror
                                    </span>
                                </div>
                            </div>
    
                            <!-- Message -->
                            <div class="col-md-12">
                                <div class="form-box">
                                    <label for="message">Write Your Message</label>
                                    <textarea class="form-control mb-0" name="message" id="message" placeholder="Write Your Message" rows="6"></textarea>
                                    <span class="text-danger">
                                        @error('message') {{ $message }} @enderror
                                    </span>
                                </div>
                            </div>
    
                            <!-- Submit Button -->
                            {{-- <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> --}}
                        </div>
                   
                </div>
            </div>
        </div>

    
    <!-- Section ends -->



        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>SHIPPING ADDRESS</h3>
                    {{-- <form class="theme-form" action="{{url('/profilestore')}}"name="myForm" method="post" >
                        @csrf  --}}
                        <div class="row g-sm-4 g-3">
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="name">flat / plot</label>
                                    <input type="text" class="form-control" id="home-ploat" placeholder="company name"
                                     name="flat">
                                        <span class="text-danger">
                                            @error('flat')
                                                {{$message}}
    
                                            @enderror
    
                                     </span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="name">Address *</label>
                                    <input type="text" class="form-control" id="address-two" placeholder="Address"
                                     name="Adderess">
                                        <span class="text-danger">
                                            @error('Adderess')
                                                {{$message}}
    
                                            @enderror
    
                                     </span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="email">Zip Code *</label>
                                    <input type="text" class="form-control" id="zip-code" placeholder="zip-code" name="zipcode"
                                        >
                                        <span class="text-danger">
                                            @error('zipcode')
                                                {{$message}}
    
                                            @enderror
    
                                     </span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="review">Country *</label>
                                    <select class="form-control" size="1" name="country">
                                        <option value="India">India</option>
                                        <option value="UAE">UAE</option>
                                        <option value="U.K">U.K</option>
                                        <option value="US">US</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('country')
                                            {{$message}}

                                        @enderror

                                 </span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="review">City *</label>
                                    <input type="text" class="form-control" id="city" placeholder="City" name="city">
                                    <span class="text-danger">
                                        @error('city')
                                            {{$message}}

                                        @enderror

                                 </span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-box">
                                    <label for="review">Region/State *</label>
                                    <input type="text" class="form-control" id="region-state"name="region" placeholder="Region/state"
                                        >
                                        <span class="text-danger">
                                            @error('region')
                                                {{$message}}
    
                                            @enderror
    
                                     </span> 
                                        
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->
@endsection

    <!-- Footer Section Start -->
 