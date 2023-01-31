<?php

if (isset($_POST["submit_btn"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (($email == "test@gmail.com") && ($password == "1234")) {
        setcookie("user", "login_done", time() + (60 * 10));
        header("location:homepage.php");
    } else {
        $error = "<font color=red>Invalid Specification</font>";
        echo ($error);
    }
}

?>

<!DOCTYPE html>

<head>
    <title>Login Page</title>
</head>

<body>
    <?php
    include('nav.html');
    ?>
    <div class="content">
        <h2>Login Page</h2>
        <hr>
        <form action="" method="post"
            style="display:flex; justify-content:center; align-content:center; margin-top:30px;">
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
                    <td><button type="submit" name="submit_btn">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>