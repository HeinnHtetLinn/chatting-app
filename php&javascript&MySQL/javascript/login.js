const form = document.querySelector(".login form"),
continueBtn = document.querySelector(".button input"),
errorText = document.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault();  //preventing form from submittimg
}

continueBtn.onclick =()=>{
    // let's start Ajax
    let xhr =new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/log.php", true);
    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200 ){
                let data = xhr.response;
                if(data == "success"){
                    location.href = "user.php";
                }else{
                    
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    // we have to send the form data through ajax to php
    let formData = new FormData(form);
      //creating new objects
    xhr.send(formData);  //sending the form data to php
}