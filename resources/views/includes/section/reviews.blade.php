<!-- Testimonials-->
<section class="section section-lg bg-default text-center">
    <div class="container">
        <div class="wow-outer">
            <div class="wow slideInDown">
                <h2>{{ __('reviews.title') }}</h2>
            </div>
        </div>
        <!-- Slick Carousel-->
        <div class="slick-slider carousel-parent" data-arrows="true" data-loop="true" data-autoplay="true" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
            @foreach($opinions as $opinion)
                <div class="item">
                    <div class="testimonials-modern">
                        <div class="testimonials-modern-text">
                            <p>{{ $opinion->content }}</p>
                        </div>
                        <h4 class="testimonials-modern-name">Anna Kowalska</h4>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="slick-slider slider-dots" id="child-carousel" data-autoplaySpeed="3" data-autoplay="true" data-for=".carousel-parent" data-arrows="true" data-dots="true" data-swipe="true" data-items="{{ $opinions->count() }}" data-xs-items="{{ $opinions->count() }}" data-sm-items="{{ $opinions->count() }}" data-md-items="{{ $opinions->count() }}" data-lg-items="{{ $opinions->count() }}" data-xl-items="{{ $opinions->count() }}" data-slide-to-scroll="1">
        </div>
    </div>
</section>
