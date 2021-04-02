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
       
        <div class="site-section bg-white site-section-cover overlay" id="contact-section"                
                style="
                @if($product['type']=='Coconut Commodity' || $product['type']=='椰子商品')
                      background-image: url('{{ asset('images/coconut-1.jpg') }}');                
                @else
                      background-image: url('{{ asset('images/spices-1.jpg') }}');                
                @endif
              
                height:300px; background-position: center;
                background-repeat: no-repeat;
                background-size: cover; min-height:300px; margin-top:-100px">
            <div class="container">
                 <div class="row mb-5 mt-5 justify-content-center text-center">
                    <div class="col-md-7">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-primary">{{  $product['type'] }}</span>
                            <h2 class="text-white">{{ $product['name'] }}</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section" style="z-index: 1">
            <div class="block__73694 mb-2" id="services-section">
                <div class="container">
                    <div class="row d-flex no-gutters align-items-stretch">
                        @if(isset($product['variant']))
                            @foreach ($product['variant'] as $var)
                              <div class="col-lg-6">
                                    <div class="col-12 col-lg-12 block__73422 aos-init aos-animate" style="background-image: url();" data-aos="fade-right" data-aos-delay="">
                                        <img src="{{ asset('images/products/'.$var['image']) }}" alt="" width="100%">
                                    </div>
                                    <div class="col-lg-12 pt-4 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="">
                                        <h2 class="mb-3 text-black">{{ $var['name'] }}</h2>
                                        <p class="text-primary">{{ $var['type'] }}</p>
                                        <p>{{ $var['description'] }}</p>
                                    
                                        @if (isset($var['spesification']))
                                            <ul class="primary mt-5">
                                                @foreach ($var['spesification'] as $li)
                                                    <li>{!! $li !!}</li>    
                                                @endforeach
                                            </ul>
                                        @endif
                                    
                                        <p class="">
                                            <a href="https://api.whatsapp.com/send?phone=6281244868884&text=Hi%2C++I+want+to+buy+Best+Farmer+product+{{ $var['name'] }}+can+we+talk+more+about+it?" class="btn btn-primary btn-md text-white">{{ $products['contact_us'] }}</a>
                                        </p>
                                    </div>
                              </div>
                            @endforeach
                        @else
                            <div class="col-12 col-lg-6 block__73422 aos-init aos-animate" style="background-image: url();" data-aos="fade-right" data-aos-delay="">
                                <img src="{{ asset('images/products/'.$product['image']) }}" alt="" width="100%">
                            </div>
                            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="">
                                <h2 class="mb-3 text-black">{{ $product['name'] }}</h2>
                                <p class="text-primary">{{ $product['type'] }}</p>
                                <p>{{ $product['description'] }}</p>
                            
                                @if (isset($product['spesification']))
                                    <ul class="primary mt-5">
                                        @foreach ($product['spesification'] as $li)
                                            <li>{!! $li !!}</li>    
                                        @endforeach
                                    </ul>
                                @endif
                            
                                <p class="">
                                    <a href="https://api.whatsapp.com/send?phone=6281244868884&text=Hi%2C++I+want+to+buy+Best+Farmer+product+{{ $product['name'] }}+can+we+talk+more+about+it?" class="btn btn-primary btn-md text-white">{{ $products['contact_us'] }}</a>
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
         
        </div>
        
       @include('layouts/footer')
    </div>

@endsection
