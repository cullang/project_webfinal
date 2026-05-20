const loginForm = document.getElementById("loginForm");

const email = document.getElementById("email");
const password = document.getElementById("password");

const emailError = document.getElementById("emailError");
const passwordError = document.getElementById("passwordError");

const emailBox = document.getElementById("emailBox");
const passwordBox = document.getElementById("passwordBox");

loginForm.addEventListener("submit", function(event){
  event.preventDefault();

  let valid = true;

  emailError.textContent = "";
  passwordError.textContent = "";

  emailBox.classList.remove("error");
  passwordBox.classList.remove("error");

  if(email.value.trim() === ""){
    emailError.textContent = "NIM atau Email wajib diisi";
    emailBox.classList.add("error");
    valid = false;
  }

  if(password.value.trim() === ""){
    passwordError.textContent = "Kata Sandi wajib diisi";
    passwordBox.classList.add("error");
    valid = false;
  }

  if(valid){
    window.location.href = "/dashboard";
  }
});

email.addEventListener("input", function(){
  if(email.value.trim() !== ""){
    emailError.textContent = "";
    emailBox.classList.remove("error");
  }
});

password.addEventListener("input", function(){
  if(password.value.trim() !== ""){
    passwordError.textContent = "";
    passwordBox.classList.remove("error");
  }
});