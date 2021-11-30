<?php



    $conn = mysqli_connect("localhost", "root","", "chat");
    if(!$conn){
        echo "complete connect".mysqli_connect_error();
    }


?>