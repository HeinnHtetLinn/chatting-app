// password show and hide 
const pwField = document.querySelector(".form input[type='password']"),
toggleBtn  = document.querySelector(".form .fields i");

toggleBtn.onclick = () =>{
    if(pwField.type == "password"){
        pwField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        pwField.type = "password";
        toggleBtn.classList.remove("active");
    }
}