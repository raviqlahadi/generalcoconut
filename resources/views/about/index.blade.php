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
                            <p>Indonesia has been known for centuries as the land of spices and coconut.
There are lots people and especially Southeast Sulawesi people who rely on agriculture as their source of income.Sadly, there are still a lot of farmers in Indonesia who lives on poverty.
Because they don't have much market to sell their agricultural products,
they not having the power to set prices where distributors have the bargain to set prices in their favour.Because of that, we set our mission to bring transparency and fairness in price in order to help Indonesian farmers to prosper.</p>
                            <p>At the first, our company was focus on coconut derivative products,And after that our company expanded and focus on two products (spices and coconut products). We saw that a lots farmers focus on two products, therefore we work together to open the markets.</p>
                            <p>
                                <span class="text-primary">CV. BEST FARMER INDONESIA</span> is a privately owned company with a broadly diversified customer base. We are committed to provide highest quality coconut and spices products at competitive market price and serve our customers to the best of our ability. We always deliver on schedule as promised despite market fluctuation.Supported by more than 30 employees and more than 100 farmers, and best technology for our industry. Ultimately, it is our top priority to meet our customers’s satisfaction and expectation. Our dream just simple we want to help Indonesian farmer to prosper and bring more agricultural product from Indonesia to the world.
                            </p>
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
                            <h4 class="text-primary">Education and Training</h4> 
                            <p>Our company ia dedicated to provide continuous Education and training for coconut and spices Farmers in order to improve their welfare as well as the quality of our products.</p>
                            
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