<?php
    $conn = mysqli_connect("localhost","root","","ChatApp");
    if(!$conn){
        echo "Database connected" .mysqli_connect_error();
    }
?>