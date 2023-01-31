<!DOCTYPE html>
<head>
<style>
	body{
		margin-left:50px;
	}
</style>
</head>
<body>
<form action="" method="post">
		Enter a:
		<input type="number" name="varA" id="varA"><br>
		Enter b:
		<input type="number" name="varB" id="varB"><br>
		
		<input type="submit" name="btnAdd" value="Add">
		<input type="submit" name="btnSubtract" value="Subtract">
		<input type="submit" name="btnDivide" value="Divide">
		<input type="submit" name="btnMultiply" value="Multiply">
	
</form>

</body>
</html>
<?php
	if(isset($_POST["btnAdd"])){
		$varA = $_POST["varA"];
		$varB = $_POST["varB"];
		$sum = $varA + $varB;
		echo "a+b: " . $sum;
	}
	else if(isset($_POST["btnSubtract"])){
		$varA = $_POST["varA"];
		$varB = $_POST["varB"];
		$diff= $varA-$varB;
		echo "a-b: " . $diff;
	}
	else if(isset($_POST["btnDivide"])){
		$varA = $_POST["varA"];
		$varB = $_POST["varB"];
		$quo = $varA / $varB;
		echo "a/b: " . $quo;
	}
	else if(isset($_POST["btnMultiply"])){
		$varA = $_POST["varA"];
		$varB = $_POST["varB"];
		$product= $varA*$varB;
		echo "a*b: " . $product;
	}
?>