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

        @include('layouts.slider')

         <div class="site-section" id="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span>Our Top</span>
                            <h2>Commodity</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                     <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/coconut-1.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2 class="text-primary">Coconut Commodity</h2> 
                            <p>We are an Indonesian company engaged in plantation and we also supply raw materials from coconut which will be in production some processed products.</p><br>
                            <p><a class="btn btn-outline-primary border-w-2 btn-md" href="{{ url('/product') }}">See Our Product</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/spices-1.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2 class="text-primary">Spices Commodity</h2>                            
                            <p>CV. Best Farmer Indonesia is known as the profesional capable Supplier & Exporter for the indonesian spices, agriculture commodity such White Pepper, Black Pepper, Cloves, Raw Cashew Nuts, Nutmeg,  and many more...</p>
                            <p><a class="btn btn-outline-primary border-w-2 btn-md" href="{{ url('/product') }}">See Our Product</a></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="site-section bg-primary" id="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-5">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-white">Meet Our</span>
                            <h2 class="text-white">Company</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4 block-img-video-1-wrap">
                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="text-white mb-4">COCONUT COMODITY</h2>
                            <p class="text-white">Establish since early 2018, which locate in Kendari, Southeast Sulawesi - Indonesia, We are an Indonesian company engaged in plantation and we also supply raw materials from coconut which will be in production some processed products.
                                Our company is very skilled in the industry, we have the best experiences that make our customers satisfied with every existing cooperation.</p>
                            
                    </div>
                    <div class="col-md-4 mb-5">
                        <figure class="block-img-video-1" data-aos="fade">
                            <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                                <span class="icon"><span class="icon-play"></span></span>
                                <img src="{{ asset('images/hero_1.jpg') }}" alt="Image" class="img-fluid">
                            </a>
                        </figure>
                    </div>
                   <div class="col-lg-4  aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-white mb-4">SPICES COMODITY</h2>
                        <p class="text-white">in the beginning, this company CV. BEST FARMER INDONESIA focus on derivative coconut product, and after we expanded and we growth so well & fast to be one of a "Leading of coconut and spices supplier in INDONESIA and internationally.</p>
                                
                    </div>
   
                </div>
                
            </div>
        </div>
     
  
     
        <div class="site-section bg-white" id="contact-section" style="background-image: url('{{ asset('images/coconut-farm.jpg') }}'); height:100vh; background-position: center;
                background-repeat: no-repeat;
                background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5" data-aos="fade-up" data-aos-delay="">
                        <div class="row mb-5">
                            <div class="col-md-6 mb-4 mb-lg-0 col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                                <div class="pricing">
                                    <h3 class="text-primary">Improve Indonesian Economy</h3>
                                    <p>
                                        High Quality, Commitment, satisfaction, professional services & handling is  our strong value to make all the people who involved in this company (employee, farmer, supplier & buyer) to be satisfy supply chain and can make our relationship as a partner in a long term.
                                        </p>    
                                         <p class="">
                                            <a href="{{ url('/about') }}" class="btn btn-primary btn-md text-white">More About Us</a>
                                        </p>                               
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="row">
                    
                </div>
            </div>
        </div>
        
       
       @include('layouts/footer')
    </div>

@endsection