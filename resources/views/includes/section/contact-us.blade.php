<section class="section section-lg bg-gray-2 text-center" id="contacts">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
                <h2>{{ __('contact-us.title') }}</h2>
                <form id="contactUSForm">
                    {{ csrf_field() }}
                    <div class="form-box">
                        <input type="text" id="username" name="username" placeholder="{{ __('contact-us.form-name') }}">
                        <p class="error-text">1</p>
                    </div>
                     <div class="form-box">
                        <input type="email" id="email" name="email" placeholder="{{ __('contact-us.form-email') }}">
                        <p class="error-text">1</p>
                    </div>
                    <div class="form-box">
                        <input type="text" id="title" name="title" placeholder="{{ __('contact-us.form-title') }}">
                        <p class="error-text">1</p>
                    </div>
                    <div class="form-box">
                        <textarea id="message" name="message" placeholder="{{ __('contact-us.form-message') }}"></textarea>
                        <p class="error-text">1</p>
                    </div>
                    <div class="control-button">
                        <button class="button button-primary btn-submit send">{{ __('contact-us.form-btn') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@push('custom-scripts')
<script type="text/javascript">

        const username = document.querySelector("#username");
        const email = document.querySelector("#email");
        const title = document.querySelector("#title");
        const message = document.querySelector("#message");
        const sendBtn = document.querySelector(".send");
        
        
        const showError = (input, msg) => {
            const formBox = input.parentElement;
            const errorMsg = formBox.querySelector(".error-text");

            formBox.classList.add("error");
            errorMsg.textContent = msg + "!";
        };
        
        const clearError = (input) => {
            const formBox = input.parentElement;
            formBox.classList.remove("error");
        };
        
        const checkForm = (input) => {
            input.forEach((el) => {
                if (el.value === "") {
                    showError(el, el.placeholder);
                } else {
                    clearError(el);
                }
            });
        };

        const checkLength = (input, min) => {
            if ((input.value.length < min) & (input.value !== "")) {
                showError(
                    input,
                    `Nazwa użytkownika musi składać się z min. ${min} znaków.`
                );
            }
        };
        
        const checkMail = (email) => {
            const re =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            
            if (re.test(email.value)) {
                clearError(email);
            } else {
                showError(email, "E-mail jest niepoprawny");
            }
        };

        const clearForm = () => {
            username.value = ''
            email.value = ''
            title.value = ''
            message.value = ''     
        };

        const checkErrors = () => {
            const allInputs = document.querySelectorAll(".form-box");
            let countError = 0;
            
            allInputs.forEach((el) => {
                if (el.classList.contains("error")) {
                    countError++;
                }
            });
            
            if (countError === 0) {
                sendBtn.classList.add("checked");
                submit();
                clearForm();
            }
        };
        
        
        const toastMixin = Swal.mixin({
            toast: true,
            icon: "success",
            title: "General Title",
            animation: false,
            position: "top-right",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        sendBtn.addEventListener("click", (e) => {
            e.preventDefault();
            checkForm([username, email, title, message]);
            checkLength(username, 3);
            checkMail(email);
            checkErrors();
        });


        const submit = () => {
            let username = $('#username').val();
            let email = $('#email').val();
            let title = $('#title').val();
            let message = $('#message').val();

            $.ajax({
                url: "/contact-us",
                type:"POST",
                data:{
                    "_token": "{{ csrf_token() }}",
                    username:username,
                    email:email,
                    title:title,
                    message:message,
                },
                success:function(response){
                    showPopup();
                },
            });
        }

        const showPopup = () => {
            Swal.fire({
                toast: true,
                icon: "success",
                title: "Formularz został wysłany poprawnie!",
                width: "400px",
                position: "bottom",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });
        };
    </script>
@endpush
