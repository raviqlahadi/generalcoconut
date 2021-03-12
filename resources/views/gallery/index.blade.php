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
         
         <div class="site-section bg-white site-section-cover overlay" id="contact-section" style="background-image: url('{{ asset('images/coconut-farm.jpg') }}'); height:300px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; min-height:300px">
            <div class="container">
                 <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-primary">Our Latest Activity</span>
                            <h2 class="text-white">Gallery</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section" id="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>  
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>                          
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_3.jpg" alt="Image" class="img-fluid rounded"></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>   
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>  
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>                          
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_3.jpg" alt="Image" class="img-fluid rounded"></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>   
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>  
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>                          
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_3.jpg" alt="Image" class="img-fluid rounded"></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>   
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>  
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>                          
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_3.jpg" alt="Image" class="img-fluid rounded"></a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>   
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="" class="mb-4 d-block"><img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded"></a>  
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @include('layouts/footer')
    </div>

@endsection