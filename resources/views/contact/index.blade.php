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
       <div class="site-section bg-white site-section-cover overlay" id="contact-section" style="background-image: url('{{ asset('images/farm-banner-1.jpg') }}'); height:300px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; min-height:300px; margin-top:-100px">
            <div class="container">
                 <div class="row mb-5 mt-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-primary">{{ $contact['get_in_touch'] }}</span>
                            <h2 class="text-white">{{ $contact['faq_contact'] }}</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="site-section bg-light" id="pricing-section">
            <div class="container">
                <div class="row">
                    @foreach ($contact['faq'] as $faq)
                         <div class="col-lg-6">
                            <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="text-black h4 mb-4">{{ $faq['question'] }}</h3>
                                <p>{{ $faq['answer'] }}</p>
                            </div>
                        </div>
                           
                    @endforeach
                 </div>
            </div>
        </section>
        <div class="site-section bg-white mb-5" id="contact-section">
            <div class="container">
                <div class="row " data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12">
                        <h4 class="text-primary">{{ $contact['address'] }}</h4>
                        <p>{{ $contact['address_text'] }}</p>
                    </div>    
                </div>          
                <div class="row">
                    <div class="col-lg-12 ml-auto" data-aos="fade-up" data-aos-delay="200">
                      <div class="mapouter"><div style="width: 100%; height:500px" id="gmap_canvas" ></div></div>
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
                        <h2 class="text-white">{{ $contact['form_title'] }}</h2>
                        <p>{{ $contact['form_desc'] }}</p>
                        
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
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="{{ $contact['send'] }}">
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