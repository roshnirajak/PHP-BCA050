<?php
    if(isset($_POST['submitBtn'])){
        $password = $_POST['pwd'];
        if(strlen($password)<8){
            $msg= "Password length less than 8";
        }
        else{
            $msg= "Password length more than 8";
        }
    }
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2>Length of Password</h2>
    <form method="post">
        Enter username:
        <input type="text" name="uname"><br>
        Enter Password
        <input type="password" name="pwd"><br>
        <input type="submit" name="submitBtn" value="Submit"><br>
        <?php
            if(isset($msg)){
            echo($msg);
            }
        ?>
    </form>
</body>
</html>