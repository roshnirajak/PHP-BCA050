<?php
    if(isset($_POST['submitBtn'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $con_password = $_POST['con-pwd'];

        if(($email=='test@gmail.com') && ($password==1234) && ($password==$con_password)){
            echo ("Welcome " . $fname);
        }
        else{
            header('location:4)_sign-up.php?q=0');
        }
    }
?>