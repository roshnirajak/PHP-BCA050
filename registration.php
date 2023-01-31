<?php
if (isset($_POST['pwd'])) {
    $password = $_POST["pwd"];
    echo $password;
}
?>
<!DOCTYPE html>

<head>
    <title>Registration</title>
</head>

<body>
    <form method="post">
        Enter Password:<input type="password" name="pwd"><br>
        <input type="submit" name="btnSubmit" value="Submit">
    </form>
</body>