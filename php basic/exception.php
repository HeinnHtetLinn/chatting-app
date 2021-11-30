<?php
try{

    if(file_exists("b.txt")){
        echo "file exits";
    }else{
        throw new Exception("files not found");
        
    }

}catch(Exception $e){
    echo $e ->getMessage();

}





?>