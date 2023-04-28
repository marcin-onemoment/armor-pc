<section class="section section-lg bg-gray-2 text-center" id="contacts">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
                <h2>{{ __('contact-us.title') }}</h2>
                <form>
                    <div class="form-box">
                        <input type="text" id="username" placeholder="{{ __('contact-us.form-name') }}">
                        <p class="error-text">1</p>
                    </div>
                     <div class="form-box">
                        <input type="email" id="email" placeholder="{{ __('contact-us.form-email') }}">
                        <p class="error-text">1</p>
                    </div>
                    <div class="form-box">
                        <input type="text" id="title" placeholder="{{ __('contact-us.form-title') }}">
                        <p class="error-text">1</p>
                    </div>
                    <div class="form-box">
                        <textarea id="message" placeholder="{{ __('contact-us.form-message') }}"></textarea>
                        <p class="error-text">1</p>
                    </div>
                    <div class="control-button">
                        <button class="button button-primary send">{{ __('contact-us.form-btn') }}</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>