<?php 
    $conn = mysqli_connect("localhost", "root", "", "crud_php") ;

    if(!$conn){
        echo "Connection Failed";
    }