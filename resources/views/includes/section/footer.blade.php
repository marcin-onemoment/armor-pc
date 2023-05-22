<footer class="section footer-classic context-dark">
    <div class="container">
        <div class="row row-50 justify-content-sm-between">
            <div class="col-lg-8 order-lg-2 wow-outer ps-xl-82">
                <div class="wow slideInRight">
                    <div class="row row-35 justify-content-between">
                        <div class="col-12">
                            <!-- RD Mailform-->
                            {{--                                <form class="rd-mailform text-start rd-form-inline" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">--}}
                            {{--                                    <div class="form-wrap">--}}
                            {{--                                        <label class="form-label" for="subscribe-email">E-mail</label>--}}
                            {{--                                        <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="form-button group-sm text-center text-lg-start">--}}
                            {{--                                        <button class="button button-md button-primary" type="submit">subscribe</button>--}}
                            {{--                                    </div>--}}
                            {{--                                </form>--}}
                        </div>
                        <div class="col-md-6">
                            <p class="sub-title-2 footer-title">{{ __('footer.contact') }}</p>
                            <ul class="list-contact-info">
                                <li><span class="icon mdi mdi-map-marker icon-md icon-primary"></span><span
                                        class="list-item-text"><a href="#">{{ __('footer.address') }}</a></span>
                                </li>
                                <li>
                                    <span class="icon mdi mdi-phone icon-sm icon-primary"></span>
                                    <span class="list-item-text">Serwis: <a href="tel:{{ __('footer.mobile') }}">{{ __('footer.mobile') }}</a></span>
                                </li>
                                <li>
                                    <span class="icon mdi mdi-phone icon-sm icon-primary"></span>
                                    <span class="list-item-text">Wysyłka: <a href="tel:{{ __('footer.ship_mobile') }}">{{ __('footer.ship_mobile') }}</a></span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xl-5">
                            <p class="sub-title-2 footer-title">{{ __('footer.socialmedia') }}</p>
                            <p>{{ __('footer.socialmedia-info') }}</p>
                            <ul class="social-list">
                                <li><a target="_blank" class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook"
                                       href="https://www.facebook.com/profile.php?id=100091757294879"></a></li>
{{--                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram"--}}
{{--                                       href="#"></a></li>--}}
{{--                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter"--}}
{{--                                       href="#"></a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 wow-outer pe-xl-85">
                <div class="wow slideInLeft">
                    <div class="row row-30">
                        <div class="col-12"><a class="brand" href="#home"><img class="brand-logo-light" src="images/logo_transparent.png" alt="" width="219" height="46"/></a>
                        </div>
                        <div class="col-12">
                            <p>{{ __('footer.info') }}</p><br>
                            <a style="color: white;" target="_blank" href="{{ asset('pdf/Regulamin strony ArmorPC.pdf') }}">Regulamin</a>
                            <div class="footer-divider"></div>
                            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Armor PC</span><span>.&nbsp;</span><span>{{ __('footer.rights') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
