<?php

function checkEmailFormat($email){
    
    $pattern6 = "/\w+[@]\w+[.]\w+/";


    if(preg_match($pattern6,$email)==true){

        return 1;

    }else{
        return 0;
    }


}

echo checkEmailFormat("heinhtetlin@gmail.com");
echo "<br>";

function checkStrongPassword($password){

    $isupper = false;
    $islower = false;
    $isSpecial = false;
    $isDigit = false;
    $isvalit = false;

    if(preg_match("/[A-Z]/",$password)){
        $isupper = true;
    }

    if(preg_match("/[a-z]/",$password)){
        $islower = true;
    }

    
    if(preg_match("/[0-9]/",$password)){
        $isDigit = true;
    }

    
    if(preg_match("/[!@#$%&]/",$password)){
        $isSpecial = true;
    }

    if(strlen($password)>=8){
        $isvalit = true;

    }
    
    if($isupper and $islower and $isDigit and $isSpecial and $isvalit){
        return "Your password is strong";
    }else{
        return "weak password";
    } 
    
    


}

echo checkStrongPassword("Nn@3");





?>