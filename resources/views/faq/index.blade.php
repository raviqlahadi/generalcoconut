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
                            <span class="text-primary">Frequently Ask Questions</span>
                            <h2 class="text-white">FAQ</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="site-section bg-light" id="pricing-section">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <h2></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur
                                vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
                        </div>
                    </div>
                </div>
            
               
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Can I accept both Paypal and Stripe?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis
                                perferendis.</p>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">What available is refund period?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis
                                perferendis.</p>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Can I accept both Paypal and Stripe?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis
                                perferendis.</p>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">What available is refund period?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis
                                perferendis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Where are you from?</h3>
                            <p>Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis
                                officia et. Distinctio assumenda minima maiores.</p>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">What is your opening time?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis
                                perferendis.</p>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">Can I accept both Paypal and Stripe?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis
                                perferendis.</p>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="text-black h4 mb-4">What available is refund period?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam assumenda eum blanditiis
                                perferendis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       @include('layouts/footer')
    </div>

@endsection