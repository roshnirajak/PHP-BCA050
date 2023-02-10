<?php
	session_start();
	if(isset($_POST['submitBtn'])){
		$email= $_POST['email'];
		$password= $_POST['pwd'];
		
		if(($email=='test@gmail.com')&&($password==1234)){
			$_SESSION['email']=$email;
			header('location:homepage.php');
		}
		else{
			echo('Error while logging in');
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