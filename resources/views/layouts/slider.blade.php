  <div class="owl-carousel slide-one-item" style="margin-top: -100px">
    
            @foreach ($sliders as $slider)
                <div class="site-section-cover overlay img-bg-section" style="background-image: url('{{ asset('images/'.$slider['image']) }}'); ">
                    <div class="container">
                        <div class="row align-items-center justify-content-center text-center">
                            <div class="col-md-12 col-lg-7">
                                <p class="">{{ $slider['small_text'] }}</p>
                                <h1 class="mb-5">{{ $slider['heading'] }}</h1>
                                <p><a href="{{ url($slider['button_url']) }}"
                                        class="btn btn-outline-white border-w-2 btn-md">{{ $slider['button'] }}</a></p>
                            </div>
                        </div>
                    </div>
                </div> 
            @endforeach        
    
    

</div>
        
