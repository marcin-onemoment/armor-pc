<section class="section section-main-bunner context-dark" id="home">
    <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
        <div class="carousel-indicators py-3">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item one active">
                <div class="item-content container">
                    <div class=" col-sm-10 col-md-7 col-xl-6">
                        <h1>{{ __('header.question-first') }}</h1>
                        <h4 class="text-opacity-80 fw-normal">{{ __('header.description-first') }}</h4>
                        <a class="button button-primary" href="#services">{{ __('header.cta-btn') }}</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item two">
                <div class="item-content container">
                    <div class="col-sm-10 col-md-7 col-xl-6">
                        <h1>{{ __('header.question-second') }}</h1>
                        <h4 class="text-opacity-80 fw-normal">{{ __('header.description-second') }}</h4>
                        <a class="button button-primary" href="#pricing">{{ __('header.cta-btn') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>
