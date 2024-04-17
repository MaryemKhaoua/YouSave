// document.addEventListener("DOMContentLoaded", function (){
//     const form = document.getElementById("my-form");
//     const fnameInput = document.getElementById("fname");
//     const lnameInput = document.getElementById("lname");
//     const emailInput = document.getElementById("email");
//     const messageInput = document.getElementById("message");

//     const nameError = document.getElementById("name-error");
//     const emailError = document.getElementById("email-error");
//     const messageError = document.getElementById("message-error");

//     form.addEventListener("submit", function (event) {
//         event.preventDefault();
//         let isValid = true;

//         const emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;
//         const nameRegex = /^[a-z0-9_-]{3,15}$/;

//         if (fnameInput.value.length < 3) {
//             isValid = false;
//             nameError.textContent = "Le nom doit contenir au moins 3 caractères";
//         } else {
//             nameError.textContent = "";
//         }
//         if(!nameRegex.test(nameInput.value))
//         {
//             isValid = false;
//             nameError.textContent = "Veuillez entrer un nom valide";
//         } else {
//             nameError.textContent = "";
//         }

//         if (!emailRegex.test(emailInput.value)) {
//             isValid = false;
//             emailError.textContent = "Veuillez entrer une adresse e-mail valide";
//         } else {
//             emailError.textContent = "";
//         }

//         if (subjectInput.value === "0") {
//             isValid = false;
//             subjectError.textContent = "Veuillez sélectionner un sujet";
//         } else {
//             subjectError.textContent = "";
//         }
//         if (messageInput.value.length < 10) {
//             isValid = false;
//             messageError.textContent = "Le message doit contenir au moins 10 caractères";
//         } else {
//             messageError.textContent = "";
//         }
//     });
// });