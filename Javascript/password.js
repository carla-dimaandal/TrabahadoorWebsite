let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("Password");

eyeicon.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        eyeicon.src = "./Images/eye-open.png"
    }else{
        password.type = "password";
        eyeicon.src = "./Images/eye-close.png"
    }
}
