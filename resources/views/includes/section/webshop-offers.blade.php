@if(count($offers))
    <section class="section-lg section bg-gray-2" id="pricing">
        <div class="container">
            <div class="row row-35 justify-content-center text-center">
                <div class="col-12 wow-outer">
                    <div class="wow slideInDown">
                        <h2>{{ __('webshop-offers.header') }}</h2>
                    </div>
                </div>
                <div class="col-lg-8 wow-outer">
                    <div class="wow fadeInUp">
                        <p class="sub-title text-opacity-80 px-lg-5">{{ __('webshop-offers.info') }}</p>
                    </div>
                </div>
            </div>
            <div class="tabs-custom tabs-horizontal tabs-modern" id="tabs-1">
                <div class="row g-0">
                    <div class="col-lg-4 col-xl-3 order-lg-2 wow-outer">
                        <div class="wow slideInRight">
                            <ul class="nav nav-tabs nav-tabs-modern">
                               @foreach($offers as $category => $offer)
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-{{$category}}" data-bs-toggle="tab">{{ $offer['category_name'] }}</a></li>
                               @endforeach
                            </ul>
                            <a class="button button-lg button-primary button-tabs-modern" target="_blank" href="{{ config('allegro.shop_link') }}">{{ __('webshop-offers.cta-btn') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 order-lg-1 wow-outer">
                        <div class="wow slideInLeft">
                            <div class="tab-content">
                                @foreach($offers as $category => $offer)
                                    <div class="tab-pane fade  @if ($loop->first) show active @endif" id="tabs-{{$category}}">
                                        @foreach($offer['products'] as $product)
                                            <div class="event-item-classic">
                                                <img style="height:150px; width: 200px; object-fit: contain; margin-right: 20px" src="{{ $product->image_url }}" class="img-fluid rounded float-left mr-3" alt="{{ $product->name }}">
                                                <div class="event-item-classic-caption ml-3">
                                                    <h4 class="event-item-classic-title"><a target="_blank" href="{{ $product->offer_link }}">{{ $product->name }}</a></h4>
                                                    <h5>Cena&nbsp;<span>{{ $product->price }}</span></h5>
                                                    <a class="button button-primary btn-sm" style="padding: 0.5rem 2rem !important; font-size: 0.9rem !important" href="{{ $product->offer_link }}" target="_blank">KUP TERAZ</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
