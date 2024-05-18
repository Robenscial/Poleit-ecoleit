const container = document.getElementById("container");
const loginButton = document.getElementById("login");
const signUpButton = document.getElementById("signUp");

signUpButton.addEventListener('click', e => {
    e.preventDefault();
    container.classList.add("panel-active");
})
loginButton.addEventListener('click', e => {
    e.preventDefault();
    container.classList.remove("panel-active");
})