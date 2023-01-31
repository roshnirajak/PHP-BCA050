<?php

if (isset($_POST["submit_btn"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (($email == "test@gmail.com") && ($password == "1234")) {
        setcookie("user", "login_done", time() + (60 * 1));
        header("location:homepage.php");
    } 
    else {
        $error = "<font color=red>Invalid Specification</font>";
        echo ($error);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit_btn"></td>
                <td><input type="reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>