let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}


// for login form
let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}


// for signup form
let signUpForm = document.querySelector('.signup-form-container');

document.querySelector('#callSignUp').onclick = () =>{
    loginForm.classList.remove('active');
    signUpForm.classList.toggle('active');
}

document.querySelector('#close-signup-btn').onclick = () =>{
    signUpForm.classList.remove('active');
}