  <section class="section">
        <div class="google-map-container" data-zoom="15" data-icon="images/gmap_marker.png"
             data-key="{{ config('app.google.map_key') }}"
             data-icon-active="images/gmap_marker.png" data-center="Kaliska 35A/212 Ostrów Wielkopolski"
             data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:43},{&quot;lightness&quot;:-11},{&quot;hue&quot;:&quot;#0088ff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ff0000&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:99}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#808080&quot;},{&quot;lightness&quot;:54}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ece2d9&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ccdca1&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#767676&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#b8cb93&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="Kaliska 35A/212 Ostrów Wielkopolski"
                    data-description="Kaliska 35A/212 Ostrów Wielkopolski"></li>
            </ul>
        </div>
    </section>

    <section class="section section-lg text-center bg-default">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic box-icon-classic-contacts">
                        <div class="box-icon-inner decorate-triangle"><i class="fa-regular fa-phone"></i></div>
                        <div class="box-icon-caption">
                            <h4><a href="tel:#">{{ __('maps.mobile') }}</a></h4>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic box-icon-classic-contacts">
                        <div class="box-icon-inner decorate-circle"><i class="fa-regular fa-map"></i></div>
                        <div class="box-icon-caption">
                            <h4>{{ __('maps.address') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="box-icon-classic box-icon-classic-contacts">
                        <div class="box-icon-inner decorate-rectangle"><i class="fa-regular fa-paper-plane"></i></div>
                        <div class="box-icon-caption">
                            <h4><a href="mailto:#">{{ __('maps.email') }}</a></h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
