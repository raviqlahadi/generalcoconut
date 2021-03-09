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

         <div class="site-section" id="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span>Our Top</span>
                            <h2>Commodity</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
                        <div>
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/spice.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2><a href="#">Spices Commodity</a></h2>                            
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero
                                neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga
                                veritatis culpa quis!</p>
                            <p><a class="btn btn-outline-primary border-w-2 btn-md" href="#">Read More</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div>
                            <a href="#" class="mb-4 d-block"><img src="{{ asset('images/coconut.jpg') }}" alt="Image"
                                    class="img-fluid rounded"></a>
                            <h2><a href="#">Coconut Commodity</a></h2> 
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat et suscipit iste libero
                                neque. Vitae quidem ducimus voluptatibus nemo cum odio ab enim nisi, itaque, libero fuga
                                veritatis culpa quis!</p>
                            <p><a class="btn btn-outline-primary border-w-2 btn-md" href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-primary" id="about-section">
            <div class="container">
                 <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                            <span class="text-white">Meet Our</span>
                            <h2 class="text-white">Company</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-4 block-img-video-1-wrap">
                    <div class="col-md-4 mb-5 ml-auto mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="">
                        <h2 class="mb-3 text-black">Header Title Here</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio, maiores facere officiis. Cum, esse, iusto?</p>
                        
                    </div>
                    <div class="col-md-4 mb-5">
                        <figure class="block-img-video-1" data-aos="fade">
                            <a href="https://vimeo.com/45830194" data-fancybox data-ratio="2">
                                <span class="icon"><span class="icon-play"></span></span>
                                <img src="{{ asset('images/hero_1.jpg') }}" alt="Image" class="img-fluid">
                            </a>
                        </figure>
                    </div>
                    <div class="col-md-4 mb-5 ml-auto mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-delay="">
                        <h2 class="mb-3 text-black">Header Title Here</h2>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus id dignissimos nemo minus perspiciatis ullam itaque voluptas iure vero, nesciunt unde odit aspernatur distinctio, maiores facere officiis. Cum, esse, iusto?</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-mining"></span>
                            </div>
                            <h3 class="mb-3">COMMITMENT</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-refinery"></span>
                            </div>
                            <h3 class="mb-3">INTEGRITY</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-blacksmith"></span>
                            </div>
                            <h3 class="mb-3">QUALITY</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="block__35630">
                            <div class="icon mb-3">
                                <span class="flaticon-wagon"></span>
                            </div>
                            <h3 class="mb-3">INNOVATION</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur dolores voluptas
                            obcaecati quo consequuntur mollitia facilis.
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
     
  
     
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
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black">Need to know more on details. Get In Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, distinctio! Harum
                            quibusdam nisi, illum nulla aspernatur aut quidem aperiam, quae non tempora recusandae
                            voluptatibus fugit impedit.</p>
                        
                    </div>
                </div>
            </div>
        </div>
       @include('layouts/footer')
    </div>

@endsection