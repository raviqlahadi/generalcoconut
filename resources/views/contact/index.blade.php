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
                            <span class="text-primary">Get In Touch</span>
                            <h2 class="text-white">FAQ & Contact</h2>                           
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
                            <h2>FAQ</h2>
                            <p>Frequently Asked Questions</p>
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
                       
                    </div>
                </div>
            </div>
        </section>
        <div class="site-section bg-white mb-5" id="contact-section">
            <div class="container">
                <div class="row " data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12">
                        <h4 class="text-primary">Address</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                    </div>    
                </div>          
                <div class="row">
                    <div class="col-lg-12 ml-auto" data-aos="fade-up" data-aos-delay="200">
                      <div class="mapouter"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kendari&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                    </div>
                </div>
               
            </div>
        </div>
           
      <div class="site-section mt-5 pb-5 bg-white site-section-cover overlay" id="contact-section" style="background-image: url('{{ asset('images/farm.jpg') }}'); height:120vh; background-position: center;
                background-repeat: no-repeat;
                background-size: cover;">
            <div class="container">
                 <div class="row">
                    <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="text-white">Need to know more on details?<span class="text-primary"> Contact Us</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum
                            quibusdam nisi, illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae
                            voluptatibus fugit impedit.</p>
                        <ul class="text-white primary list-unstyled mt-5">
                            <li><i class="fa fa-instagram text-primary"></i>&nbsp; Instagram</li>
                            <li><i class="fa fa-phone text-primary"></i>&nbsp; Phone</li>
                            <li><i class="fa fa-envelope text-primary"></i>&nbsp; Email</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 mb-5 aos-init aos-animate bg-white p-4 rounded" data-aos="fade-in" data-aos-delay="200">
                        <form action="#" method="post">
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ml-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
       @include('layouts/footer')
    </div>

@endsection