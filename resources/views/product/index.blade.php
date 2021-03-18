@extends('layouts.app')

@section('content')
   
    
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
       
      @include('layouts.nav')
        <div class="site-section bg-white site-section-cover overlay" id="contact-section" style="background-image: url('{{ asset('images/farm-banner-2.jpg') }}'); height:300px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; min-height:300px; margin-top:-100px">
            <div class="container">
                 <div class="row mb-5 mt-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-primary">OUR COMMODITY</span>
                            <h2 class="text-white">PRODUCT</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <section class="site-section bg-white" id="pricing-section">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-6 p-4 bg-primary-light left-corner">
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h4 class="mb-3 text-primary">Coconut Commodity</h2>
                                 <p></p>
                            </div>
                        </div>
                        <div class="row">
                           @foreach ($coconut as $cct)
                                <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                    <div class="bg-white">
                                        <div class="bg-success" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                            <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                        
                                        <figure>
                                            <img src="images/products/sm_{{ $cct['image'] }}" alt="Image" class="img-fluid rounded-circle">
                                        </figure>
                                        <h3 class="font-size-20 text-black">{{ $cct['name'] }}</h3>
                                        <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">{{ $cct['type'] }}</span>
                                        <div class="block-social-1">
                                            <p class="text-center">
                                                <a href="{{ url('/product-detail/'.$cct['code']) }}" class="btn btn-success  text-white">See product</a>
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                           @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 p-4 bg-light right-corner">
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h4 class="mb-3 text-primary">Spices Commodity</h2>
                                 <p></p>
                            </div>
                        </div>
                        <div class="row">
                              @foreach ($spices as $spice)
                                <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                    <div class="bg-white">
                                        <div class="bg-danger" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                            <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                        
                                        <figure>
                                            <img src="images/products/sm_{{ $spice['image'] }}" alt="Image" class="img-fluid rounded-circle">
                                        </figure>
                                        <h3 class="font-size-20 text-black">{{ $spice['name'] }}</h3>
                                        <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">{{ $spice['type'] }}</span>
                                        <div class="block-social-1">
                                            <p class="text-center">
                                                <a href="{{ url('/product-detail/'.$spice['code']) }}" class="btn btn-danger  text-white">See product</a>
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                           @endforeach
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        
       @include('layouts/footer')
    </div>

@endsection