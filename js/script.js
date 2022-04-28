let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
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

document.querySelector('#callLogin').onclick = () =>{
    signUpForm.classList.remove('active');
    loginForm.classList.toggle('active');
}


// function to call login page
function callLogin(){
    let loginForm = document.querySelector('.login-form-container');
    loginForm.classList.toggle('active');
    console.log(loginForm.classList);
}


// for userinfo
let accInfo = document.querySelector('.account-box');

document.getElementById("login-btn").addEventListener("mouseover", mouseOver);

function mouseOver(){
    accInfo.classList.toggle('active');
}

// for removing items on window scroll
window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
    accInfo.classList.remove('active');
}