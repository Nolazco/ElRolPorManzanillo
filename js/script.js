document.getElementById("btn_register").addEventListener("click",register);
document.getElementById("btn_login").addEventListener("click",login);
window.addEventListener("resize",ancho);

//Variables
var front_container = document.querySelector(".front_container")
var form_login = document.querySelector(".form_login")
var form_register = document.querySelector(".form_register")
var back_container_register = document.querySelector(".back_container_register")
var back_container_login = document.querySelector(".back_container_login")

function ancho(){
    if(window.innerWidth>850){
        back_container_login.style.display="block";
        back_container_register.style.display="block";
    }
    else{
        back_container_register.style.display="block";
        back_container_register.style.opacity="1";
        back_container_login.style.display="none";
        form_login.style.display="block";
        form_register.style.display="none";
        front_container.style.left="0";
    }
}

ancho();

function login(){
    if(window.innerWidth>850){
        form_register.style.display = "none";
        front_container.style.left = "10px";
        form_login.style.display = "block";
        back_container_register.style.opacity = "1";
        back_container_login.style.opacity = "0";
    }
    else{
            form_register.style.display = "none";
            front_container.style.left = "0px";
            form_login.style.display = "block";
            back_container_register.style.display = "block";
            back_container_login.style.display = "none";
    }
    
}

function register(){
    if(window.innerWidth>850){
        form_register.style.display = "block";
        front_container.style.left = "410px";
        form_login.style.display = "none";
        back_container_register.style.opacity = "0";
        back_container_login.style.opacity = "1";
    }
    else{
        form_register.style.display = "block";
        front_container.style.left = "0px";
        form_login.style.display = "none";
        back_container_register.style.display = "none";
        back_container_login.style.display = "block";
        back_container_login.style.opacity = "1";
    }
}
