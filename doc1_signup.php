<!DOCTYPE html>

<head>
    <title>SignUp</title>
</head>

<body>
    <form action="doc1_verify.php" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="con_pwd"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit_form" value="Submit"></td>
                <td><input type="reset" name="reset_form" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_GET['q'])) {
    $response = $_GET['q'];
    if ($response == 0) {
        $error = "<font color=red>Invalid Specification</font>";
        echo ($error);
    }
}
?>