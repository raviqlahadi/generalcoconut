  <header class="site-navbar js-sticky-header site-navbar-target nav-top" role="banner" id="navbar">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="site-logo">
                <a href="{{ url('/') }}" class="text-black"><span class="text-primary"><img id="logoImage" src="{{ asset('images/logo-white.png') }}" alt="" height="50px"></a>
            </div>
            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                      @foreach ($navs['urls'] as $key => $nav)                      
                            <li><a href="{{ url($nav) }}" class="nav-link">{{ Str::ucfirst($key) }}</a></li>                        
                      @endforeach
                        <li class="has-children">
                            <a href="#about-section" class="nav-link">
                                <img src="{{ asset('images/icon/'.$locale.'.svg') }}" alt="" height="25">
                            
                            </a>
                            <ul class="dropdown arrow-top">
                                @if ($locale=='en')
                                    <li><a href="{{ url('/change/cn') }}" class="nav-link"> <img src="{{ asset('images/icon/cn.svg') }}" alt="" height="25"> {{ $navs['china'] }}</a></li>
                                @else
                                    <li><a href="{{ url('/change/en') }}" class="nav-link"> <img src="{{ asset('images/icon/en.svg') }}" alt="" height="25"> {{ $navs['english'] }}</a></li>    
                                @endif
                                
                                
        
                            </ul>
                        </li>
                    </ul>
                    
                </nav>
            </div>
            <div class="toggle-button d-inline-block d-lg-none"><a href="#"
                    class="site-menu-toggle py-5 js-menu-toggle text-black"><span
                        class="icon-menu h3"></span></a></div>
        </div>
    </div>
</header>