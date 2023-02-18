<?php
	session_start();
	if(isset($_POST['submitBtn'])){
		$email= $_POST['email'];
		$password= $_POST['pwd'];
	
		if($email='test@gmail.com' && $password==1234){
			$_SESSION['user_email']= $email;
			setcookie('user2', 'login', time()+(60*5));
			header('location:prac1_homepage.php');
		}
	}
?>
<!DOCTYPE html>
<body>
	<form method="post" action="prac1_homepage.php">
		enter email:
		<input type="email" name="email"><br>
		enter password:
		<input type="password" name="pwd"><br>
		<input type="submit" value="Submit" name="submitBtn">
	<//form>
</body>
</html>