 <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="footer-heading mb-4">{{ $footer['title'] }}</h2>
                                <p>{{ $footer['about'] }}</p>
                            </div>
                        </div>
                         <div class="row">
                              <div class="col-md-12">
                                <h2 class="footer-heading mb-4">{{ $footer['sosmed'] }}</h2>
                              
                            </div>
                            <div class="col-md-3">
                               <a href="https://www.instagram.com/farmerindonesia_/"><img src="{{ asset('images/icon/instagram.svg') }}" height="50" width="auto" alt=""></a>
                            </div>
                             <div class="col-md-3">
                               <a href=""><img src="{{ asset('images/icon/facebook.svg') }}" height="50" width="auto" alt=""> </a>
                            </div>
                             <div class="col-md-3">
                               <a href="https://api.whatsapp.com/send?phone=6281244868884&text=Hi%2C++I+want+to+buy+Best+Farmer+product."><img src="{{ asset('images/icon/whatsapp.svg') }}" height="50" width="auto" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <h2 class="footer-heading mb-4">{{ $footer['product'] }}</h2>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/product') }}">{{ $footer['coconut_commodity'] }}</a></li>
                                    <li><a href="{{ url('/product') }}">{{ $footer['spices_commodity'] }}</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4">{{ $footer['features'] }}</h2>
                        <ul class="list-unstyled">
                              @foreach ($navs['urls'] as $key => $nav)
                                        <li><a href="{{ url($nav) }}">{{ Str::ucfirst($key) }}</a></li>                        
                              @endforeach
                          
                        </ul>
                    </div>
                    
                </div>
            </div>
            
            <div class="col-md-4 ml-auto">
                <img src="{{ asset('images/just-icon.png') }}" alt="" height="300px" width="auto">
            </div>
        </div>
        
    </div>
</footer>
<div>
    <a href="https://api.whatsapp.com/send?phone=6281244868884&text=Hi%2C++I+want+to+buy+Best+Farmer+product." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
</div>