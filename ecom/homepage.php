<?php
    if(isset($_COOKIE["user"])){
        echo ("Welcome to Homepage");
    }
    else{
        header("location:login.php");
    }

?>