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
         <div class="site-section bg-white site-section-cover overlay" id="contact-section" style="background-image: url('{{ asset('images/farm-banner-3.jpg') }}'); height:300px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; min-height:300px; margin-top:-100px">
            <div class="container">
                 <div class="row mb-5 mt-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-primary">{{ $gallery['our_latest'] }}</span>
                            <h2 class="text-white">{{ $gallery['gallery'] }}</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="site-section" id="blog-section">
            <div class="container">
                <div class="row">
                    @foreach ($images as $image)
                         <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                            <div>
                                <a href="" class="mb-4 d-block"><img src="{{ asset($image['url']) }}" alt="Image" class="img-fluid rounded"></a>  
                                <p>{{ $image['desc'] }}</p>                          
                            </div>
                        </div>
                    @endforeach
                   
                    
                </div>
            </div>
        </div>
       @include('layouts/footer')
    </div>

@endsection