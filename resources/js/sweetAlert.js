// const sendBtn = document.querySelector(".send");

// const toastMixin = Swal.mixin({
//     toast: true,
//     icon: "success",
//     title: "General Title",
//     animation: false,
//     position: "top-right",
//     showConfirmButton: false,
//     timer: 3000,
//     timerProgressBar: true,
//     didOpen: (toast) => {
//         toast.addEventListener("mouseenter", Swal.stopTimer);
//         toast.addEventListener("mouseleave", Swal.resumeTimer);
//     },
// });

// const showPopup = () => {
//     if (sendBtn.classList.contains("checked")) {
//         sendBtn.addEventListener("click", function () {
//             Swal.fire({
//                 toast: true,
//                 icon: "success",
//                 title: "Formularz został wysłany poprawnie!",
//                 animation: false,
//                 width: "400px",
//                 position: "bottom",
//                 showConfirmButton: false,
//                 timer: 3000,
//                 timerProgressBar: true,
//                 didOpen: (toast) => {
//                     toast.addEventListener("mouseenter", Swal.stopTimer);
//                     toast.addEventListener("mouseleave", Swal.resumeTimer);
//                 },
//             });
//         });
//     } else {
//         console.log('ok');
//     }
// };
