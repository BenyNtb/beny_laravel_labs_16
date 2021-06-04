<!-- Intro Section -->
<div class="hero-section">
    @foreach ($carousels as $carousel)  
        <div class="hero-content">
            <div class="hero-center">
                <img src="{img/big-logo.png}" alt="">
                <p>{{$carousel->titre}}</p>
            </div>
        </div>
    @endforeach
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="img/01.jpg"></div>
        <div class="item  hero-item" data-bg="img/02.jpg"></div>
    </div>
</div>
<!-- Intro Section -->