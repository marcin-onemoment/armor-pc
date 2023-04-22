<section class="section section-lg bg-gray-2 text-center" id="contacts">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-7">
                    <h2>{{ __('contact-us.title') }}</h2>
                    <!-- RD Mailform-->
                    {{--                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">--}}
                    {{--                            <label class="form-label" for="contact-name">Name</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">--}}
                    {{--                            <label class="form-label" for="contact-email">Email</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <input class="form-input" id="contact-subject" type="text" name="subject" data-constraints="@Required">--}}
                    {{--                            <label class="form-label" for="contact-subject">Subject</label>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="form-wrap">--}}
                    {{--                            <label class="form-label" for="contact-message">Message</label>--}}
                    {{--                            <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>--}}
                    {{--                        </div>--}}
                    {{--                        <button class="button button-md button-primary" type="submit">send message</button>--}}
                    {{--                    </form>--}}

                    <div class="form-box">
               
                <input type="text" id="username" placeholder="{{ __('contact-us.form-name') }}">
                <p class="error-text"></p>
            </div>
            <div class="form-box">
                <input type="email" id="email" placeholder="{{ __('contact-us.form-email') }}">
                <p class="error-text"></p>
            </div>
            <div class="form-box">
                <input type="text" id="title" placeholder="{{ __('contact-us.form-title') }}">
                <p class="error-text"></p>
            </div>
            <div class="form-box">
                
               <textarea id="message" placeholder="{{ __('contact-us.form-message') }}"></textarea>
                <p class="error-text"></p>
            </div>

            <div class="control-buttons">
                <button class="send">{{ __('contact-us.form-btn') }}</button>
            </div>

            <div class="popup">
                <p>Formularz został poprawnie wysłany!</p>
                <button class="close">Zamknij</button>
            </div>
        </form>
    </div>


                </div>
            </div>
        </div>
    </section>