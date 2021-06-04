<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{{$services9[0]->titre}}</h2>
        </div>
        <div class="row">
            @foreach ($services9 as $service)
                
            <!-- single service -->
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <div class="icon">
                        <i class="flaticon-023-flask"></i>
                    </div>
                    <div class="service-text">
                        <h2>{{$service->sous_titre}}</h2>
                        <p>{{$service->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->