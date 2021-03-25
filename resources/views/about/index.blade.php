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
        <div class="site-section bg-white site-section-cover overlay" id="contact-section" style="background-image: url('{{ asset('images/farm-banner.jpg') }}'); height:300px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; min-height:300px; margin-top:-100px">
            <div class="container">
                 <div class="row mb-5 mt-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-primary">{{ $about['about'] }}</span>
                            <h2 class="text-white">{{ $about['our_company'] }}</h2>                           
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
                                <h2 class="mb-3 text-black">{{ $about['our_story'] }}</h2>
                                @foreach ($about['story_desc'] as $story)
                                    <p>{{ $story }}</p>
                                @endforeach
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
                        <h2 class="mb-3 text-black">{{ $about['what_we_do'] }}</h2>
                    </div>
                </div>
                 <div class="row ">
                    @foreach ($about['we_do'] as $we_do)
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="text-center">
                                <a href="#" class="mb-4 d-block"><img src="{{ asset($we_do['url']) }}" alt="Image"
                                        class="img-fluid rounded"></a>
                                <h4 class="text-primary">{{ $we_do['title'] }}</h4> 
                                <p>{{ $we_do['content'] }}</p>
                                
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
       
     
       @include('layouts/footer')
    </div>

@endsection