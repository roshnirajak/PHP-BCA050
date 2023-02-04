<?php
    if(isset($_GET['q'])){
        $response = $_GET['q'];

        if($response=='0'){
            echo ("error");
        }
    }

?>
<!DOCTYPE html>
<head></head>
<body>
    <h2>Sign Up</h2>
    <form action="4)_verify.php" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname" required></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pwd" required></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="con-pwd" required></td>
            </tr>
            <tr>
                <td>&nbsp</td>
                <td><input type="submit" name="submitBtn" value="Submit"></td>
            </tr>
        </table>
        
    </from>
</body>
</html>