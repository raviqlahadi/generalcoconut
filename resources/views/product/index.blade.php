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
                            <span class="text-primary">Our Commodity</span>
                            <h2 class="text-white">Product</h2>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <section class="site-section bg-white" id="pricing-section">
            <div class="container">
               
                <div class="row">
                    <div class="col-lg-6 p-4 bg-primary-light left-corner">
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h4 class="mb-3 text-primary">Coconut Commodity</h2>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur
                                vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-success" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/semi-husked-coconut.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">COCONUT SEMI HUSKED</h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Coconut Commodity</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="{{ url('/product-detail') }}" class="btn btn-success  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-success" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/copra.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">COPRA</h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Coconut Commodity</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="#" class="btn btn-success  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-success" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/coconut-fiber.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">COCONUT FIBER</h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Coconut Commodity</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="#" class="btn btn-success  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-success" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/coconut-briquette.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">COCONUT BRIQUETTE </h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Coconut Commodity</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="#" class="btn btn-success  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-4 bg-light right-corner">
                        <div class="row mb-4 mt-4">
                            <div class="col-12">
                                <h4 class="mb-3 text-primary">Spices Commodity</h2>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quae temporibus tenetur
                                vitae iusto suscipit alias, laudantium, porro unde tempora.</p>
                            </div>
                        </div>
                        <div class="row">
                             <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-warning" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/black-pepper.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">BLACK PEPPER</h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">SPICES</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="#" class="btn btn-warning  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-danger" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/cloves.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">CLOVES</h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">SPICES</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="#" class="btn btn-danger  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-danger" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/candlenut.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">CANDLENUT</h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">SPICES</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="#" class="btn btn-danger  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6 col-md-6 mb-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="bg-white">
                                    <div class="bg-dark" style="height: 100px; margin-bottom:-100px;z-index:0"></div>
                                     <div class="block-team-member-1 text-center rounded" style="background:none;border:none">
                                    
                                    <figure>
                                        <img src="images/cashew.jpg" alt="Image" class="img-fluid rounded-circle">
                                    </figure>
                                    <h3 class="font-size-20 text-black">CASHEW</h3>
                                    <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">SPICES</span>
                                    <div class="block-social-1">
                                       <p class="text-center">
                                            <a href="#" class="btn btn-dark  text-white">See product</a>
                                        </p>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        
       @include('layouts/footer')
    </div>

@endsection