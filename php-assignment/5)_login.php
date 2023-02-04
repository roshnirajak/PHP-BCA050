<?php
    if(isset($_POST['submitBtn'])){
        $email = $_POST['email'];
        $password=$_POST['pwd'];

        if(($email=='test@gmail.com') && ($password==1234)){
            setcookie('user', 'login_done', time() + (60 * 2));
            header('location:5)_homepage.php');
        }
        else{
            echo ("Enter correct values");
        }
    }
?>
<!DOCTYPE html>
<head></head>
<body>
    <h2>Login Page</h2>
    <form method="post">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"><br></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submitBtn" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>