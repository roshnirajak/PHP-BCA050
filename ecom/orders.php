<?php
    if(isset($_COOKIE["user"])){
        echo ("Welcome to OrderPage");
    }
    else{
        header("location:login.php");
    }
?>