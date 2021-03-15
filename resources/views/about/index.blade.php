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
         <div class="site-section bg-white site-section-cover" id="contact-section" style="background-image: url('{{ asset('images/farm-banner.jpg') }}'); height:300px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; min-height:300px">
            <div class="container">
                 <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-primary">About</span>
                            <h2 class="text-white">Our Company</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
           
            <div class="block__73694">
                <div class="">
                    <div class="row d-flex no-gutters align-items-stretch">
                        <div class="col-12 col-lg-6 block__73422 order-lg-2 aos-init" style="background-image: url('images/farmer.jpg');" data-aos="fade-left" data-aos-delay="">
                        </div>
                        <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1 aos-init" data-aos="fade-right" data-aos-delay="">
                           <div class="ml-5">
                                <h2 class="mb-3 text-black">Our Story</h2>
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
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <h2 class="mb-3 text-black">What We Do</h2>
                    </div>
                </div>
                 <div class="row ">
                     <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/pertanian-landskape-1.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h4 class="text-primary">What we do title 1</h4> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.</p>
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/pertanian-landskape-2.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h4 class="text-primary">What we do title 2</h4>                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.</p>
                            
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/pertanian-landskape-3.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h4 class="text-primary">What we do title 3</h4>                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.</p>
                            
                        </div>
                    </div>
                     <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="">
                        <div class="text-center">
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/pertanian-landskape-4.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h4 class="text-primary">What we do title 4</h4>                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas obcaecati quo consequuntur mollitia facilis.</p>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
       
     
       @include('layouts/footer')
    </div>

@endsection