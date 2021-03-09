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
         
        <div class="site-section bg-white" id="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                        <div class="block-heading-1">
                            <span>Get In Touch</span>
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
             
                <div class="row">
                    <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
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
                                    <textarea name="" id="" class="form-control" placeholder="Write your message."
                                        cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 ml-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 ml-auto" data-aos="fade-up" data-aos-delay="200">
                      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kendari&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
                        
                    </div>
                </div>
            </div>
        </div>
       @include('layouts/footer')
    </div>

@endsection