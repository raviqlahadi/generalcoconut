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
      <div class="site-section-cover overlay inner-page bg-light" style="background-image: url('images/hero_3.jpg')"
            data-aos="fade">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-10">
                        <div class="box-shadow-content">
                            <div class="block-heading-1">
                                <span class="d-block mb-3 text-white" data-aos="fade-up">Product <span
                                        class="mx-2 text-primary">&bullet;</span> Coconut Commodity</span>
                                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">Coconut Semi Husked</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="site-section">
            <div class="block__73694 mb-2" id="services-section">
                <div class="container">
                    <div class="row d-flex no-gutters align-items-stretch">
                        <div class="col-12 col-lg-6 block__73422 aos-init aos-animate" style="background-image: url('images/semi-husked-coconut-hd.jpg');" data-aos="fade-right" data-aos-delay="">
                        </div>
                        <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="">
                            <h2 class="mb-3 text-black">COCONUT SEMI HUSKED</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo
                                minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur
                                distinctio, maiores facere officiis. Cum, esse, iusto?</p>
                            <p>Minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur
                                distinctio, maiores facere officiis. Cum, esse, iusto?</p>
                            <ul class="ul-check primary list-unstyled mt-5">
                                <li>Lorem ipsum dolor.</li>
                                <li>Quod, amet. Provident.</li>
                                <li>Quo, adipisci, quis.</li>
                                <li>Cumque perspiciatis, blanditiis?</li>
                            </ul>
                            <p class="">
                                <a href="" class="btn btn-primary btn-md text-white">Buy Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
        
       @include('layouts/footer')
    </div>

@endsection
