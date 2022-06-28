let btnLogin = document.getElementById("Login");
let btnSignUp = document.getElementById("Signup");

let signIn = document.querySelector(".signin");
let signUp = document.querySelector(".signup");

btnLogin.onclick = function(){
    signIn.classList.add("active");
    signUp.classList.add("inActive");
}

btnSignUp.onclick = function(){
    signIn.classList.remove("active");
    signUp.classList.remove("inActive");
}

