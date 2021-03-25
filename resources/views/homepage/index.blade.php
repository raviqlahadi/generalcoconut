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
                            <span>{{ $content['block_heading_span'] }}</span>
                            <h2>{{ $content['block_heading_header'] }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                     <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/coconut-1.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2 class="text-primary">{{ $content['coconut_commodity'] }}</h2> 
                            <p>{{ $content['coconut_commodity_desc'] }}</p><br>
                            <p><a class="btn btn-outline-primary border-w-2 btn-md" href="{{ url('/product') }}">{{ $content['button_product'] }}</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/spices-1.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2 class="text-primary">{{ $content['spices_commodity'] }}</h2>                            
                            <p>{{ $content['spices_commodity_desc'] }}</p>
                            <p><a class="btn btn-outline-primary border-w-2 btn-md" href="{{ url('/product') }}">{{ $content['button_product'] }}</a></p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="site-section bg-primary" id="about-section">
            <div class="container">
               
                <div class="row justify-content-center mb-4 block-img-video-1-wrap">
                    <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="text-white mb-4">{{ $content['coconut_commodity'] }}</h2>
                            <p class="text-white">{{ $content['coconut_commodity_desc_second'] }}</p>
                            
                    </div>
                    <div class="col-md-4 mb-5">
                        <figure class="block-img-video-1" data-aos="fade">
                            <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                                <span class="icon"><span class="icon-play"></span></span>
                                <img src="{{ asset('images/slider-1.jpg') }}" alt="Image" class="img-fluid">
                            </a>
                        </figure>
                    </div>
                   <div class="col-lg-4  aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-white mb-4">{{ $content['spices_commodity'] }}</h2>
                        <p class="text-white">{{ $content['spices_commodity_desc_second'] }}</p>
                                
                    </div>
   
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <p><a class="btn btn-outline-white border-w-2 btn-md" href="{{ url('/about') }}">{{ $content['button_about'] }}</a></p>
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
                                    <h3 class="text-primary">{{ $content['heading_more'] }}</h3>
                                    <p>
                                        {{ $content['desc_more'] }}
                                        </p>    
                                         <p class="">
                                            <a href="{{ url('/about') }}" class="btn btn-primary btn-md text-white">{{ $content['button_about'] }}</a>
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