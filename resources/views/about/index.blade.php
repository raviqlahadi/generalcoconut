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
        <div class="site-section">
            <div class="block__73694 mb-2" id="services-section">
                <div class="container">
                  <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2>About Our Company</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur
                                vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
                        </div>
                    </div>
                </div>
                    <div class="row d-flex no-gutters align-items-stretch">
                        <div class="col-12 col-lg-6 block__73422 aos-init aos-animate" style="background-image: url('images/img_1.jpg');" data-aos="fade-right" data-aos-delay="">
                        </div>
                        <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="">
                            <h2 class="mb-3 text-black">General Coconut</h2>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__73694">
                <div class="container">
                    <div class="row d-flex no-gutters align-items-stretch">
                        <div class="col-12 col-lg-6 block__73422 order-lg-2 aos-init" style="background-image: url('images/img_2.jpg');" data-aos="fade-left" data-aos-delay="">
                        </div>
                        <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1 aos-init" data-aos="fade-right" data-aos-delay="">
                            <h2 class="mb-3 text-black">Coconut and Spice</h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       @include('layouts/footer')
    </div>

@endsection