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
        showPopup();
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

const showPopup = () => {
    Swal.fire({
        toast: true,
        icon: "success",
        title: "Formularz został wysłany poprawnie!",
        animation: false,
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

sendBtn.addEventListener("click", (e) => {
    e.preventDefault();
    checkForm([username, email, title, message]);
    checkLength(username, 3);
    checkMail(email);
    checkErrors();
});
