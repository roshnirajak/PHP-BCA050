<?php
if(isset($_POST['submit_form'])){
    if(isset($_POST['fname'])){
        $fname = $_POST['fname'];
    }
    if(isset($_POST['lname'])){
        $lname = $_POST['lname'];
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if(isset($_POST['pwd'])){
        $password = $_POST['pwd'];
    }
    if(isset($_POST['con_pwd'])){
        $con_password = $_POST['con_pwd'];
    }
    
    if(($email=="test@gmail.com") && ($password=="1234") && ($password==$con_password)){
        echo ("Welcome " . $fname);
    }
    else{
        header("location:signup.php?q=0");
    }
}
?>